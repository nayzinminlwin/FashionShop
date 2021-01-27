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
                <li class="nav-item"> <a class="nav-link" href="/onlineShop/AdminHeHee">Home</a> </li>
                <li class="nav-item"> <a class="nav-link" href="/onlineShop/Admin/Add" tabindex="-1" aria-disabled="true">Add</a></li>
                <li class="nav-item"> <a class="nav-link" href="/onlineShop/Admin/Edit" tabindex="-1" aria-disabled="true">Edit</a></li>
                <li class="nav-item"> <a class="nav-link" href="/onlineShop/Admin/Delete" tabindex="-1" aria-disabled="true">Delete</a></li>
                <li class="nav-item"> <a class="nav-link" href="/onlineShop/Admin/Reviews" tabindex="-1" aria-disabled="true">Reviews</a></li>
                <li class="nav-item active"> <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Orders</a></li>
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

          
            <div class="container-fluid" id="blogNews" >
              @if($users!=NULL)
                <h2 class="card-title">Items in order list</h2>
                @foreach($users as $user)
                  @foreach($user->transactions as $ggItem)
                      <?php 

                        $conn = mysqli_connect('localhost','root','');
                        mysqli_select_db($conn,'onlineshop');

                        $item_ID=$ggItem->itemID;
                        $tbName =$ggItem->category;

                        $itemName = mysqli_query($conn,"SELECT name FROM $tbName WHERE id=$item_ID");
                        $imageName = mysqli_query($conn,"SELECT image FROM $tbName WHERE id=$item_ID");

                        
                          $data1=mysqli_fetch_assoc($itemName);
                          $data = $data1['name'];
                          $itemN = json_encode($data);
                          $itemNa = str_replace('"','',$itemN);

                          $data2=mysqli_fetch_assoc($imageName);
                          $imageData = $data2['image'];
                          $imageN = json_encode($imageData);
                          $imageNa = str_replace('"','', $imageN);

                      ?>
                          
                      
                          <div class="row single-blog">
                            <div class="col-xl-4 col-lg-12 single-blog__img">
                              <img class="card-img" src="<?php echo url('/'); ?>/uploads/{{$ggItem->category}}/{{$imageNa}}" alt="" style=" width:200px; height:200px ">
                            </div>
                            <div class="col-xl-4 col-lg-12 single-blog__text">
                             
                              <h2>{{$itemNa}}</h2>
                                
                              <p>Customer : {{$user->name}}</p>  
                              <p>Category : {{$ggItem->category}} </p>
                              <p>Count : {{$ggItem->count}}</p>
                              <p>Total : {{$ggItem->totalSinglePrice}} Kyts</p>
                              @if($user->status==0)
                                <p>Status : Deliver Pending. </p>
                              @else
                                <p>Status : Delivered. </p>
                              @endif
                              
                            </div>
                            <div class="col-xl-auto col-lg-12">
                              
                            </div>
                            
                          </div>
                      @endforeach
                      
                        <div class="row single-blog">
                          <div class="col-xl-4 col-lg-12">
                            <!-- he hee hee -->
                          </div>
                          <div class="col-xl-4 col-lg-12" >
                                Toal price : {{$ggItem->totalPrice}} Kyts
                          </div>
                          
                        </div>
                      
                        <div class="row single-blog">
                          <div class="col-xl-4 col-lg-12">
                            <p>This is all for customer <b>{{$user->name}}</b>.</p> 
                            <p>email : {{$user->mail}}</p>
                          </div>
                          <div class="col-xl-4 col-lg-12" >
                            <p>Phone : {{$user->phNum}}</p>
                            <p>Address : {{$user->address}}</p>
                          </div>
                          <div class="col-xl-auto col-lg-12">
                            <a href="/onlineShop/Admin/MarkDelivered/{{$user->id}}" class="btn" style="background:white;">Mark as deliverd!</a>
                          </div> 
                        </div>
                  
                @endforeach
                
                <div class="row single-blog">
                  <div class="col-xl-4 col-lg-12">
                    <!-- he hee hee -->
                  </div>
                  <div class="col-xl-4 col-lg-12" >
                        
                  </div>
                </div>
                <!-- diii aHti-->

              @else
                <h2>No item to deliver!</h2>

              @endif


            </div>
          
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
