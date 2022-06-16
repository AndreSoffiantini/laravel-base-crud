@extends('layouts.app')

@section('content')

    <h1 class="text-center">Single Comic Page</h1>
    
    <img class="img-fluid text-center" src="{{$comic->thumb}}" alt="">

    <h1>{{$comic->title}}</h1>
    <div class="content">
        {{$comic->description}}
    </div>

@endsection
