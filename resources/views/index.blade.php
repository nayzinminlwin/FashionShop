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
  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css">
  <title>Me4U Online Shop</title>
</head>

<body>
  <nav class="navbar navbar-expand-md  fixed-top maine-menu">
    <div class="container">
      <button class="navbar-toggler ml-auto" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"> <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>
      <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active"> <a class="nav-link" href="#">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#about" tabindex="-1" aria-disabled="true">About</a></li>
          <li class="nav-item"> <a class="nav-link" href="#topSell" tabindex="-1" aria-disabled="true">Top Sell</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/category" tabindex="-1" aria-disabled="true">Category</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/reviews" tabindex="-1" aria-disabled="true">Reviews</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/blog" tabindex="-1" aria-disabled="true">Blog</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/contact" tabindex="-1" aria-disabled="true">Contact</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/cart" tabindex="-1" aria-disabled="true"><i class="fa fa-shopping-cart"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid fh5co-home-banner">
    <div class="card"> <img class="card-img" src="<?php echo url('/'); ?>/img//cvFoto.jpg" alt="" style="width: 1600px, height:26px;" >
      <div class="card-img-overlay">
        <div class="center-text">
          <h2 class="card-title">Save lives by staying home and buying online</h2>
          <a href="#about" class="btn">
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
  <div class="container-fluid fh5co-two-img">
    <div class="row">
      <div class="col-sm-6 pr-0 pl-0">
        <div class="card"> <img class="card-img" src="<?php echo url('/'); ?>/img//gg1.jpg" alt="">
          <div class="card-img-overlay"> </div>
        </div>
      </div>
      <div class="col-sm-6 pr-0 pl-0">
        <div class="card"> <img class="card-img" src="<?php echo url('/'); ?>/img//keke1.jpg" alt=""  >
          <div class="card-img-overlay"> </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid fh5co-recent-work">
    <div class="container contact-pop">
      <div class="row">
        <div class="col-md-6  pr-0">
          <div class="card"> <img class="card-img w-100" src="<?php echo url('/'); ?>/img//mm1.jpg" alt="">
            <div class="card-img-overlay"> </div>
          </div>
        </div>
        <div class="col-md-6 pl-0" id="about">
          <div class="content">
            <h3>I am Myo Khaing Khaing Tin</h3>
            <h4>Founder of MeForU OnlineShop</h4>
            <hr />
            <p>Sed do eiusmod tempor incididunt ut labore et dolo magna aliqua. Ut enim ad minim veniam, quis nostd exercitation ullamco laboris nisi ut aliquip ex ea mo consequat. Duis aute irure dolor in reprehenderit in ullamco.</p>
            <a href="#" class="btn">CONTACT</a> </div>
          </div>
        </div>
      </div>
      <div class="container recent" id="topSell">
        <div class="row">
          <h2>Top Selling Items</h2>
          <div class="owl-carousel owl-carousel2 owl-theme">

            @foreach($tops as $top)
              <div class="bx bx-1 myBox" style=" width:250px; height:350px; position:relative; ">
                <div class="card"> 
                  <img class="card-img" src="<?php echo url('/'); ?>/uploads/tops//{{$top->image}}" alt="">
                  <div class="card-img-overlay"> <a href="#"><img src="<?php echo url('/'); ?>/img//heart.png" class="heart" alt="heart icon"></a>
                    <div class="bottom-text">
                      <a href="/onlineShop/category/top/detail/{{$top->id}}">
                        <h5 class="card-title">{{ $top->name }}</h5>
                      </a>
                      <p class="card-text">{{$top->price}}Ks</p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
            
          </div>
        </div>
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