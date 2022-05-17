<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{url('/')}}/css/style.css">
	<link rel="stylesheet" href="{{url('/')}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('/')}}/css/style1.css">
	
</head>
<body>
@yield('imgbanner')

<nav id="z2" class="navbar-default" style="background-color: #000;height: 55px;margin-top: 0px">
	<div class="breadcrumbs" 

	style="float: right;
	color: #fff;
	font-size: 16px;
	padding:15px 40px;
	font-family: "museo-sans";
	">
	<a href="https://www.animalhavenshelter.org/" style="margin-right: 5px;    color: #fff;

	" rel="v:url" property="v:title">Home</a>
	<span class="delimiter">

	</span>
	<span style="margin-right: 5px;
	" >>
</span>

<span typeof="v:Breadcrumb">
	<a style="margin-right: 5px;    color: #fff;

	" >Adopt</a>
	<span style="margin-right: 5px;
	" >
</span>
</span>

</div>
</nav>

<!-- /.navbar-collapse -->

<!-- -->    
<!-- phan 2 anh thanh cong cu -->
<div class="container-fluid" id="z3" style="			margin-top: -100px;
">
<div class="row">

	<div class="col-lg-3">

		<div id="catdog">
			<ul>
				<div id="catdog1">
					<li>
						@foreach($catss4 as $cats)
						<h4>
							<a href="">{{$cats->cat_name}}</a>
						</h4>
						@endforeach
					</li>
				</div>
@foreach($cats4 as $cats)
				<li>
					<h4>
						<a href="{{route('category',['id'=>$cats->id])}}">{{$cats->cat_name}}</a>
					</h4>
				</li>
				@endforeach
				<div id="catdog1">
					<li>
						@foreach($catss5 as $cats)
						<h4>
							<a href="">{{$cats->cat_name}}</a>
						</h4>
						@endforeach
					</li>
				</div>
@foreach($cats5 as $cats)
				<li>
					<h4>
						<a href="{{route('category',['id'=>$cats->id])}}">{{$cats->cat_name}}</a>
					</h4>
				</li>
				@endforeach
				<div id="catdog1">
					<li>
						@foreach($catss6 as $cats)
						<h4>
							<a href="">{{$cats->cat_name}}</a>
						</h4>
						@endforeach
					</li>
				</div>
@foreach($cats6 as $cats)
				<li>
					<h4>
						<a href="{{route('category',['id'=>$cats->id])}}">{{$cats->cat_name}}</a>
					</h4>
				</li>
				@endforeach
				<div id="catdog1">
					<li>
						@foreach($catss7 as $cats)
						<h4>
							<a href="">{{$cats->cat_name}}</a>
						</h4>
						@endforeach
					</li>
				</div>
@foreach($cats7 as $cats)
				<li>
					<h4>
						<a href="{{route('category',['id'=>$cats->id])}}">{{$cats->cat_name}}</a>
					</h4>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
	<!-- -->
