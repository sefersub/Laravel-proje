<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kitapController extends Controller
{
    //
    public function create()
    {
        return view('kitap.create');
    }

    public function store(Request $request)
    {
        $image=$request->file('image');
        dd($image);
    }
}
