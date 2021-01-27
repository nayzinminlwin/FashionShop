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
  <title>Me4U Online Shop</title>
</head>

<body>

  <nav class="navbar navbar-expand-md  fixed-top maine-menu">
    <div class="container">
      <button class="navbar-toggler ml-auto" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"> <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>
      <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active"> <a class="nav-link" href="#">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/Admin/Add" tabindex="-1" aria-disabled="true">Add</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/Admin/Edit" tabindex="-1" aria-disabled="true">Edit</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/Admin/Delete" tabindex="-1" aria-disabled="true">Delete</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/Admin/Reviews" tabindex="-1" aria-disabled="true">Reviews</a></li>
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
    <div class="card"> <img class="card-img" src="<?php echo url('/'); ?>/img//banner-img.jpg" alt="">
      <div class="card-img-overlay">
        <div class="center-text">
          <h2 class="card-title">Admin index page for Incredible Admin.</h2>
           </div>
      </div>
    </div>
  </div>
  
  
 
  <div class="container-fluid recent fh5co-portfolio" id="category">
    <div class="container">
      <h2>Choose your activity!</h2>
      <div class="row">
        
        <div class="bx bx-1">
            <div class="card">   
              <img class="card-img" src="<?php echo url('/'); ?>/img//ad.jpg" alt="" style="width:350px;height:250px;">
              <div class="card-img-overlay"> 
                
                <div class="bottom-text">
                  <a href="/onlineShop/Admin/Add"> <h5 class="card-title">Insert</h5> </a>
                </div>
              </div>
              
            </div>
          
        </div>
        
        <div class="bx bx-2">
          <div class="card"> <img class="card-img" src="<?php echo url('/'); ?>/img//edit1.jpg" alt="" style="width:444px;height:250px;" >
            <div class="card-img-overlay"> 
              <div class="bottom-text">
                <a href="/onlineShop/Admin/Edit">
                  <h5 class="card-title">Update</h5>
                </a>
              </div>
            </div>
          </div>
        </div>


        <div class="bx bx-3">
          <div class="card"> <img class="card-img" src="<?php echo url('/'); ?>/img//del.jpg" alt="" style="width:258px;height:250px;">
            <div class="card-img-overlay"> 
              <div class="bottom-text">
                <a href="/onlineShop/Admin/Delete">
                  <h5 class="card-title">Delete</h5>
                </a>
              </div>
            </div>
          </div>
        </div>
      
      </div>
      <br>
      <div class="row">
        
        <div class="bx bx-1">
            <div class="card">   
              <img class="card-img" src="<?php echo url('/'); ?>/img//order.jpg" alt="" style="width:350px;height:250px;">
              <div class="card-img-overlay"> 
                
                <div class="bottom-text">
                  <a href="/onlineShop/Admin/Orders"> <h5 class="card-title">Orders</h5> </a>
                </div>
              </div>
              
            </div>
          
        </div>
        
        <div class="bx bx-2">
          <div class="card"> <img class="card-img" src="<?php echo url('/'); ?>/img//feedback1.jpg" alt="" style="width:444px;height:250px;" >
            <div class="card-img-overlay"> 
              <div class="bottom-text">
                <a href="/onlineShop/Admin/Reviews">
                  <h5 class="card-title">Reviews</h5>
                </a>
              </div>
            </div>
          </div>
        </div>

        
        <div class="bx bx-3">
          <div class="card"> <img class="card-img" src="<?php echo url('/'); ?>/img//oh.jpg" alt="" style="width:258px;height:250px;">
            <div class="card-img-overlay"> 
              <div class="bottom-text">
                <a href="/onlineShop/Admin/OrderHistory">
                  <h5 class="card-title">Order History</h5>
                </a>
              </div>
            </div>
          </div>
        </div>
      
      </div>
    </div>
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