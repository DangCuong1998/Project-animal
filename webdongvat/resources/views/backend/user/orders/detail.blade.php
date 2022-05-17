@extends('user.home')
@section('controller','Đơn hàng')
@section('action','Danh sách')
@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Chi tiết đơn hàng</h3>
	</div>
	<div class="panel-body">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Sản Phẩm</th>
					<th>Mã order</th>
					<th>Số lượng</th>
					<th>phone</th>
					<th>Ngày đặt</th>
				</tr>
			</thead>
			<tbody>


				@foreach($particularsorder as $d)
				<tr>

					<td>{{$d->id}}</td>
					<td>{{$d->id_product}}</td>
					<td>{{$d->id_order}}</td>
					<td>{{$d->quatity }}</td>
					<td>{{$d->phone }}</td>

					<td>{{$d->created_at}}</td>


					
				</tr>
				@endforeach
			</tbody>
		</table>
<a href="{{route('user.orders')}}"><button class="btn btn-primary">Về Order</button>
	</div>
</div>
@stop()