<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatsController extends Controller
{
    public function index()
    {
      $cats = \App\Cat::all();
      
     return view('cats.index', compact('cats'));
    }
    
    public function create()
    {
        return view('cats.create', compact('create'));
    }

    public function show()
    {
        
    }

    
    public function update($id)
    {
        $cat = \App\Cat::find($id);
       
        
        $cat->name = request('name');
        $cat->description = request('description');
 
        $cat->save();
 
        return redirect('/cats');
    
    }

    public function destroy()
    {
       
    }
    
    
    public function store(Request $request)
    {
        $cat = new \App\Cat;

        $cat->name = $request->input('name');
        $cat->description = $request->input('description');
        $cat->save();

        $cats = \App\Cat::all();
        return view ('cats.index', ['cats' =>$cats]);
       //return redirect('/cats');
    }

    public function edit($id)
    {
        $cat = \App\cat::find($id);
        return view('cats.edit', compact('cat'));
    }

  




}

