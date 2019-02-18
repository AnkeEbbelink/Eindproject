@extends('layout')


@section('content')

    <h1 class= "title">Wijzigen</h1>

    <form>
        <div class= "field">
            <label class ="label" for="">Title</label>

            <div class= "control">
                    <input type ="text" class="input" name="title" placeholder="Title">
            </div>
        </div>

        <div class= "field">
                <label class ="label" for="description">Description</label>
    
                <div class= "control">
                        <textarea name ="text" class="textarea"></textarea>
                </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">update</button>
            </div>
        </div>

    </form>
@endsection