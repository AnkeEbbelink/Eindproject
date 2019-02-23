@extends('layouts.footer')


@section('content')
<br>
<br>
<br>

<div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <h1><div class="card-header">{{ __('Wijzigen') }}</div></h1>
        
                            <div class="card-body">
                                <form method="POST" action="/cats/{{ $cat->id }}">
        
                                    {{ method_field('PATCH') }}
                                    @csrf
                                    <div class="form-group row">
                                        <label for="naam" class="col-md-4 col-form-label text-md-right">{{ __('naam') }}</label>
                                        <div class="col-md-6">
                                            <input type="name" class="form-control" name="name" placeholder="name" value="{{ $cat->name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="geslacht" class="col-md-4 col-form-label text-md-right">{{ __('geslacht') }}</label>
                                        <div class="col-md-6">
                                            <input type="description" class="form-control" name="description" placeholder="description" value="{{ $cat->description}}">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <div class= "btn-group">
                                                    <button type="update" class="btn btn-warning">Edit</button>
                                                </div>
                                            </div>
                                    </div>
                                </form>
                
                                <form method="POST" action="/cats/{{$cat->id}}">
                                @method('DELETE')
                                @csrf
                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <div class= "btn-group">
                                                <button type="delete" class="btn btn-warning">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
        </div> 

</div>
<BR>
    <BR>
        <br>
        
    
  
       
         
                        
                        
        
    
            
           
                        
               
@endsection


    
     
  