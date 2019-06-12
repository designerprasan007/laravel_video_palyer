<h1>All videos</h1>
<table>
    <thead>
        <tr>
            <td>video</td>
            <td>title</td>
            <td>description</td>
        </tr>
    </thead>
</table>
@foreach($videos as $video)
<table>
<tr>
<td>{{ $video->video }}</td>
<td> {{ $video->title }}</td>
<td> {{ $video->description }} </td>
</tr>
</table>
@endforeach
