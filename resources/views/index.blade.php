@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
    <div class="container">
<h1>Live Telecasts</h1>
<table class="table table-striped">
        <thead>
            <tr>
              <td>ID</td>
              <td>video</td>
              <td>Title</td>
              <td>Description</td>
              <td colspan="4">Action</td>
            </tr>
        </thead>
        <tbody>
    @foreach($videos as $video)
    <tr>
        <td>{{$video->id}}</td>
        <td>{{$video->video}}</td>
        <td>{{$video->title}}</td>
        <td>{{$video->description}}</td>
        <td><a href="{{route('videos.show',$video)}}" class="btn btn-success">show</a></td>
        <td><a href="{{route('videos.edit',$video)}}" class="btn btn-primary">Edit</a></td>
       <td> <form action="{{route('videos.destroy', $video)}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
            </form></td>
            <td><a href="{{('/admin')}}" class="btn btn-info">Upload</a></td>
    </tr>
    </div>
</div>
@endforeach
</table>
</div>
@endsection
</body>
</html>
