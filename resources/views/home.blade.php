@extends('layouts.app')

@section('content')

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

<body>

<!-- carousel -->

<form method="POST" class="pl-5 pt-5" action="{{ route('videos.store') }}">
        {{ csrf_field() }}
        <table>
<tr>video <input type="text" name="video"></tr>
<tr>title <input type="text" name="title"></tr>
<tr>description <input type="textarea" name="description"></textarea></tr>
<tr>comment <input type="textarea" name="comment"></textarea></tr>
</table>
    <div class="pt-3"></div>
<button type="submit">done</button>
        </form>
        @endsection
</body>
</html>

