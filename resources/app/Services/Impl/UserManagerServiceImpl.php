<?php
namespace App\Services\Impl;

use App\Models\Images;
use App\Models\Opd;
use App\Models\Role;
use App\Models\Temporary;
use App\Models\User;
use App\Services\UserManagerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserManagerServiceImpl implements UserManagerService
{

    private function validationCreate ($request){
        return $request->validate([
               'name' => 'required|string|max:150',
               'username' => 'required|string|unique:users,username|max:50',
               'email' => 'required|email|unique:users,email',
               'password' => 'required|min:5|max:20|',
               'opd' => 'required',
               'role' => 'required'
           ]);
       }

       private function validationUpdate ($request,$id){
        return $request->validate([
               'name' => 'required|string|max:150',
               'username' => 'required|string|max:50|unique:users,username,' . $id,
               'email' => 'required|email|unique:users,email,' . $id,
               'opd' => 'required',
               'role' => 'required'
           ]);
       }

    public function copyTemporaryFile($tmpFile, $fileId)
    {
        foreach ($tmpFile as $item) {
            $sourcePath = $item->file;
            $destinationPath = 'images/profile/' . basename($sourcePath);
            Storage::copy($sourcePath, $destinationPath);
            $profile = Images::where('user_id', $fileId)->get();
            if ($profile->isNotEmpty()) {
                foreach ($profile as $item) {
                    Storage::delete($item->image);
                    Storage::delete($item->thumbnail);
                    $item->delete();
                }
            }
            Images::create([
                'user_id' => $fileId,
                'image' => $destinationPath,
            ]);
            Storage::delete($sourcePath);
            $item->delete();
        }
    }
    public function getUsers()
    {
        $users = User::with(['roles', 'images'])->latest()->paginate(10);
        $opds = Opd::latest()->get();
        return [
            'users' => $users,
            'opds' => $opds,
        ];
    }

    public function getOpds(){
        return Opd::latest()->paginate(6);
    }

    public function getUserById($id){
        return User::with(['roles','images', 'opds'])->find($id);
    }

    public function registerUser(Request $request){
        $sessionId = Session::getId();
        $temporaryFiles = Temporary::where('session_id', $sessionId)->get();
        $validated = $this->validationCreate($request);
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'username'=> $validated['username'],
            'password' => $validated['password'],
            'opd_id' => $validated['opd']
         ]);

         $this->copyTemporaryFile($temporaryFiles, $user->id);
         $role = $request->input('role');
         if($role){
            Role::find($role);
            $user->roles()->attach($role);
         }
         else {
            return response()->json(['error' => 'Role ID tidak valid.'], 400);
        }
    }

    public function updateUser(Request $request, $id){
        $sessionId = Session::getId();
        $temporaryFiles = Temporary::where('session_id', $sessionId)->get();
        $validated = $this->validationUpdate($request,$id);
        $user = $this->getUserById($id);
        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'username'=> $validated['username'],
            'opd_id' => $validated['opd']
        ]);

        $this->copyTemporaryFile($temporaryFiles, $user->id);
        $role = $request->input('role');
        if($role){
           $user->roles()->detach();
           Role::find($role);
           $user->roles()->attach($role);
        }
        else {
           return response()->json(['error' => 'Role ID tidak valid.'], 400);
        }
    }

    public function delete($id){
       $user = $this->getUserById($id);
       if($user){
            $avatars = Images::where('user_id', $id)->get();
            foreach($avatars as $avatar){
                if($avatar){
                    Storage::delete($avatar->image);
                }
            }
       }
       $user->delete($id);
    }
}
