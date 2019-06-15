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
    <form method="PATCH" action="{{ route('videos.update', '$edit')}}" >
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="form-group">
            <label for="title">video:</label>
            <input type="text" class="form-control" name="video" value="{{$video->video}}" >
        </div>
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="{{$video->title}}" >
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea cols="5" rows="5" class="form-control" name="description">{{$video->description}} </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection