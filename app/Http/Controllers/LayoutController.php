<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayoutController extends Controller
{
    public function index(){

        return view('index') ;
    }

    public function formation(){

        $formations = Formation::all() ;
        return view('formation', compact('formations'));
    }

    public function formation_detail($nom){

        $details = Formation::where('nom', '=', $nom) ;
        $formations = Formation::first() ;
        return view('formation-detail', compact('details','formations')) ;
    }

    public function blog(){

        return view('blog');
    }
}