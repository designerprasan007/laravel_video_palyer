@extends('layouts.app')

@section('content')
   
    <h3 class="py-3 px-3 bg-info">Live telecast</h3>
    @foreach($videos as $video)
    <div class="container">
    <div class="card">
            {!!$video->video!!}<iframe width="560" height="315" src="https://www.youtube.com/embed/JlE55lkKGzE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="{{$video->title}}" readonly>
            <label for="description">Description:</label>
            <textarea cols="5" rows="2" class="form-control" name="description" readonly>{{$video->description}} </textarea>
       <div class="row pt-3">
       <div class="col-md-4">
       <button class="btn btn-outline-dark">like<i class="far fa-thumbs-up px-2"></i></button>
       </div>
       <div class="col-md-8">
       <button class="btn btn-outline-dark">dislike<i class="far fa-thumbs-down px-2"></i></button>
       </div>
       </div>
            <label for="comment">comment:</label>
            <textarea cols="5" rows="2" class="form-control" name="comment">{{$video->comment}} </textarea>
     <div class="col-md-3 py-3"> 
        <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </div>
    </div>
    <hr>
        @endforeach
@endsection