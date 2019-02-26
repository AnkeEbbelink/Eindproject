<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

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

    public function update_avatar(Request $_request)
    {
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save (public_path('/img/avatars/' . $filename));

            $cat = \App\Cat::cat();
            $cat->avatar = $filename;
            $cat->save();
        }
        return view('cats.show', compact('cat')); 
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
        $cat->DateOfBirth = request('DateOfBirth');
        

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
        $cat->DateOfBirth = request('DateOfBirth');
        $cat->avatar = request('avatar');
        

        $cat->save();

        return redirect ('/cats');
    }

    

  




}

