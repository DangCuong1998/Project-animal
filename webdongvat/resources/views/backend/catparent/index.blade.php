@extends('backend.layouts.backend')

@section('title','Danh sách danh mục cha')

@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Danh mục cha</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" class="form-inline" role="form">
		
			<div class="form-group">
				<input type="email" class="form-control" id="" placeholder="Tìm kiếm">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Lọc</button>
			<a href="{{route('backend.catparent-create')}}" class="btn btn-success">Thêm mới</a>
		</form>
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Tên</th>
				<th>Trạng Thái</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		@foreach($catsp as $cp)
			<tr>
				<td>{{$cp->id}}</td>
				<td>{{$cp->name}}</td>
				<td>{{$cp->status}}</td>
				<td>
					<a href="{{route('backend.catparent-edit',['id'=>$cp->id])}}" class="label label-success" title="Sửa">Sửa</a>
					<a href="{{route('backend.catparent-destroy',['id'=>$cp->id])}}" class="label label-danger"  title="XÓa">XÓa</a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	{{$catsp->links()}}
</div>
@stop()