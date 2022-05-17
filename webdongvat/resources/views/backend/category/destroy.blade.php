@extends('backend.layouts.backend')

@section('title','Danh sách danh mục')

@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Danh mục</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" class="form-inline" role="form">
		
			<div class="form-group">
				<input type="email" class="form-control" id="" placeholder="Tìm kiếm">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Lọc</button>
			<a href="{{route('backend.category-create')}}" class="btn btn-success">Thêm mới</a>
		</form>
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Tên</th>
				<th>Trạng Thái</th>
				<th>Ngày tạo</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		@foreach($cats as $c)
			<tr>
				<td>{{$c->id}}</td>
				<td>{{$c->name}}</td>
				<td>{{$c->status}}</td>
				<td>{{$c->created_at}}</td>
				<td>
					<a href="{{route('backend.category-edit',['id'=>$c->id])}}" class="label label-success" title="Sửa">Sửa</a>
					<a href="{{route('backend.category-destroy',['id'=>$c->id])}}" class="label label-danger"  title="XÓa">XÓa</a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	{{$cats->links()}}
</div>
@stop()