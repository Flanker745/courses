<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galleryController extends Controller
{
    public function create(){
        return view('gallery.create');
    }
    public function show(){
        return view('gallery.show');
    }
}
