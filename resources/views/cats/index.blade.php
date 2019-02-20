@extends('layouts.footer')

@section('content')

<div class="container">
        <h1 class="title">Overzicht katten</h1>
        <ul class="list-unstyled">
   
        <tr>
            <th>id</th>
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

