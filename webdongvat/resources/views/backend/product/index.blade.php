@extends('backend.layouts.backend')
@section('title','Danh sách sản phẩm')
@section('content')
<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">Panel heading</div>
	<div class="panel-body">
		<a href="{{route('backend.product-create')}}" class="btn btn-sm btn-primary">Them moi</a>
	</div>

	<!-- Table -->
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Ảnh</th>
				<th>Tên</th>
				<th>Danh mục</th>
				<th>Trạng thái</th>
				<th></th>
			</tr>
			
		</thead>
		<tbody>
		@foreach($products as $pro)
			<tr>
				<td>{{$pro->id}}</td>
				<td>
					<img src="{{url('../uploads')}}/{{$pro->image}}" alt="" width="60">
				</td>
				<td>{{$pro->name}}</td>
				<td>{{$pro->cat->name}}</td>
				<td>{{$pro->status}}</td>
				<td>
					<a href="{{route('backend.product-edit',['id'=>$pro->id])}}" class="label label-success">Sửa</a>
					<a href="{{route('backend.product-delete',['id'=>$pro->id])}}" class="label label-danger" onclick="return confirm('Ban co chac chua?')">Xóa</a>
				</td>
			</tr>

		@endforeach





		</tbody>
	</table>
</div>
	<p class="text-center">
        {{$products->links()}}
    </p>
@stop()