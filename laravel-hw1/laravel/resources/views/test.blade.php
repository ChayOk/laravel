@extends('layouts/app')

@section('content')
    <h1>Test</h1>
    @if ($test2 > 0)
        <h2>{{$test1}}</h2>
    @endif

    <div style="display: flex">
        @foreach ($test3 as $v)
            <p style="margin-right: 5px">{{$v}}</p>
        @endforeach
    </div>
@endsection