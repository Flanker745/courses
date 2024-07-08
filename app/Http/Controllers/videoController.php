<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class videoController extends Controller
{
    public function create(){
        return view('video.create');
    }
    public function show(){
        return view('video.show');
    }
}
