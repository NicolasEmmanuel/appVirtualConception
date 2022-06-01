<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index() {

        if (Auth::User()->admin)
            return view('dashboard');
        else
            return view('index');
        

    }
}