<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileManagerController extends Controller
{
    public function index(){
        return view('dashboard.page.filemanager');
    }
}
