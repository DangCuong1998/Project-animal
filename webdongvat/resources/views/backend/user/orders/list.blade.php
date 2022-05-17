@extends('user.home')
@section('controller','Đơn hàng')
@section('action','Danh sách')
@section('content')

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Danh sách đơn hàng</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Total Cart  </th>
						<th>Ngay mua</th>
			

					</tr>
				</thead>
				<tbody>
				@foreach($orders as $o)
					<tr>
						<td>{{$o->id}}</td>
						<td>{{$o->cart_total }}</td>
						<td>{{$o->created_at }}</td>

						<td><a href="{{route('user.detail',['id'=>$o->id])}}">Xem chi tiết</a></td>
					</tr>
				@endforeach
				</tbody>
			</table>

		</div>
	</div>
@stop()