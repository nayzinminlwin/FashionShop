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
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/reviews" tabindex="-1" aria-disabled="true">Reviews</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/blog" tabindex="-1" aria-disabled="true">Blog</a></li>
          <li class="nav-item active"> <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/cart" tabindex="-1" aria-disabled="true"><i class="fa fa-shopping-cart"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid fh5co-home-banner">
    <div class="card"> <img class="card-img" src="<?php echo url('/'); ?>/img/girl1.jpg" alt="">
      <div class="card-img-overlay">
        <div class="center-text">
          <h2 class="card-title">We always keep you informed</h2>
          <a href="#foot" class="btn">
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


  <footer class="container-fluid p-0 pr-0" id="foot">
    <div class="row mr-0 ml-0">
      <div class="col-md-6 pr-0 pl-0 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13035.46901327725!2d-80.85396551628644!3d35.234674411422155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8856a03af474f38f%3A0xf8301daadf5f7670!2sFourth+Ward%2C+Charlotte%2C+NC%2C+USA!5e0!3m2!1sen!2sin!4v1551001218548"  style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-md-6 content-us">
        <form method="post">
          @csrf
          <div class="contact-form" id="contact">
            <h3 class="text-uppercase">Contact me</h3>
            <input type="text" name="uName" class="form-control" placeholder="Your Name" required>
            <input type="text" name="uPhone" class="form-control" placeholder="Your Phone Number" required>
            <input type="text" name="uMail" class="form-control" placeholder="Your Email" required>
            <textarea class="form-control" name="uMsg" placeholder="Your Message" required></textarea>
            <button type="submit">Send</button>
          </div>
        </form>
      </div>
    </div>
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