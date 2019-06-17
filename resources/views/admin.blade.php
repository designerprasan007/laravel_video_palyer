@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Live Telecasts</h1>

    <form method="PATCH">
        <div class="form-group">
            <label for="title">video:</label>
            <input type="text" class="form-control" name="video" value="{{$video->video}}" readonly>
        </div>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="{{$video->title}}" readonly>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea cols="5" rows="5" class="form-control" name="description" readonly>{{$video->description}} </textarea>
        </div>
        <div class="float-right pt-5">
    <a class="btn btn-primary" href="{{ route('videos.index') }}"> Back</a>
</div>

        </form>
    </div>
</div>
@endsection