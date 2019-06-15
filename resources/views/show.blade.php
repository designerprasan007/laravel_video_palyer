@extends('layouts.app')

@section('content')
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
    <div class="row">
    <form method="PATCH"  >
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
        <a href="{{route('videos.edit',$video)}}" class="btn btn-primary">edit</a>
        </form>
    </div>
</div>
@endsection