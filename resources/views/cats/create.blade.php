@extends('layouts.footer')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1><div class="card-header">{{ __('Nieuwe kat') }}</div></h1>
                <div class="card-body">
                    <form method="POST" action="/cats">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="naam" class="col-md-4 col-form-label text-md-right">{{ __('naam') }}</label>
                                        <div class="col-md-6">
                                            <input type="text" name="name" class="form-control" placeholder="Naam kat">
                                        </div>
                                </div>
            
                                <div class="form-group row">
                                    <label for="geslacht" class="col-md-4 col-form-label text-md-right">{{ __('geslacht') }}</label>
                                        <div class="col-md-6">    
                                            <input type="text" name="description" class="form-control" placeholder="Poes/kater">
                                        </div>
                                </div>
                                <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-warning">Create</button>
                                        </div>
                                </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection