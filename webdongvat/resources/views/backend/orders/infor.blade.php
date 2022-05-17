@extends('backend.layouts.backend')
@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Đơn Hàng</h3>
		</div>
		<div class="panel-body">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>id customer  </th>
						<th>id user</th>
						<th>created-at</th>
				 		<th>tổng tiền</th>

					</tr>
				</thead>
				<tbody>
				@foreach($order as $o)
					<tr>
						<td>{{$o->id}}</td>
						<td>{{$o->id_customer }}</td>
						<td>{{$o->cart_item}}</td>
						<td>{{$o->created_at }}</td>
						<td>{{$o->cart_total}}</td>
						
						<td>
							<a href="{{route('backend.detail',['id'=>$o->id])}}">Chi tiet don hang</a>

<div class="form-group">


							</div>

						</td>
					</tr>
				@endforeach
				<form method="POST" role="form" >
									
									<label>Trạng thái</label>
								<select name="status" class="form-control" required>
									<option>Chọn trạng thái</option>

									<option value="0" @if($customer->status == 0) selected @endif>Đã sử lý</option>
									<option value="1" @if($customer->status == 1) selected @endif>Đang sử lý</option>
									<option value="2" @if($customer->status == 2) selected @endif>Hủy sử lý</option>
									<option value="3" @if($customer->status == 3) selected @endif>Xóa đơn hàng</option>

								</select>
											<button type="submit" class="btn btn-primary">Submit</button>
</a>											<input type="hidden" name="_token" value="{{csrf_token()}}">

								</form>
								<a href="{{route('backend.orders')}}"><button class="btn btn-primary">Về Order</button>

				</tbody>
			</table>

		</div>
	</div>
@stop()





