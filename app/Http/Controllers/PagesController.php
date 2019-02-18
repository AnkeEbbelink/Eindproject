<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome', [
            'foo' => 'bar'
        ]);
    }

    public function voorpagina()
    {
        return view('voorpagina');
    }
    public function invoer()
    {
        return view('invoer');
    }



    public function cats()
    {
        return view('cats');

    }

    public function create()
    {
        return view('create');

    }
}