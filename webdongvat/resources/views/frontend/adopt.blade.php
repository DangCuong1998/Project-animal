@extends('frontend.layouts-adopt.frontend')

@section('title','Danh Muc')

@section('main')
@section('imgbanner')
	
<div class="" id="z1">
        <img style="width: 100%;height: 550px;min-width: 768px;padding: none;margin-top: -100px;" src="images/17.png" alt="">

    </div>
@stop
<!-- -->
	<div id="divImg">
		<div class="container-fluid">


			<div class="col-lg-9" >
				<h1 style="text-align: left;font-size: 30px;
				font-weight: 100;
				color: #000;
				margin-top:100px;
				margin-bottom: 15px;" align="center">Tất cả sản phẩm</h1>
				<p style="text-align: left;    
				text-align: left;    
				line-height: 30px;   
				margin: 0 0 25px 0;">
				<i class="fa fa-heart">
				</i> => Nguồn : KN_F</p>
				<div class="row">

@foreach($product as $pro)

					<div class="col-lg-3">

						<div id="cat15">
							<img src="{{url('../uploads')}}/{{$pro->image}}" alt="">
							<a href="{{route('product',['slug'=>$pro->slug])}}">
								<h4 style="text-align: center;">{{$pro->name}}</h4>
							</a>
							<span style="">{{$pro->created_at}}</span>
							<b style="">{{$pro->price}} vnđ</b>
						</div>


					</div>
@endforeach


@stop