@extends('backend.layouts.backend')
@section('title','Thêm mới sản phẩm')

@section('content')
<div class="row">
	<form action="" method="POST" role="form" enctype="multipart/form-data">
		<div class="col-md-9">
			<div class="form-group">
				<label for="">Tiêu đề chính</label>
				<input type="text" class="form-control" name="title" value="{{$model->title}}" placeholder="{{$model->title}}"  required>
			</div>
			<div class="form-group">
				<label for="">Nội dung tóm tắt</label>
				<input type="text" class="form-control" name="content_und" value="{{$model->content_und}}" placeholder="{{$model->content_und}}"  required>
			</div>
			<div class="form-group" ">
				<label for="">Nội dung</label>
				<textarea name="content" class="form-control" required>
					{{$model->content}}
				</textarea>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="">Danh mục</label>
				<select name="parent"  class="form-control" required>
					<option value="">Chọn danh mục</option>
					@foreach($cats as $cat)
				@php
					$selected = $cat->id == $model->parent ? 'selected': '';
				@endphp
					<option value="{{$cat->id}}" {{$selected}}>{{$cat->name}}</option>
				@endforeach
				</select>
			</div>
			
			<div class="form-group" required>
				<label for="">Trạng thái</label>
				<select name="status" class="form-control">
					<option value="0" @if($model->status == 0) selected @endif>Ẩn</option>
					<option value="1" @if($model->status == 1) selected @endif>Hiện</option>
				</select>
			</div>
			<div class="form-group" required>
				<label for="">Hình ảnh</label>
				<input type="file" value="$model->image" name="file" >
			</div>
			<div class="thumbnail">
				<img src="{{url('/../uploads')}}/{{$model->image}}" alt="">
			</div>
			<button type="submit" class="btn btn-primary">Lưu lại</button>
				
		</div>
<input type="hidden" name="_token" value="{{csrf_token()}}">

	</form>
	
</div>


@stop()