<?php

namespace Tests\Feature;

use App\Models\Agenda;
use App\Models\AgendaCategory;
use App\Services\AgendaService;
use Carbon\Carbon;
use Database\Seeders\AgendaCategorySeeder;
use Database\Seeders\AgendaSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AgendaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    private AgendaService $agendaService;

    public function setUp(): void
    {
        parent::setUp();
        $this->agendaService = $this->app->make(AgendaService::class);
    }
    public function testAgendaService()
    {
        self::assertNotNull($this->agendaService);
    }

    public function testLoginSuccess()
    {
        $this->seed(UserSeeder::class);
        $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'rahasia',
        ])->assertRedirect('/dashboard')->assertSessionHas('user','test@example.com' );
        $user = Auth::user();
        self::assertNotNull($user);
    }
    public function testLoginFailed()
    {
        $this->seed(UserSeeder::class);
        $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'adasdasdas',
        ])->assertRedirect('/')
          ->assertSessionHas('error', 'Email atau password anda salah');
    }

    public function testLogoutSuccess(){
        $this->testLoginSuccess();
        $this->post('/logout')->assertRedirect('/login');
        $user = Auth::user();
        self::assertNull($user);
    }

    public function testGetAgenda(){
       $this->testLoginSuccess();
        $this->seed([
            AgendaCategorySeeder::class,
            AgendaSeeder::class]);
        $data = $this->agendaService->getAgendaByUser();
        //kenapa 10 karena data nya kita paginate
        self::assertEquals(10, count($data));
    }


    public function testCreateAgendaSuccess(){
        $this->testLoginSuccess();
        $this->seed([
            AgendaCategorySeeder::class,
        ]);
        $category = AgendaCategory::first();
        $this->post('/dashboard/content/agenda/store', [
            'agenda' => 'Test agenda',
            'status' => 0,
            'mulai' => Carbon::now()->toDateString(),
            'selesai' => Carbon::now()->toDateString(),
            'tempat' => 'Istana negara',
            'kategori' => $category->id,
        ])
        ->assertSessionHas('success', 'Agenda berhasil ditambahkan')
        ->assertRedirectToRoute('dashboard.agenda.list');
        $data = $this->agendaService->getAgendaByUser();
        self::assertEquals(1, count($data));
    }

    public function testCreateAgendaFailed(){
        $this->testLoginSuccess();
        $this->seed([
            AgendaCategorySeeder::class,
        ]);
         AgendaCategory::first();
         $this->post('/dashboard/content/agenda/store', [])
         ->assertSessionHasErrors([
            'agenda',
            'mulai',
            'selesai',
            'tempat',
            'kategori',
            'status',

        ]);
    }

    public function testUpdateAgendaSuccess(){
        $this->testCreateAgendaSuccess();
        $category = AgendaCategory::first();
        $user = Auth::user()->id;
        $data = Agenda::where('user_id', $user)->first();
       $response = $this->post('/dashboard/content/agenda/update' . '/' .  encrypt($data->id), [
            'agenda' => 'Test agenda update',
            'mulai' => Carbon::now()->translatedFormat('y-m-d'),
            'selesai' => Carbon::now()->translatedFormat('y-m-d'),
            'status' => 0,
            'tempat' => 'Istana negara update',
            'kategori' => $category->id,
        ]);
        $response->assertSessionHas('success', 'Agenda berhasil diperbarui');
        $response = $this->followingRedirects()->post('/dashboard/content/agenda/show/' . encrypt($data->id));
        $response->assertSee('Test agenda update');
        $response->assertSee('Istana negara update');
    }

    public function testUpdateAgendaFailed(){
        $this->testCreateAgendaSuccess();
        $user = Auth::user()->id;
        $data = Agenda::where('user_id', $user)->first();
        $this->post('/dashboard/content/agenda/update' . '/' . encrypt($data->id), [
            'agenda' => '',
            'mulai' => '',
            'selesai' => '',
            'tempat' => '',
            'kategori' => '',
        ])
        ->assertSessionHasErrors([
            'agenda',
            'mulai',
            'selesai',
            'tempat',
            'kategori',
        ]);
    }
    public function testDeleteAgendaSuccess(){
         $this->testGetAgenda();
         $agenda = Agenda::first();
         $response =  $this->post('/dashboard/content/agenda/delete/' . encrypt($agenda->id));
         $response->assertSessionHas('success', 'Agenda berhasil dihapus');
         $data = Agenda::all();
         self::assertEquals(11, count($data));
    }



}
