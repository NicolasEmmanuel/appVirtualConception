<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function list(){
        return view('admin.blog-list');
    }
}
