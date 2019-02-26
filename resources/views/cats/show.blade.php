@extends('layouts.footer')

@section('content')
<br>
<br>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1><div class="card-header">{{ $cat-> name }}</div></h1>
                    <div class="card-body">
                            <img src="/img/avatars/default.png{{$cat->avatar}}" with="400px" height="400px" class="avatar">   
                            <form method="POST" action="/cats">  
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="col-md-6">
                        {{$cat ->avatar}}
                        {{$cat ->description}}<br>
                        {{$cat ->DateOfBirth}}
                            
                            <p>
                                <a href="/cats/{{ $cat ->id}}/edit"> Edit</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<br>
<br>

@endsection