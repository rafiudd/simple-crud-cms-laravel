<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome',[
            'foo'  => 'bar'
        ]);
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function about()
    {
        return view('about');
    }
}
