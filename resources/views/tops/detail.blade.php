@extends("layouts.appDetail")
@section("content")

	<div class="container-fluid fh5co-recent-work">
	    <div class="container contact-pop">
	      <div class="row">
	        <div class="col-md-6  pr-0">

	          <div class="card"> 
	          	<img class="card-img" src="<?php echo url('/'); ?>/uploads/tops//{{$top->image}}" alt="" >
	            <div class="card-img-overlay"> </div>
	          </div>
	          
	        </div>

	        <div class="col-md-6 pl-0" id="about">

	          <div class="content">
	            <h3>{{$top->name}}</h3>
	            <h4>{{$top->price}} Ks</h4>
	            <hr />
	            <p>{{$top->description}}</p>
	            <h4>Size-{{$top->size}}</h4>
	            <h4>Color-{{$top->color}}</h4>
	            <a href="/onlineShop/addToCart/{{$catID=1}}/{{$top->id}}" class="btn">Add to cart</a> </div>
	          </div>

	        </div>
	    </div>
    </div>

@endsection