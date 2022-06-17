@extends('layouts.app')

@section('content')

    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Thumb</th>
                    <th>Series</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach($comics as $comic)
                <tr>
                    <td scope="row">{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td><img width="50" src="{{$comic->thumb}}" alt=""></td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a href="{{route('comics.show', $comic->id)}}">Show</a>
                        <a href="{{route('comics.edit', $comic->id)}}">Edit</a>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                            @csrf
                            @method('DELETE')

                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>    

@endsection