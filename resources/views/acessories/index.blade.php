
@extends("layouts.app")
@section("content")
  <div class="container-fluid recent fh5co-portfolio" id="category">
    <div class="container">
      <h2>Acessories</h2>
      <div class="row">
       
        @foreach($acessories as $acessory)
          
            <div class="bx bx-1 myBox" style=" width:450px; height:500px ">
                <div class="card" >   
                  <img class="card-img" src="<?php echo url('/'); ?>/uploads/acessories//{{$acessory->image}}" alt="" >
                  <div class="card-img-overlay"> 
                    
                    <div class="bottom-text" >
                      <a href="/onlineShop/category/acessory/detail/{{$acessory->id}}"> <h5 class="card-title">{{ $acessory->name }}</h5> </a> 
                    </div>
                    <div style="position: absolute;bottom: 8px;right: 16px;" >
                      <h5>{{$acessory->price}}Ks</h5>
                    </div>
                  </div>
                </div>
            </div>
          
        @endforeach
    
        
      </div>
    </div>
  </div>
  @endsection