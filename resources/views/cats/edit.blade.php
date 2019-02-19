@extends('layouts.footer')


@section('content')

<h1 class= "title">Wijzigen</h1>

<div class="container">
<form>
        <form method="POST" action="/cats/{{$cat->id}}" style="margin-bottom: 1em;">
            @method('PATCH')
            @csrf
            <label for="name">naam:</label>
            <input type="name" class="form-control" name="name" placeholder="name" value="{{ $cat->name}}">
       
            <label for="description">description:</label>
            <input type="description" class="form-control" name="description" placeholder="description" value="{{ $cat->description}}">

                <button type="submit" class="btn btn-default">Submit</button>
        </form>
                <form method="POST" action="/cats/{{$cat->id}}">
                    @method('DELETE')
                    @csrf
                <button type="delete" class="btn btn-default">Delete</button>
</form>
</div>
    

  
       
         
                        
                        
        
    
            
           
                        
               
@endsection


    
     
  