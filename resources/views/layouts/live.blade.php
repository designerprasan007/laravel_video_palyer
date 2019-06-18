@extends('layouts.app')
@section('content')
<h1>Live Telecasts</h1>

    <section class="container">
  <img class="img-fluid" src='{{ asset("images/42621.jpg") }}' alt="video">
<div class="card-body" name="video" value="{{$video->video}}">
    <h5 class="card-title" name="title" value="{{$video->title}}">Viddeo Title</h5>
    <p class="card-text" name="description" value="{{$video->description}}">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a class="btn btn-primary" href="{{ route('videos.index') }}"> Back</a>
</div>    
</section>
<h1 class="bg-info pl-5">Trending</h1>
<div class="container">
<article class="row">
<div class="col-md-4">
<div class="card">
  <img class="card-img-top" src='{{ asset("images/42621.jpg") }}' alt="video">
<div class="card-body" name="video" value="{{$video->video}}">
    <h5 class="card-title" name="title" value="{{$video->title}}">Viddeo Title</h5>
    <p class="card-text" name="description" value="{{$video->description}}">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a class="btn btn-primary" href="{{ route('videos.index') }}"> Back</a>
</div>
</div>
</div>
<div class="col-md-4">
  <div class="card">
  <img class="card-img-top" src='{{ asset("images/42621.jpg") }}' alt="video">
  <div class="card-body" name="video" value="{{$video->video}}">
    <h5 class="card-title" name="title" value="{{$video->title}}">Viddeo Title</h5>
    <p class="card-text" name="description" value="{{$video->description}}">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a class="btn btn-primary" href="{{ route('videos.index') }}"> Back</a>
  </div>
  </div>
</div>
<div class="col-md-4">
  <div class="card">
  <img class="card-img-top" src='{{ asset("images/42621.jpg") }}' alt="video">
  <div class="card-body" name="video" value="{{$video->video}}">
    <h5 class="card-title" name="title" value="{{$video->title}}">Viddeo Title</h5>
    <p class="card-text" name="description" value="{{$video->description}}">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a class="btn btn-primary" href="{{ route('videos.index') }}"> Back</a>
  </div>
  </div>
</div>
</article>
</div>

@endsection

