@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('videos.store') }}"  >
    {{ csrf_field() }}
    <h3 class="py-3 px-3 bg-info">Live telecast</h3>

    <div class="container">
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
        <div class="form-group">
            <label for="comment">comment:</label>
            <textarea cols="5" rows="5" class="form-control" name="comment">{{$video->comment}} </textarea>
        </div>
      </form>
    </div>
</div>
<!-- trending -->
<h3 class="py-3 px-3 bg-info">Trending</h3>
<div class="container">
  <div class="row">
    <div class="col-md-3">
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
        <div class="form-group">
            <label for="comment">comment:</label>
            <textarea cols="5" rows="5" class="form-control" name="comment">{{$video->comment}} </textarea>
        </div>
</div>
</form>
   <!-- 2nd video -->
   <div class="col-md-3">
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
        <div class="form-group">
            <label for="comment">comment:</label>
            <textarea cols="5" rows="5" class="form-control" name="comment">{{$video->comment}} </textarea>
        </div>
</div>
</form>
<!-- 3rd video -->
<div class="col-md-3">
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
        <div class="form-group">
            <label for="comment">comment:</label>
            <textarea cols="5" rows="5" class="form-control" name="comment">{{$video->comment}} </textarea>
        </div>
</div>
</form>
<!-- 4thvideo -->
<div class="col-md-3">
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
        <div class="form-group">
            <label for="comment">comment:</label>
            <textarea cols="5" rows="5" class="form-control" name="comment">{{$video->comment}} </textarea>
        </div>
</div>
</form>
</div>
</div>
             <!-- popular -->
             <h3 class="py-3 px-3 bg-info">Popular</h3>
             <div class="container">
  <div class="row">
    <div class="col-md-3">
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
        <div class="form-group">
            <label for="comment">comment:</label>
            <textarea cols="5" rows="5" class="form-control" name="comment">{{$video->comment}} </textarea>
        </div>
</div>
</form>
   <!-- 2nd video -->
   <div class="col-md-3">
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
        <div class="form-group">
            <label for="comment">comment:</label>
            <textarea cols="5" rows="5" class="form-control" name="comment">{{$video->comment}} </textarea>
        </div>
</div>
</form>
<!-- 3rd video -->
<div class="col-md-3">
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
        <div class="form-group">
            <label for="comment">comment:</label>
            <textarea cols="5" rows="5" class="form-control" name="comment">{{$video->comment}} </textarea>
        </div>
</div>
</form>
<!-- 4thvideo -->
<div class="col-md-3">
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
        <div class="form-group">
            <label for="comment">comment:</label>
            <textarea cols="5" rows="5" class="form-control" name="comment">{{$video->comment}} </textarea>
        </div>
</div>
</form>
</div>
</div>
@endsection