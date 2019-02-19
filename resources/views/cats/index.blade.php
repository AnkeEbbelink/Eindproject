@extends('layouts.footer')

@section('content')


        <h1 class="title">Cats</h1>
        <ul class="list-unstyled">
  <div class="container">  
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Description</th>
        </tr>
       
        @foreach ($cats as $cat)
        <li>
            <a href="/cats/{{$cat ->id}}">
        
            {{ $cat->name}}
        
            </a>
        </li>
    
        @endforeach
    </ul>
   
    </div>
@endsection

