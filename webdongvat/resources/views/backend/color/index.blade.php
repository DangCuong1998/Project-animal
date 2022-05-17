@extends('backend.layouts.backend')

@section('title','Danh mục màu')

@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Danh mục màu</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" class="form-inline" role="form">
		
			<div class="form-group">
				<input type="email" class="form-control" id="" placeholder="Tìm kiếm">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Lọc</button>
			<a href="{{route('backend.color-create')}}" class="btn btn-success">Thêm mới</a>
		</form>
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>ID product</th>
				<th>Color</th>
			</tr>
		</thead>
		<tbody>
		@foreach($co as $c)
			<tr>
				<td>{{$c->id}}</td>
				<td>{{$c->idpro}}</td>
				<td>{{$c->color}}</td>
				<td>
					<a href="{{route('backend.color-edit',['id'=>$c->id])}}" class="label label-success" title="Sửa">Sửa</a>
					<a href="{{route('backend.color-destroy',['id'=>$c->id])}}" class="label label-danger"  title="XÓa">XÓa</a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@stop()