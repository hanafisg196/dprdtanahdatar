<?php

namespace App\Services;

use \Illuminate\Http\Request;

interface FileUploadService {
    public function filepondUpload(Request $request);
    public function clearTemporaryFile();
    public function editorUploadFile(Request $request);
}
