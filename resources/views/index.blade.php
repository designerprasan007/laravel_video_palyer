<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
    <div class="container">
<h1>Live Telecasts</h1>
<table class="table text-center">
    <thead>
        <tr>
            <td>video</td>
            <td>title</td>
            <td>description</td>
        </tr>
    </thead>
@foreach($videos as $video)
<tr>
<td> {{ $video->video }}</td>
<td> {{ $video->title }}</td>
<td> {{ $video->description }} </td>
</tr>
@endforeach
</table>
</div>
</body>
</html>
