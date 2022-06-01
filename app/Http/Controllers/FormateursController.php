<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;

class FormateursController extends Controller
{
    //
    public function index(){
        
        $formateurs=User::all()->where('role', '=', 'formateur' );
        return view('formateur', compact('formateurs'));
    }

    public function detail($id){

        $detailFormateur=User::FindOrFail($id);
        return view('detail', compact('detailFormateur'));
    }
}
