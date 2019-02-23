@extends('layouts.footer')

@section('content')
<br>
<br>
<br>
<div class="container">
        <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <h1><div class="card-header">{{ __('Overzicht katten') }}</div></h1>
        
                            <div class="card-body">
     
                            <ul class="list-unstyled">
   
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>Description</th>
                                </tr>
                                <br>
                            @foreach ($cats as $cat)
                            <li>
                                <a href="/cats/{{$cat ->id}}">
        
                                {{ $cat->name}}
            
        
                                </a>
                            </li>
    
                            @endforeach
                        </ul>
                    </div>
                </div>
        </div>
                
   
</div>
<br>
<br>
<br>
@endsection

