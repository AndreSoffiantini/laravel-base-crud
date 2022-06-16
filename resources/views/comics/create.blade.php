@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Add new Comic</h1>

        <form action="{{route('comics.store')}}" method="post">
            @csrf
        
            <div class="form-group my-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Batman" aria-describedby="titleHelper">
                <small id="titleHelper" class="text-muted">Type the comic title here</small>
            </div>

            <div class="form-group my-3">
                <label for="thumb">Thumb</label>
                <input type="text" name="thumb" id="thumb" class="form-control" placeholder="https://myimage.png" aria-describedby="thumbHelper">
                <small id="thumbHelper" class="text-muted">Type the thumb image path here</small>
            </div>

            <div class="form-group my-3">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="9.99" aria-describedby="priceHelper">
                <small id="priceHelper" class="text-muted">Type the comic price here</small>
            </div>

            <div class="form-group my-3">
                <label for="series">Series</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="Action comic" aria-describedby="seriesHelper">
                <small id="seriesHelper" class="text-muted">Type the comic series here</small>
            </div>

            <div class="form-group my-3">
                <label for="sale_date">Sale date</label>
                <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="2020-11-01" aria-describedby="saleDateHelper">
                <small id="saleDateHelper" class="text-muted">Type the comic sale date here</small>
            </div>

            <div class="form-group my-3">
                <label for="type">Type</label>
                <input type="text" name="type" id="type" class="form-control" placeholder="Comic book" aria-describedby="typeHelper">
                <small id="typeHelper" class="text-muted">Type the comic type here</small>
            </div>

            <div class="form-group">
                <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add Comic</button>

        </form>

    </div>

@endsection