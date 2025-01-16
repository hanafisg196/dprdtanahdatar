<?php

namespace Tests\Feature;

use App\Models\Temporary;
use App\Services\FileUploadService;
use Database\Seeders\UserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FileUploadTest extends TestCase
{
   /**
     * A basic feature test example.
     */
    private FileUploadService $fileUploadService;

    public function setUp(): void
    {
        parent::setUp();
        $this->fileUploadService = $this->app->make(FileUploadService::class);
    }
    public function testFileUploadService()
    {
        self::assertNotNull($this->fileUploadService);
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
    public function testFilepondUploadServiceSuccess(){
      $this->testLoginSuccess();
      Storage::fake('public');
      $initialCount = Temporary::count();
      $file = UploadedFile::fake()->image('example.jpg');
      $request = new \Illuminate\Http\Request();
      $request->files->set('file', $file);
      $response =  $this->fileUploadService->filepondUpload($request);
      $finalCount = Temporary::count();
      $this->assertNotEmpty($response);
      $this->assertEquals($initialCount + 1, $finalCount);
    }

    public function testFilepondUploadControllerSuccess(){
        $this->testLoginSuccess();
        Storage::fake('local');
        $file = UploadedFile::fake()->image('test.jpg');
        $response = $this->post('/upload', [
            'file' => $file
        ]);
        $response->assertStatus(200);
    }

    public function testFilepondUploadControllerFailed(){
        $this->testLoginSuccess();
        Storage::fake('local');
        $file = UploadedFile::fake()->image('test.tg');
        $response = $this->post('/upload', [
            'file' => $file
        ]);

        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'file' => 'The file field must be a file of type: png, jpg, jpeg.',
        ]);
        $response->assertSessionHasErrors([
            'file' => 'The file field must be a file of type: image/png, image/jpeg, image/jpg.',
        ]);
    }

    public function testEditorUploadFileSuccess(){
        $this->testLoginSuccess();
        $file = UploadedFile::fake()->image('test.pdf');
        $response = $this->post('/editor/upload', [
            'file' => $file
        ]);
        $response->assertStatus(200);
    }

    public function testEditorUploadFileError(){
        $this->testLoginSuccess();
        $file = UploadedFile::fake()->image('test.rar');
        $response = $this->post('/editor/upload', [
            'file' => $file
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors([
            'file' => 'The file field must be a file of type: png, jpg, jpeg, pdf, docx, xlsx.',
        ]);
        $response->assertSessionHasErrors([
            'file' => 'The file field must be a file of type: image/png, image/jpeg, image/jpg, application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/vnd.ms-excel, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet.',
        ]);
    }
}
