@extends('layouts.app')
@section('content')

<h3 class="py-3 px-3 bg-info">Settings</h3>
<div class="container-fluid pt-5">
    <div class="row">
        <div class="col-md-3">
              
        </div>
        <div class="col-md-9">
                <h3 class="pt-3"><u>Account:-</u></h3>
                <!-- Button trigger modal -->
<section class="text-primary pt-3" data-toggle="modal" data-target="#exampleModalCenter"><i class="far fa-hand-point-right pr-3"></i>User-Name Setting</section>
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Username Setting</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <form>
                            <div class="form-group">
                              <label for="formGroupExampleInput">Enter Your Last Username</label>
                              <input type="text" class="form-control" id="formGroupExampleInput">
                            </div>
                            <div class="form-group">
                              <label for="formGroupExampleInput2">Enter Your New Username </label>
                              <input type="text" class="form-control" id="formGroupExampleInput2">
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputPassword1">Enter Your Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="******">
                                  </div>
                          </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- password -->
      <!-- Button trigger modal -->
<section class="text-primary pt-3" data-toggle="modal" data-target="#exampleModalCenter1"><i class="far fa-hand-point-right pr-3"></i>Password Setting</section>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Password Setting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
        <div class="form-group">
                <label for="exampleInputPassword1">Enter Your Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="******">
        </div>
            <div class="form-group">
                    <label for="exampleInputPassword1">Enter Your New Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="******">
            </div>
            <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Your Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="******">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<section  class="text-primary pt-3"><a href=""><i class="far fa-hand-point-right pr-3"></i>Data Usage Setting</a></section>
<section  class="text-primary pt-3"><a href=""><i class="far fa-hand-point-right pr-3"></i>Video Setting</a></section>
<section  class="text-primary pt-3"><a href=""><i class="far fa-hand-point-right pr-3"></i>Share</a></section>
<hr>
<!-- privacy -->
<h3 class="pt-5"><u>Privacy:-</u></h3>
<div class="form-check pt-3">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Keep My Account Private</label>
      </div>
      <div class="form-check pt-3">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Keep My Saved Videos Private</label>
          </div>
          <div class="form-check pt-3">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Share My Videos only With Friends</label>
              </div>
              <hr>
              <!-- privacy -->
<h3 class="pt-5"><u>Notification:-</u></h3>
<div class="form-check pt-3">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Send me Notification Of New Videos</label>
      </div>
      <div class="form-check pt-3">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Notify Me for New Updates</label>
          </div>
          <div class="form-check pt-3">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Notify Me For Comments On My Videos</label>
              </div>
              <hr>
<!-- payment -->
<h3 class="pt-5"><u>payment:-</u></h3>
<div class="form-check pt-3">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Make Billing enabled</label>
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

</body>
</html>