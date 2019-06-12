<html>
    <body>
   
        <form method="POST" action="{{ route('videos.store') }}">
        {{ csrf_field() }}
        video<input type="text" name="video"><br>
        title <input type="text" name="title"><br>
        description <textarea name="description" rows="4" col="4"></textarea><br>
        <button type="submit">done</button>
        </form>
    </body>
</html>