<?php

namespace App\Http\Controllers;

use App\Services\FileUploadService;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    private FileUploadService $fileUploadService;
    public function __construct(FileUploadService $fileUploadService)
    {
        $this->fileUploadService = $fileUploadService;
    }
    public function filePondUpload(Request $request){
        return $this->fileUploadService->filepondUpload($request);
    }
    public function editorFileUpload(Request $request){
        return $this->fileUploadService->editorUploadFile($request);
    }
}
