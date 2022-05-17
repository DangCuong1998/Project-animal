@extends('backend.layouts.backend')
@section('title','Danh sách Người dùng')
@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Danh sách tài khoản</h3>
		</div>
		<div class="panel-body">
			<a href="{{route('backend.user-add')}}" class="btn btn-sm btn-primary">Thêm Mới</a>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>username</th>
						<th>Email</th>
						<th>Ngày tạo</th>
						<th>Lần đổi mật khẩu gần nhất</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				@foreach($users as $u)
					<tr>
						<td>{{$u->id}}</td>
						<td>{{$u->username}}</td>
						<td>{{$u->email}}</td>
						<td>{{$u->created_at}}</td>
						<td>{!!  \Carbon\Carbon::createFromTimestamp(strtotime($u->updated_at))->diffForHumans() !!}</td>
						<td>
							
							<a>Null</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			<!-- Hiển thị phân trang -->
			{{$users->links()}}
		</div>
	</div>
@stop()