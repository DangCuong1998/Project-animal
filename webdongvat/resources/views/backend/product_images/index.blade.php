@extends('backend.layouts.backend')

@section('title','Danh sách danh mục cha')

@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Danh mục Pro_item</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" class="form-inline" role="form">

			<div class="form-group">
				<input type="email" class="form-control" id="" placeholder="Tìm kiếm">
			</div>

			

			<button type="submit" class="btn btn-primary">Lọc</button>
			<a href="{{route('backend.product_images-create')}}" class="btn btn-success">Thêm mới</a>
		</form>
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Images product</th>

				<th>Trạng Thái</th>
				<th> Created_at</th>
				<th>Update_at</th>
				<th></th>

			</tr>
		</thead>
		<tbody>
			@foreach($Pro_img as $pro_img)
			<tr>
				<td>{{$pro_img->id}}</td>
				<td>
					<img src="{{url('../uploads/pro-item')}}/{{$pro_img->image}}" alt="" width="60">
				</td>

				<td>{{$pro_img->status}}</td>
				<td>{{$pro_img->created_at}}</td>

				<td>{{$pro_img->updated_at}}</td>
				<td>
					<a href="{{route('backend.product_images-edit',['id'=>$pro_img->id])}}" class="label label-success" title="Sửa">Sửa</a>
					<a href="{{route('backend.product_images-destroy',['id'=>$pro_img->id])}}" class="label label-danger"  title="XÓa">XÓa</a>
				</td>
				<td></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{$Pro_img->links()}}
</div>
@stop()