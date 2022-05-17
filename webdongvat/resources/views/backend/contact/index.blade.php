@extends('backend.layouts.backend')

@section('title','Danh mục yêu cầu')

@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Danh mục yêu cầu</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" class="form-inline" role="form">
		
			<div class="form-group">
				<input type="email" class="form-control" id="" placeholder="Tìm kiếm">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Lọc</button>
			<a href="{{route('contact.unfinished')}}" class="btn btn-success">Yêu cầu đã sử lý</a>
		</form>
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Yêu cầu</th>
			</tr>
		</thead>
		<tbody>
		   @foreach($cn as $c)
			<tr>
				<td>{{$c->name}}</td>
				<td>{{$c->email}}</td>
				<td>{{$c->comment}}</td>
				<td>
				<a href="" class="label label-success" title="Sửa">???????</a>
					<a href="" class="label label-danger"  title="XÓa">XÓa</a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@stop()