<?php
namespace App\Services\Impl;

use App\Models\EditorFile;
use App\Models\Temporary;
use App\Services\FileUploadService;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileUploadServiceImpl implements FileUploadService
{
    protected function validateFilepond(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:png,jpg,jpeg|mimetypes:image/png,image/jpeg,image/jpg',
        ]);
    }
    protected function validateFileEditor(Request $request)
    {
        $request->validate([
            'file' => 'nullable|file|mimes:png,jpg,jpeg,pdf,docx,xlsx|mimetypes:image/png,image/jpeg,image/jpg,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    }
    public function filepondUpload(Request $request)
    {
        $sessionId = Session::getId();
        $uuid = Str::uuid();
        $this->validateFilepond($request);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = $uuid . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('images/tmp/' . $fileName);
            Temporary::create([
                'file' => $path,
                'session_id' => $sessionId,
            ]);
            return $path;
        }
        return '';
    }

    public function clearTemporaryFile(){
        $sessionId = Session::getId();
        $file = Temporary::query()->where('session_id', $sessionId)->get();
        foreach ($file as $item) {
            Storage::delete($item->file);
            $item->delete();
        }
    }

    public function editorUploadFile(Request $request){
            $uuid = Str::uuid();
            $this->validateFileEditor($request);
            if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = $uuid . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('editor/file', $fileName);
            EditorFile::create([
                'file' => $path
            ]);
            return response()->json([
                'url' => asset('storage/' . $path),
            ]);
        }
        return response()->json(['error' => 'File not uploaded.'], 400);
    }


}
