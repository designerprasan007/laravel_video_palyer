@extends('layouts.app')

@section('content')
   
    <h3 class="py-3 px-3 bg-info">Live telecast</h3>
    @foreach($videos as $video)
    <div class="container">
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
        <button class="btn btn-outline-dark" name="likes" value="likes">like<i class="far fa-thumbs-up pl-3"></i></button class="btn btn-outline-dark">
        <button class="btn btn-outline-dark" name="dislikes" value="dislikes">dislike<i class="far fa-thumbs-down pl-3"></i></button>   
        <div class="form-group">
            <label for="comment">comment:</label>
            <textarea cols="5" rows="5" class="form-control" name="comment">{{$video->comment}} </textarea>
        </div>
     
        <button type="submit" class="btn btn-primary">Update</button>

    </div>
    <hr>
        @endforeach
@endsection