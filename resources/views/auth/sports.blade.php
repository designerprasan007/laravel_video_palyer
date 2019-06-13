@extends('layouts.app')
@section('content') 
<h3 class="py-3 px-3 bg-info">Sports</h3>

<div class="container-fluid pt-5">
    <div class="row no-gutters">
    <div class="col-md-2 text-center">
        <a href="#" type="button" class="px-1 btn btn-primary" >live Channel<i class="far fa-hand-point-right pl-4"></i></a>
        <div class="pt-3"></div>
        <a href="/popular" type="button" class="px-3 btn btn-primary">Popular<i class="far fa-hand-point-right pl-4"></i></a>
        <div class="pt-3"></div>
        <a href="/music" type="button" class="px-4 btn btn-primary">Music<i class="far fa-hand-point-right pl-4"></i></a>
        <div class="pt-3"></div>
        <a href="/movies" type="button" class="px-4 btn btn-primary">Movies<i class="far fa-hand-point-right pl-3"></i></a>
        <div class="pt-3 text-center"></div>
        <a href="/sports" type="button" class="px-4 btn btn-primary"> Sports<i class="far fa-hand-point-right pl-3"></i></a>
    </div>
 <div class="col-md-10">
     <div class="row no-gutters">
        <div class="col-md-3">
            <ul style="list-style-type:none">
            <li><div class="card">
                <video class="embed-responsive embed-responsive-16by9" src='{{ asset("video/RainierFlowers720p.mov") }}' controls></video>
            <div class="card-body">
                <h5 class="card-title">Video Name</h5>
                <p class="card-text">Video details</p>
            </div>
            </div>
            </li>
            </ul>
        </div>
            <div class="col-md-3">
            <ul style="list-style-type:none">
            <li><div class="card">
            <video class="embed-responsive embed-responsive-16by9" src='{{ asset("video/RainierFlowers720p.mov") }}' controls></video>
            <div class="card-body">
                <h5 class="card-title">Video Name</h5>
                <p class="card-text">Video details</p>
            </div>
            </div></li>
        </ul>
         </div>
         <div class="col-md-3">
                <ul style="list-style-type:none">
                <li><div class="card">
                <video class="embed-responsive embed-responsive-16by9" src='{{ asset("video/RainierFlowers720p.mov") }}' controls></video>
                <div class="card-body">
                    <h5 class="card-title">Video Name</h5>
                    <p class="card-text">Video details</p>
                </div>
                </div></li>
            </ul>
             </div>
             <div class="col-md-3">
                    <ul style="list-style-type:none">
                    <li><div class="card">
                    <video class="embed-responsive embed-responsive-16by9" src='{{ asset("video/RainierFlowers720p.mov") }}' controls></video>
                    <div class="card-body">
                        <h5 class="card-title">Video Name</h5>
                        <p class="card-text">Video details</p>
                    </div>
                    </div></li>
                </ul>
                 </div>
     </div>
     <hr>
     <div class="row no-gutters">
     <div class="col-md-3">
            <ul style="list-style-type:none">
            <li><div class="card">
            <video class="embed-responsive embed-responsive-16by9" src='{{ asset("video/RainierFlowers720p.mov") }}' controls></video>
            <div class="card-body">
                <h5 class="card-title">Video Name</h5>
                <p class="card-text">Video details</p>
            </div>
            </div></li>
        </ul>
         </div>
         <div class="col-md-3">
                <ul style="list-style-type:none">
                <li><div class="card">
                <video class="embed-responsive embed-responsive-16by9" src='{{ asset("video/RainierFlowers720p.mov") }}' controls></video>
                <div class="card-body">
                    <h5 class="card-title">Video Name</h5>
                    <p class="card-text">Video details</p>
                </div>
                </div></li>
            </ul>
             </div>
             <div class="col-md-3">
                    <ul style="list-style-type:none">
                    <li><div class="card">
                    <video class="embed-responsive embed-responsive-16by9" src='{{ asset("video/RainierFlowers720p.mov") }}' controls></video>
                    <div class="card-body">
                        <h5 class="card-title">Video Name</h5>
                        <p class="card-text">Video details</p>
                    </div>
                    </div></li>
                </ul>
                 </div>
                 <div class="col-md-3">
                        <ul style="list-style-type:none">
                        <li><div class="card">
                        <video class="embed-responsive embed-responsive-16by9" src='{{ asset("video/RainierFlowers720p.mov") }}' controls></video>
                        <div class="card-body">
                            <h5 class="card-title">Video Name</h5>
                            <p class="card-text">Video details</p>
                        </div>
                        </div></li>
                    </ul>
                     </div> 

        </div>
</div>
</div>
    </div>   
  <!-- footer -->
  <div class="pt-3"></div>
  <div class="bg-dark text-white pt-5 pl-5">
    <div class="row">
      <div class="col-md-9">
    <h3 class="d-inline" id="my-popover"><i class="far fa-hand-point-right pr-2"></i>contact us</a></h3>
<!-- Button trigger modal -->
<div  data-toggle="modal" data-target="#exampleModalCenter">
<h3 class="a"><i class="far fa-hand-point-right pr-2"></i>Feedback</h3>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title text-dark" id="exampleModalLongTitle">Feedback</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form>
<div class="form-group">
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</div>
    <h3><a href="#"><i class="far fa-hand-point-right pr-2"></i>Help</a></h3>
  </div>
  <div class="col-md-3 pt-5 mt-5">
    <ul class="list-inline fa-pull-right">
      <li class="list-inline-item"> <a href="https://www.facebook.com/"><i class="fab fa-facebook-square fa-2x"></i></a></li>
        <li class="list-inline-item"><a href="https://twitter.com"><i class="fab fa-twitter fa-2x"></i></a></li>
          <li class="list-inline-item pr-3"><a href="https://www.instagram.com"><i class="fab fa-instagram fa-2x"></i></a></li>
  </ul>
</div>
</div>
  </div>
 @endsection

