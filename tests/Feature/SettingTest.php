<?php

namespace Tests\Feature;

use App\Services\SettingService;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class SettingTest extends TestCase
{
   private SettingService $settingService;
   public function setUp(): void
    {
        parent::setUp();
        $this->settingService = $this->app->make(SettingService::class);
    }
    public function testSettingService()
    {
        self::assertNotNull($this->settingService);
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

    public function testCreateSliderImageSuccess(){
        $this->testLoginSuccess();
        Storage::fake('local');
        $file = UploadedFile::fake()->image('example.jpg');
        $resaponse = $this->post('/dashboard/settings/slide/create', [
        'file' => $file,
        'title' => 'testttt',
        'caption' => 'testttt'
        ]);
        $resaponse->assertStatus(200);
    }
}
