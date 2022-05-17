@extends('backend.layouts.backend')
@section('title','Danh sách sản phẩm')
@section('content')
<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">Panel heading</div>
	<div class="panel-body">
		<a href="{{route('backend.news-create')}}" class="btn btn-sm btn-primary">Them moi</a>
	</div>

	<!-- Table -->
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Ảnh</th>
				<th>Tiêu đề</th>
				<th>Nội dung</th>
				<th>TT Nội Dung</th>
				<th>Danh mục cha</th>
				<th>Trang thái</th>
				<th>Ngày tạo</th>
				<th>Ngày sửa</th>
			</tr>
			
		</thead>
		<tbody>
		@foreach($news as $pro)
			<tr>
				<td>{{$pro->id}}</td>
				<td>
					<img src="{{url('/../uploads')}}/{{$pro->image}}" alt="" width="60">
				</td>
				<td>{{$pro->title}}</td>
				<td>{{$pro->content}}</td>
				<td>{{$pro->content_und}}</td>
				<td>{{$pro->parent}}</td>
				<td>
					<?php if ($pro->status == 1) {
						echo "Hiện";
						
						}else{
							echo "Ẩn";
					} ?>
				</td>
				<td>{{$pro->created_at}}</td>
				<td>{{$pro->updated_at}}</td>
				<td>
					<a href="{{route('backend.news-edit',['id'=>$pro->id])}}" class="label label-success">Sửa</a>
					<a href="{{route('backend.news-delete',['id'=>$pro->id])}}" class="label label-danger" onclick="return confirm('Ban co chac chua?')">Xóa</a>
				</td>
			</tr>

		@endforeach





		</tbody>
	</table>
</div>
	<p class="text-center">
        {{$news->links()}}
    </p>
@stop()