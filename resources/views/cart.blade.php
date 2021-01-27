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
                  <li class="nav-item"> <a class="nav-link" href="/onlineShop/category" tabindex="-1" aria-disabled="true">Category</a></li>
                  <li class="nav-item"> <a class="nav-link" href="/onlineShop/reviews" tabindex="-1" aria-disabled="true">Reviews</a></li>
                  <li class="nav-item"> <a class="nav-link" href="/onlineShop/blog" tabindex="-1" aria-disabled="true">Blog</a></li>
                  <li class="nav-item"> <a class="nav-link" href="/onlineShop/contact" tabindex="-1" aria-disabled="true">Contact</a></li>
                  <li class="nav-item active"> <a class="nav-link" href="/onlineShop/cart" tabindex="-1" aria-disabled="true"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
              </div>
            </div>
        </nav>

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

    <section class="fh5co-blog-content">
      <div class="blog-content-bckg">
        <div class="blog-content-inner" id="ggs">

          @if(session()->has('cart') && $cartItems->items!=NULL)
            <div class="container-fluid" id="blogNews" >
            
              <h2 class="card-title">Items in your cart</h2>
              @foreach($cartItems->items as $item)

                <div class="row single-blog">
                  <div class="col-xl-4 col-lg-12 single-blog__img">
                    <img class="card-img" src="<?php echo url('/'); ?>/uploads/{{$item['data']['cat']}}/{{$item['data']['image']}}" alt="" style=" width:200px; height:200px ">
                  </div>
                  <div class="col-xl-4 col-lg-12 single-blog__text">
                    <h2>{{$item['data']['name']}}</h2>
                    <p>id:{{$item['data']['id']}}</p>
                    <p>price:{{$item['data']['price']}} </p>
                    <p>quantity:{{$item['quantity']}} </p>
                    <p>Total : {{$item['totalSinglePrice']}} </p>
                    
                  </div>
                  <div class="col-xl-auto col-lg-12">
                    <a href="/onlineShop/cart/soloDelete/{{$item['id']}}" class="btn" style="background:white;">Remove from cart</a> 
                  </div>
                  
                </div>
              @endforeach
              <div class="row single-blog">
                <div class="col-xl-4 col-lg-12">
                  <!-- he hee hee -->
                </div>
                <div class="col-xl-4 col-lg-12" >
                      Toal price : {{$cartItems->totalPrice}}
                </div>
                <div class="col-xl-auto col-lg-12">
                  <a href="/onlineShop/cart/delete" class="btn" style="background:white;">Remove cart</a>
                </div>
              </div>
              <div class="row single-blog">
                <div class="col-xl-4 col-lg-12">
                  <!-- he hee hee -->
                </div>
                <div class="col-xl-4 col-lg-12" >
                      <a href="/onlineShop/cart/confirm/from" class="btn" style="background:white;">Buy</a>
                </div>
              </div>
            </div>
          @else
              <h2>Your cart is empty!</h2> 
          @endif
      </div>
    </div>
  </section>
  <!-- Blog content section end -->

        

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
        
    </div>
</body>
</html>
