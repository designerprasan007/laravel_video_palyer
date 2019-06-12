@extends('layouts.app')

@section('content')

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

<body>

<!-- carousel -->
<h3 class="py-3 px-3 bg-info">Live telecast</h3>
<div class="container-fluid">
<div id="carouselExampleControls" class="carousel slide py-5" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/bhVH0C-6f8Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h4 class="pl-3">heading</h4>
                <p class="pl-5">description</p>
          </div>
          <div class="carousel-item">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/rpfFkopJNO0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h4 class="pl-3">heading</h4>
                <p class="pl-5">description</p>
          </div>
          <div class="carousel-item">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/jNVZjNB8ptk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h4 class="pl-3">heading</h4>
                <p class="pl-5">description</p>
          </div>
          <div class="carousel-item">
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/9_Uqc_U9-rI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h4 class="pl-3">heading</h4>
                <p class="pl-5">description</p> 
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>
      <!-- /main corousel -->
      <!-- trending -->
      <h3 class="py-3 px-3 bg-info">Trending</h3>
      <div class="row py-3 pl-5 ml-5">
      <div class="card" style="width: 18rem;">
        <iframe width="300" height="212" class="px-2" src="https://www.youtube.com/embed/JMPPJa_nDEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <iframe width="300" height="212" class="px-2" src="https://www.youtube.com/embed/JMPPJa_nDEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <iframe width="300" height="212" class="px-2" src="https://www.youtube.com/embed/JMPPJa_nDEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <iframe width="300" height="212" class="px-2" src="https://www.youtube.com/embed/JMPPJa_nDEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <section class="pr-3">
      <a class="black float-right px-3" target="_blank"  href="/trending">Show more</a><br>
    </section>
             <!-- popular -->
          <div class="pt-3"></div>
          <h3 class="py-3 px-3 bg-info">Popular</h3>
          <div class="row py-3 pl-5 ml-5">
          <div class="card" style="width: 18rem;">
            <iframe width="300" height="212" class="px-2" src="https://www.youtube.com/embed/JMPPJa_nDEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <iframe width="300" height="212" class="px-2" src="https://www.youtube.com/embed/JMPPJa_nDEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <iframe width="300" height="212" class="px-2" src="https://www.youtube.com/embed/JMPPJa_nDEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <iframe width="300" height="212" class="px-2" src="https://www.youtube.com/embed/JMPPJa_nDEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <section class="pr-3">
      <a class="black float-right px-3" href="/popular">Show more</a><br>
    </section>
              <!-- music -->
          <div class="pt-3"></div>
              <h3 class="py-3 px-3 bg-info">Music</h3>
              <div class="row py-3 pl-5 ml-5">
              <div class="card" style="width: 18rem;">
                <iframe width="300" height="212" class="px-2" src="https://www.youtube.com/embed/JMPPJa_nDEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <iframe width="300" height="212" class="px-2" src="https://www.youtube.com/embed/JMPPJa_nDEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <iframe width="300" height="212" class="px-2" src="https://www.youtube.com/embed/JMPPJa_nDEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <iframe width="300" height="212" class="px-2" src="https://www.youtube.com/embed/JMPPJa_nDEw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>
            <section class="pr-3">
              <a class="black float-right px-3" href="/music">Show more</a><br>
            </section>
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









<script src='{{ asset("js/jquery-3.3.1.slim.min.js") }}'></script>
<script src='{{ asset("js/popper.min.js") }}'></script>
<script src='{{ asset("js/bootstrap.min.js") }}'></script>
      <script>  $(function() {
  $('#my-popover').popover({
    content: 'Temple Tree Tech, Somwar Peth Belgaum.'
  })
});
</script>
                   


















                </div>
            </div>
        </div>
    </div>
</div>
@endsection
