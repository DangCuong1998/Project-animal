@extends('frontend.layouts.frontend')

@section('title','Trang chủ')

@section('main')




	
	<!--header-->
	<div class="container-fluid">
		<div class="row">
			<!-- banner -->
			<div class="col-lg-12">
				<img style="width:100%;height: 550px;min-width: 768px" src="{{url('../uploads')}}/<?php echo $img_banner; ?>" >
			</div>
			<!-- end banner -->
		</div>
	</div>

	<!--header-->
	<!--text-->
	<center style="font-size: 50px;margin-top: 100px">Tin tức mới</center>
	<!--text-->   
<!-- news -->
	<div style="margin-top:100px">
		<div class="container-fluid">
			<div class="row">
				@foreach($news as $n)

				<div class="col-lg-3">
					<img src="{{url('/../uploads')}}/{{$n->image}}" alt="">
					<center><span><a href=""><?php echo $n->content_und; ?></a></span></center>
				</div>
	@endforeach()

			</div>
		</div>
	</div>

<!-- end news -->
@stop()
