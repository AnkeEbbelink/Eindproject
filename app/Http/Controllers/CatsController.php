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

    public function edit($id)
    {
        $cat = \App\Cat::findOrFail($id);
        return view('cats.edit', compact('cat'));
    }
    
    public function update($id)
    {
        $cat = \App\Cat::findOrFail($id);
        $cat->name = request('name');
        $cat->description = request('description');
        $cat->save();
 
        return redirect('/cats' );
    
    }

    public function destroy($id)
    {
     \App\Cat::findOrFail($id)->delete(); 
     return redirect('/cats' );
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

    

  




}

