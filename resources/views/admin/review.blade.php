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
  <link rel="stylesheet" href="<?php echo url('/'); ?>/css/style.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Me4U Online Shop</title>
</head>

<body>
  <nav class="navbar navbar-expand-md  fixed-top maine-menu">
    <div class="container">
      <button class="navbar-toggler ml-auto" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"> <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>
      <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/AdminHeHee">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/Admin/Add" tabindex="-1" aria-disabled="true">Add</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/Admin/Edit" tabindex="-1" aria-disabled="true">Edit</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/Admin/Delete" tabindex="-1" aria-disabled="true">Delete</a></li>
          <li class="nav-item active"> <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Reviews</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/Admin/Orders" tabindex="-1" aria-disabled="true">Orders</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/Admin/OrderHistory" tabindex="-1" aria-disabled="true">OrderHistory</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/" tabindex="-1" aria-disabled="true">Main Page</a></li>

          @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>

          @else

            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" aria-disabled="true">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
                            </li>
            @endguest
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container-fluid fh5co-home-banner">
    <div class="card"> <img class="card-img" src="<?php echo url('/'); ?>/img/girl1.jpg" alt="">
      <div class="card-img-overlay">
        <div class="center-text">
          <h2 class="card-title">This page is Review page for Respectful admin.</h2>
           </div>
      </div>
    </div>
  </div>


  <div class="container-fluid fh5co-about-me" id="review">
    
    <div style="background: pink;" >
        <h2 >People says about me</h2> 
    </div>  
    @foreach($reviews as $review)
      <div id="my-carousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">

          <div class="card"> <img class="card-img d-block w-100" src="" alt="">
            <div class="card-img-overlay">
              
            </div>
          </div>

          	
          
          	
  	        <div class="carousel-item active">
  	          <div class="carousel-caption d-md-block"> <img src="<?php echo url('/'); ?>/img//quote-icon.png" alt="">
  	            <p>{{$review->msg}}</p>
  	          </div>
  	        </div>

  	        
  	    
          

        </div>

        <ol class="carousel-indicators">

        	
  	        
  		
         
  	        <li class="active" data-target="#my-carousel" data-slide-to="1" aria-current="location"> 
  	          <img src="<?php echo url('/'); ?>/img//about-me-img2.png" alt=""> <span>{{$review->name}}</span> 
              @if($review->status==1)
                <span style="width: 200px">Review status: Showing</span>
              @else
                <span style="width: 200px">Review status: Hidden</span>
              @endif
  	        </li>
            
  	         
  	        

        </ol>
        
        <div style="background: pink;">
          <center><a href="/onlineShop/Admin/UploadReviews/{{$review->id}}">Add to Review</a></center>
        </div>
        
        
      </div>
    @endforeach
  </div>



  <footer class="container-fluid p-0 pr-0">

    <div class="copy pt-4 pb-4">
      <p><a href="#" target="_blank"> &copy; 2020 Myo's Online Shop</a>  &nbsp;  |  &nbsp; Design by <a href="https://www.facebook.com/alex909.zin.9" target="_blank">Nay Zin</a> &nbsp; | &nbsp;  All rights reserved</p>
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