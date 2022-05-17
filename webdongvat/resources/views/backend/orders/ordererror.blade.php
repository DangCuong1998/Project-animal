@extends('backend.layouts.backend')
@section('content')

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Thông đơn hàng tạm dừng sử lý <a> >> </a><a href="{{route('backend.orders')}}"> Đơn hàng chưa sử lý </a><a> >> </a><a href="{{route('backend.orderafter')}}"> Đơn hàng đã sử lý</a></h3>
	</div>
	<div class="panel-body">
		<form>

			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Full name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Address</th>
						<th>Note</th>
						<th>Created_at</th>

					</tr>
				</thead>
				<tbody>
					@foreach($customer as $o)
					<tr>
						<td>{{$o->id}}</td>
						<td>{{$o->full_name}}</td>
						<td>{{$o->email}}</td>
						<td>{{$o->phone }}</td>
						<td>{{$o->address }}</td>
						<td>{{$o->note}}</td>
						<td>{{$o->created_at}}</td>
						<td>
							<a href="{{route('backend.ordersinfor',['id'=>$o->id])}}">Chi tiet don hang</a>

<label>Trạng thái</label>
<select class="form-control" required>


		<option value="0" @if($o->status == 0) selected @endif>Đã sử lý</option>
		<option value="1" @if($o->status == 1) selected @endif>Đang sử lý</option>
		<option value="2" @if($o->status == 2) selected @endif>Hủy sử lý</option>
		<option value="3" @if($o->status == 3) selected @endif>Xóa đơn hàng</option>

</select>

						</td>

					</tr>
					@endforeach
				</tbody>
			</table>
		</form>

	</div>
</div>
@stop()