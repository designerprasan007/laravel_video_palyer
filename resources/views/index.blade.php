@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
    <div class="container">
<h1>Live Telecasts</h1>
@foreach($videos as $video)
<div class="container">
<h1>{{ $video->video }}</h1>
    <div class="card-body">
        <h5 class="card-title">{{ $video->title }}</h5>
        <p class="card-text">{{ $video->description }}</p>
        <p>{{ $video->action }}
        <a href="/show" class="btn btn-success">show</a>
        <a href="/edit" class="btn btn-info">edit</a>
        <a href="/destroy" class="btn btn-danger">delete</a></p>
    </div>
</div>
@endforeach
</table>
</div>
@endsection
</body>
</html>
