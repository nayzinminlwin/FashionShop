
@extends("layouts.app")
@section("content")
  <div class="container-fluid recent fh5co-portfolio" id="category">
    <div class="container">
      <h2>Bangkok Orders</h2>
      <div class="row">
       
        @foreach($bkks as $bkk)
          
            <div class="bx bx-1 myBox" style=" width:450px; height:600px ">
                <div class="card" >   
                  <img class="card-img" src="<?php echo url('/'); ?>/uploads/bkks//{{$bkk->image}}" alt="" >
                  <div class="card-img-overlay"> 
                    
                    <div class="bottom-text" >
                      <a href="/onlineShop/category/bkk/detail/{{$bkk->id}}"> <h5 class="card-title">{{ $bkk->name }}</h5> </a> 
                    </div>
                    <div style="position: absolute;bottom: 8px;right: 16px;" >
                      <h5>{{$bkk->price}}Ks</h5>
                    </div>
                  </div>
                </div>
            </div>
          
        @endforeach
    
        
      </div>
    </div>
  </div>
  @endsection