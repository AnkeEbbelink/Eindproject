@extends('layouts.footer')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1><div class="card-header">{{ $cat-> name }}</div></h1>
                    <div class="card-body">
                        {{$cat ->description}}

                            <p>
                                <a href="/cats/{{ $cat ->id}}/edit"> Edit</a>
                            </p>

                    </div>
                </div>
            </div>
        </div>
</div>
@endsection