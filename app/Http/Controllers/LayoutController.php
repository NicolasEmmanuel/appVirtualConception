<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayoutController extends Controller
{
    public function index(){

        $formations = Formation::all() ;
        return view('index', compact('formations')) ;
    }

    public function formation(){

        return view('formation');
    }

    public function formation_detail(){

        return view('formation-detail');
    }

    public function blog(){

        return view('blog');
    }
}