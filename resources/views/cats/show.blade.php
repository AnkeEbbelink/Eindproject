@extends('layouts.footer')

@section('content')


<div class="container">
<h1 class="title">{{ $cat-> name }}</h1>
{{$cat ->description}}

<p>
    <a href="/cats/{{ $cat ->id}}/edit"> Edit</a>
</p>

</div>
@endsection