@extends('layout')


@section('content')

    <h1 class= "title">Wijzigen</h1>

    <form method="POST" action="/cats/{{$cat->id}}">
        {{ method_field('PATCH')}}
        {{csrf_field()}}
        <div class="form-group">
                <label for="name">naam:</label>
                <input type="name" class="form-control" id="name" placeholder="name" value="{{ $cat->name}}">

            </div>
            <div class="form-group">
                    <label for="description">description:</label>
                    <input type="description" class="form-control" id="description" placeholder="description" value="{{ $cat->description}}">
    

        
       
                    <button type="submit" class="btn btn-default">Submit</button>
                </form> 
@endsection


    
     
  