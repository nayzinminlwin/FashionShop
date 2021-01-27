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
   
  



  <footer class="container-fluid p-0 pr-0" id="foot">
    <div class="row mr-0 ml-0">
      
      <div class="col-md-12 content-us">
        <form method="post">
          @csrf
          <div class="contact-form" id="contact">
            <h3 class="text-uppercase">Fill the form correctly to submit the order</h3>
            <input type="text" name="cName" class="form-control" placeholder="Your Name" required>
            <input type="text" name="cPhone" class="form-control" placeholder="Your Phone Number" required>
            <input type="text" name="cMail" class="form-control" placeholder="Your Email(leave blank if you dont have)" >
            <textarea class="form-control" name="cAddress" placeholder="Your Address" required></textarea>
            <button type="submit">Order</button>
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