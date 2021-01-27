<!DOCTYPE html>
<!--
  Girly by FreeHTML5.co
  Twitter: https://twitter.com/fh5co
  Facebook: https://fb.com/fh5co
  URL: https://freehtml5.co
-->
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css">
  <title>Me4U Online Shop</title>
</head>

<body>
  <nav class="navbar navbar-expand-md  fixed-top maine-menu">
    <div class="container">
      <button class="navbar-toggler ml-auto" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"> <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>
      <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"> <a class="nav-link" href="/onlineShop">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop#about" tabindex="-1" aria-disabled="true">About</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop#topSell" tabindex="-1" aria-disabled="true">Top Sell</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/category" tabindex="-1" aria-disabled="true">Category</a></li>
          <li class="nav-item active"> <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Reviews</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/blog" tabindex="-1" aria-disabled="true">Blog</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/contact" tabindex="-1" aria-disabled="true">Contact</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/contact" tabindex="-1" aria-disabled="true"><i class="fa fa-shopping-cart"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid fh5co-home-banner">
    <div class="card"> <img class="card-img" src="<?php echo url('/'); ?>/img/girl1.jpg" alt="">
      <div class="card-img-overlay">
        <div class="center-text">
          <h2 class="card-title">We always keep you informed</h2>
          <a href="#review" class="btn">
            <svg width="201" height="51" viewBox="0 0 201 51">
              <defs>
                <style>
                .cls-1 {
                  fill: none;
                  stroke-width: 1px;
                  stroke: url(#linear-gradient);
                }
              </style>
              <linearGradient id="linear-gradient" x1="140.508" y1="50.5" x2="60.492" y2="0.5" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#e90e65"/>
                <stop offset="1" stop-color="#fff"/>
              </linearGradient>
            </defs>
            <rect id="Rounded_Rectangle_1" data-name="Rounded Rectangle 1" class="cls-1" x="0.5" y="0.5" width="200" height="50" rx="25" ry="25"/>
          </svg>
        Explore</a> </div>
      </div>
    </div>
  </div>
  
  </div>

  @if($review1==NULL)
    <div style="background: pink;">
      <center><h2>No review to show</h2></center>
    </div>

  @elseif($review2==NULL)
    @foreach($review1 as $ggReview1)
    @endforeach
    <!--  data 1 khu shi tl -->
    <div class="container-fluid fh5co-about-me" id="review">
      <div id="my-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="card"> <img class="card-img d-block w-100" src="<?php echo url('/'); ?>/img//about-me-img.jpg" alt="">
            <div class="card-img-overlay">
              <h2>People says about me</h2>
            </div>
          </div>

          
          <div class="carousel-item active">
            <div class="carousel-caption d-md-block"> <img src="<?php echo url('/'); ?>/img//quote-icon.png" alt="">
              <p>{{$ggReview1->msg}}</p>
            </div>
          </div>
          
        </div>

        <ol class="carousel-indicators">

          

          <li class="active" data-target="#my-carousel" data-slide-to="1" aria-current="location"> 
            <img src="<?php echo url('/'); ?>/img//about-me-img3.png" alt=""> <span>{{$ggReview1->name}}</span> 
          </li>

          

        </ol>
        
      </div>
    </div>
    
  @else
    @foreach($review1 as $ggReview1)
    @endforeach
    @foreach($review2 as $ggReview2)
    @endforeach
    <div class="container-fluid fh5co-about-me" id="review">
      <div id="my-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="card"> <img class="card-img d-block w-100" src="<?php echo url('/'); ?>/img//about-me-img.jpg" alt="">
            <div class="card-img-overlay">
              <h2>People says about me</h2>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-caption d-md-block"> <img src="<?php echo url('/'); ?>/img//quote-icon.png" alt="">
              <p>{{$ggReview1->msg}}</p>
            </div>
          </div>
          <div class="carousel-item active">
            <div class="carousel-caption d-md-block"> <img src="<?php echo url('/'); ?>/img//quote-icon.png" alt="">
              <p>{{$ggReview2->msg}}</p>
            </div>
          </div>
          
        </div>

        <ol class="carousel-indicators">

          <li data-target="#my-carousel" data-slide-to="0" > 
            <img src="<?php echo url('/'); ?>/img//about-me-img1.png" alt=""> <span>{{$ggReview1->name}}</span> 
          </li>

          <li class="active" data-target="#my-carousel" data-slide-to="1" aria-current="location"> 
            <img src="<?php echo url('/'); ?>/img//about-me-img2.png" alt=""> <span>{{$ggReview2->name}}</span> 
          </li>

          

        </ol>
        
      </div>
    </div>
  @endif
  
  <div class="container-fluid fh5co-insta-feed activity">
    <div class="container recent">
      <div class="row mb-5 pb-5">
        <div class="col-lg-6">
          <div class="twit-box">
            <div class="media mb-3"> <img class="align-self-start mr-3 rounded-circle" src="<?php echo url('/'); ?>/img//twit-girl-img.png" alt="">
              <div class="media-body">
                <h5 class="mb-0 mt-3">Sandra reigel</h5>
                <p>@sandraphotography</p>
              </div>
            </div>
            <p class="text-justify"> “Sed ut perspiciatis unde omnis iste nats error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut. </p>
            <div class="clearfix"> <a href="#" class="btn btn-primary mt-2 float-right">Follow</a> </div>
          </div>
        </div>
        <div class="col-lg-6 feed-caro">
          <h2>Instagram feed</h2>
          <div class="owl-carousel owl-carousel4 owl-theme">
            <div>
              <div class="card"> <img class="card-img" src="<?php echo url('/'); ?>/img//feed-img1.png" alt="">
                <div class="card-img-overlay"> </div>
              </div>
            </div>
            <div>
              <div class="card"> <img class="card-img" src="<?php echo url('/'); ?>/img//feed-img2.png"  alt="">
                <div class="card-img-overlay"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h2 class="text-center d-block">Find me on social media</h2>
      <div class="row social-links">
        <ul class="nav mx-auto">
          <li class="nav-item"> <a class="nav-link" href="https://www.facebook.com/fh5co"><img src="<?php echo url('/'); ?>/img//facebook.png" alt=""></a> </li>
          <li class="nav-item"> <a class="nav-link" href="https://twitter.com/fh5co"><img src="<?php echo url('/'); ?>/img//twitter.png" alt=""></a> </li>
          <li class="nav-item"> <a class="nav-link" href="#"><img src="<?php echo url('/'); ?>/img//pinterest.png" alt=""></a> </li>
          <li class="nav-item"> <a class="nav-link" href="#"><img src="<?php echo url('/'); ?>/img//google-plus.png" alt=""></a> </li>
        </ul>
      </div>
    </div>
  </div>



  <footer class="container-fluid p-0 pr-0">
    
     <div class="copy pt-4 pb-4">
      <p><a href="#" target="_blank"> &copy; 2020 Myo's Online Shop</a>  &nbsp;  |  &nbsp; All rights reserved</p>
    </div>
    
  </footer>

  <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
  <script src="<?php echo url('/'); ?>/js/jquery-3.3.1.slim.min.js"></script> 
  <script src="<?php echo url('/'); ?>/js/popper.min.js" ></script> 
  <script src="<?php echo url('/'); ?>/js/bootstrap.min.js"></script> 
  <script src="<?php echo url('/'); ?>/js/owl.carousel.min.js"></script> 
  <script src="<?php echo url('/'); ?>/js/main.js"></script>

</body>
</html>