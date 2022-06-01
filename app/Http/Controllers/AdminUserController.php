<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    //
    public function list(){
        return view('admin.user-list');
    }



    public function edit(){
        return view('admin.user-edit');
    }
}
