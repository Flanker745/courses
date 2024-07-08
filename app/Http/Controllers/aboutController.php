<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function show()
    {   
        $about = About::findOrFail(1);
        return view('about',[
            "about" => $about,
        ]);
    }
    public function update(Request $request, About $about)
    {
        $attts =   $request->validate([
            "title" => "required",
            "description" => "required",
            "contact" => "required|min:10|max:10",
            "address" => "required",
            "email" => "required|email"
        ]);
        $about = About::findOrFail(1);

        $about->update($attts);

        return redirect()->back();
    }
}
