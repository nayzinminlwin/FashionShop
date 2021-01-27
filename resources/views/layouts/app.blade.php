<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Me4U Online Shop</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- cart icon on nav bar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- here we come from index.blade original head -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css">
    

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md  fixed-top maine-menu">
            <div class="container">
              <button class="navbar-toggler ml-auto" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"> <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>
              <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                  <li class="nav-item"> <a class="nav-link" href="/onlineShop">Home</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="/onlineShop#about" tabindex="-1" aria-disabled="true">About</a></li>
                  <li class="nav-item"> <a class="nav-link" href="/onlineShop#topSell" tabindex="-1" aria-disabled="true">Top Sell</a></li>
                  <li class="nav-item active"> <a class="nav-link" href="/onlineShop/category" tabindex="-1" aria-disabled="true">Category</a></li>
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
                  <a href="#category" class="btn">
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

        <main>
            @yield('content')
        </main>

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
        <script type="text/javascript">
          $(".myBox").click(function(){
            window.location=$(this).find("a").attr("href");
            return false;
          });
        </script>
    </div>
</body>
</html>
