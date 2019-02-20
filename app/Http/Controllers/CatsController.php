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
        return view('cats.create');
    }

    public function show(\App\Cat $cat)
    {
       
        return view('cats.show', compact('cat'));  
    }

    public function edit(\App\Cat $cat)
    {
        
        
       
        return view('cats.edit', compact('cat'));
        
    }
    
    public function update($id)
    {
       
        
        $cat = \App\Cat::find($id);
        
        $cat->name = request('name');
        $cat->description = request('description');

        $cat->save();
 
        
        return redirect ('/cats');
        
    }

    public function destroy(\App\Cat $cat)
    {
    
        $cat->delete(); 
        
        return redirect('/cats');
    }
    
    
    public function store()
    {
        
        $cat = new \App\Cat();

        $cat->name = request ('name');
        $cat->description = request('description');

        $cat->save();

        return redirect ('/cats');
    }

    

  




}

