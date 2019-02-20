@extends('layouts.footer')


@section('content')
<div class="container">
<h1 class= "title">Wijzigen</h1>


        
        <form method="POST" action="/cats/{{ $cat->id }}">
        
            {{ method_field('PATCH') }}
        @csrf
            <label for="name">naam:</label>
            <input type="name" class="form-control" name="name" placeholder="name" value="{{ $cat->name}}">
            
            <label for="description">description:</label>
            <input type="description" class="form-control" name="description" placeholder="description" value="{{ $cat->description}}">
                
            <div class= "btn-group">
                    <button type="update" class="btn btn-warning">Edit</button>
            
        </form>
                
        <form method="POST" action="/cats/{{$cat->id}}">
        @method('DELETE')
        @csrf
                
                    <button type="delete" class="btn btn-warning">Delete</button>
                </div>
        </form>

</div>
<BR>
    <BR>
        
    
  
       
         
                        
                        
        
    
            
           
                        
               
@endsection


    
     
  