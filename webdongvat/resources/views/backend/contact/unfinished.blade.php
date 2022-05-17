
@section('title','chưa xem')

@section('content')





	<!DOCTYPE html>
	<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{url('/')}}/public/css/style.css" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
				<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
				<![endif]-->
			</head>
			<body>
				<div class="aKw" style="">
					<div class="aKy" style="">
						<div class="aKx" style="">
							<a href=""><div id=":2r" class="aKz" style="float: left;display: inline-block;margin-right: 300px">Chưa sử sdsd</div></a>
						</div>
 

						<a href="" ><div class="aKv" style="float: left;display: inline-block;margin-right: 300px">
							Người gửi
						</div></a>
						<a href=""><div class="aKv" style="float: left;display: inline-block;margin-right: 300px">Nội dung
						</div></a>
						<a href=""><div class="aKv" style="float: left;display: inline-block;margin-right: 300px">
						</div>Thời Gian</a>
					</div>
				</div>
				<tr class="zA zE" jsaction="" jscontroller="" jsmodel="nXDxbd" id=":3k" tabindex="-1" aria-labelledby=":3l" draggable="true">
					<td class="PF xY">

					</td>
					<td id=":3m" class="oZ-x3 xY" style="">
						<div id=":3n" class="oZ-jc T-Jo J-J5-Ji " role="checkbox" aria-labelledby=":3l" dir="ltr" aria-checked="false" tabindex="-1">
							<div class="T-Jo-auh">

							</div>
						</div>
					</td>
					
					<td class="yX xY ">

					</td>

					@foreach($model as $m)
					<td id=":3q" tabindex="-1" class="xY a4W" onclick="myFunction({
							'UPDATA contact('status') values('1')'
							})">
						<div class="xS" role="link">
							<div class="xT">
								<div class="y6">
									<span id=":3s" class="bog">
										<b></b>
									</span>
									<div class="block bl_danhmucsanpham hidden-xs">

										<div class="block-content">
											<ul>

												<li class="level0 parent ">

													<a href="">
														<i class="fa fa-circle" aria-hidden="true" style="float: left;margin-left: 280px">
														{{$m->email}} : {{$m->name}}
														</i>

														<span style="margin-right: 80px">{{$m->comment}}</span>
														<i style="float: right;margin-right: 20px"><b>{{$m->created_at}}</b></i>
													</a>	
												</li>


												<div class="display_dinao">
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</td>


					</tr>




					<!-- jQuery -->@endforeach
					<script src="//code.jquery.com/jquery.js"></script>
					<!-- Bootstrap JavaScript -->
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
					<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
					<script src="Hello World"></script><script>
function myFunction() {
document.getElementById("demo").innerHTML = "Xin chào";
}
</script>
				</body>
				</html>


				@stop()



