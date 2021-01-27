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
          <li class="nav-item "> <a class="nav-link" href="/onlineShop/AdminHeHee">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/Admin/Add" tabindex="-1" aria-disabled="true">Add</a></li>
          <li class="nav-item"> <a class="nav-link" href="/onlineShop/Admin/Edit" tabindex="-1" aria-disabled="true">Edit</a></li>
          <li class="nav-item active"> <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Delete</a></li>
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
    <div class="card"> <img class="card-img" src="<?php echo url('/'); ?>/img/girl1.jpg" alt="">
      <div class="card-img-overlay">
        <div class="center-text">
          <h2 class="card-title">This page is Delete page for Delightful admin.</h2>
           </div>
      	</div>
       </div>
	</div>

  <div class="container-fluid recent fh5co-portfolio" id="category">
    <div class="container">
      <h2>Available Items to delete</h2>
      <div class="row">
       
        @foreach($acessories as $acessory)
          
            <div class="bx bx-1 myBox" style=" width:450px; height:500px ">
                <div class="card" >   
                  <img class="card-img" src="<?php echo url('/'); ?>/uploads/acessories//{{$acessory->image}}" alt="" >
                  <div class="card-img-overlay"> 

                    <a href="/onlineShop/category/acessory/detail/{{$acessory->id}}">
                    	<h5>{{ $acessory->name }}</h5>
                    </a>

                    <div class="bottom-text" >
                      <a href="/onlineShop/category/acessory/detail/{{$acessory->id}}">
                    	<h5 class="card-title">{{$acessory->price}}Ks</h5> 
                   	  </a> 
                    </div>
                    
                    <div style="position: absolute;bottom: 8px;right: 16px;" >
                    	<a href="/onlineShop/Admin/Delete/{{$catID=6}}/{{$acessory->id}}">
                      		<h5>Delete</h5>
                      	</a>
                    </div>
                  </div>
                </div>
            </div>
          
        @endforeach

        @foreach($bkks as $bkk)
          
            <div class="bx bx-1 myBox" style=" width:450px; height:600px ">
                <div class="card" >   
                  <img class="card-img" src="<?php echo url('/'); ?>/uploads/bkks//{{$bkk->image}}" alt="" >
                  <div class="card-img-overlay"> 

                  	<a href="/onlineShop/category/bkk/detail/{{$bkk->id}}"> 
                    	<h5>{{ $bkk->name }}</h5>
                    </a>

                    <div class="bottom-text" >
                      <a href="/onlineShop/category/bkk/detail/{{$bkk->id}}"> 
                      	<h5 class="card-title">{{$bkk->price}}Ks</h5> 
                      </a> 
                    </div>
                    
                    <div style="position: absolute;bottom: 8px;right: 16px;" >
                    	<a href="/onlineShop/Admin/Delete/{{$catID=5}}/{{$bkk->id}}">
                      		<h5>Delete</h5>
                      	</a>
                    </div>

                  </div>
                </div>
            </div>
          
        @endforeach

        @foreach($bottoms as $bottom)
          
            <div class="bx bx-1 myBox" style=" width:450px; height:500px ">
                <div class="card" >   
                  <img class="card-img" src="<?php echo url('/'); ?>/uploads/bottoms//{{$bottom->image}}" alt="" >
                  <div class="card-img-overlay"> 

                    <a href="/onlineShop/category/bottom/detail/{{$bottom->id}}">
                    	<h5>{{ $bottom->name }}</h5>
                    </a>

                    <div class="bottom-text" >
                      <a href="/onlineShop/category/bottom/detail/{{$bottom->id}}"> <h5 class="card-title">{{$bottom->price}}Ks</h5> </a> 
                    </div>
                    
                    <div style="position: absolute;bottom: 8px;right: 16px;" >
                      <a href="/onlineShop/Admin/Delete/{{$catID=8}}/{{$bottom->id}}">
                      	<h5>Delete</h5>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
          
        @endforeach

        @foreach($cosmetics as $cosmetic)
          
            <div class="bx bx-1 myBox" style=" width:450px; height:600px ">
                <div class="card" >   
                  <img class="card-img" src="<?php echo url('/'); ?>/uploads/cosmetics//{{$cosmetic->image}}" alt="" >
                  <div class="card-img-overlay"> 

                  	<a href="/onlineShop/category/cosmetic/detail/{{$cosmetic->id}}"> 
                    	<h5>{{ $cosmetic->name }}</h5>
                    </a>

                    <div class="bottom-text" >
                      <a href="/onlineShop/category/cosmetic/detail/{{$cosmetic->id}}"> 
                      	<h5 class="card-title">{{$cosmetic->price}}Ks</h5> 
                      </a> 
                    </div>
                    
                    <div style="position: absolute;bottom: 8px;right: 16px;" >
                    	<a href="/onlineShop/Admin/Delete/{{$catID=2}}/{{$cosmetic->id}}">
                      		<h5>Delete</h5>
                      	</a>
                    </div>

                  </div>
                </div>
            </div>
          
        @endforeach

        @foreach($dresses as $dress)
          
            <div class="bx bx-1 myBox" style=" width:450px; height:600px ">
                <div class="card" >   
                  <img class="card-img" src="<?php echo url('/'); ?>/uploads/dresses//{{$dress->image}}" alt="" >
                  <div class="card-img-overlay"> 

                  	<a href="/onlineShop/category/dress/detail/{{$dress->id}}"> 
                    	<h5>{{ $dress->name }}</h5>
                    </a>

                    <div class="bottom-text" >
                      <a href="/onlineShop/category/dress/detail/{{$dress->id}}"> 
                      	<h5 class="card-title">{{$dress->price}}Ks</h5> 
                      </a> 
                    </div>
                    
                    <div style="position: absolute;bottom: 8px;right: 16px;" >
                    	<a href="/onlineShop/Admin/Delete/{{$catID=4}}/{{$dress->id}}">
                      		<h5>Delete</h5>
                      	</a>
                    </div>

                  </div>
                </div>
            </div>
          
        @endforeach

        @foreach($foods as $food)
          
            <div class="bx bx-1 myBox" style=" width:450px; height:600px ">
                <div class="card" >   
                  <img class="card-img" src="<?php echo url('/'); ?>/uploads/foods//{{$food->image}}" alt="" >
                  <div class="card-img-overlay"> 

                  	<a href="/onlineShop/category/food/detail/{{$food->id}}"> 
                    	<h5>{{ $food->name }}</h5>
                    </a>

                    <div class="bottom-text" >
                      <a href="/onlineShop/category/food/detail/{{$food->id}}"> 
                      	<h5 class="card-title">{{$food->price}}Ks</h5> 
                      </a> 
                    </div>
                    
                    <div style="position: absolute;bottom: 8px;right: 16px;" >
                    	<a href="/onlineShop/Admin/Delete/{{$catID=7}}/{{$food->id}}">
                      		<h5>Delete</h5>
                      	</a>
                    </div>

                  </div>
                </div>
            </div>
          
        @endforeach

        @foreach($shoes as $shoe)
          
            <div class="bx bx-1 myBox" style=" width:450px; height:600px ">
                <div class="card" >   
                  <img class="card-img" src="<?php echo url('/'); ?>/uploads/shoes//{{$shoe->image}}" alt="" >
                  <div class="card-img-overlay"> 

                  	<a href="/onlineShop/category/shoe/detail/{{$shoe->id}}"> 
                    	<h5>{{ $shoe->name }}</h5>
                    </a>

                    <div class="bottom-text" >
                      <a href="/onlineShop/category/shoe/detail/{{$shoe->id}}"> 
                      	<h5 class="card-title">{{$shoe->price}}Ks</h5> 
                      </a> 
                    </div>
                    
                    <div style="position: absolute;bottom: 8px;right: 16px;" >
                    	<a href="/onlineShop/Admin/Delete/{{$catID=3}}/{{$shoe->id}}">
                      		<h5>Delete</h5>
                      	</a>
                    </div>

                  </div>
                </div>
            </div>
          
        @endforeach

        @foreach($tops as $top)
          
            <div class="bx bx-1 myBox" style=" width:450px; height:600px ">
                <div class="card" >   
                  <img class="card-img" src="<?php echo url('/'); ?>/uploads/tops//{{$top->image}}" alt="" >
                  <div class="card-img-overlay"> 

                  	<a href="/onlineShop/category/top/detail/{{$top->id}}"> 
                    	<h5>{{ $top->name }}</h5>
                    </a>

                    <div class="bottom-text" >
                      <a href="/onlineShop/category/top/detail/{{$top->id}}"> 
                      	<h5 class="card-title">{{$top->price}}Ks</h5> 
                      </a> 
                    </div>
                    
                    <div style="position: absolute;bottom: 8px;right: 16px;" >
                    	<a href="/onlineShop/Admin/Delete/{{$catID=1}}/{{$top->id}}">
                      		<h5>Delete</h5>
                      	</a>
                    </div>

                  </div>
                </div>
            </div>
          
        @endforeach
    
        
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