<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <body>
   
        <form method="POST" class="pl-5 pt-5" action="{{ route('videos.store') }}">
        {{ csrf_field() }}
<tr>video <input type="text" name="video"></tr>
<tr>title <input type="text" name="title"></tr>
<tr>description <input type="textarea" name="description"></textarea></tr>
</table>
    <div class="pt-3"></div>
<button type="submit">done</button>
        </form>
        
    </body>
</html>