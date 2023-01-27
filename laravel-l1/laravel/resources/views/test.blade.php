@extends('layouts/app')

@section ('content')
<h1>TEST</h1>
@foreach ($test as $test)
    <p>{{$test}}</p>
@endforeach
@endsection