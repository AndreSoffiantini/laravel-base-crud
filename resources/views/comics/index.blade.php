@extends('layouts.app')

@section('content')

    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Thumb</th>
                    <th>Price</th>
                    <th>Series</th>
                    <th>Sale Date</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>

                @foreach($comics as $comic)
                <tr>
                    <td scope="row">{{$comic->id}}</td>
                    <td><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></td>
                    <td>{{$comic->description}}</td>
                    <td><img width="50" src="{{$comic->thumb}}" alt=""></td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>    

@endsection