@extends('backend.layouts.backend')
@section('title','Thêm mới sản phẩm')

@section('content')
<div class="row">
	<form action="" method="POST" role="form" enctype="multipart/form-data">
		<div class="col-md-9">
			<div class="form-group">
				<label for="">Tiêu đề chính</label>
				<input type="text" class="form-control" name="title" placeholder="Input field"  required>
			</div>
			<div class="form-group">
				<label for="">Nội dung tóm tắt</label>
				<input type="text" class="form-control" name="content_und" placeholder="Input field"  required>
			</div>
			<div class="form-group" ">
				<label for="">Nội dung</label>
				<textarea name="content"  class="form-control" required></textarea>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="">Danh mục</label>
				<select name="parent"  class="form-control" required>
					<option value="">Chọn danh mục</option>
				@foreach($cats as $cat)
					<option value="{{$cat->id}}">{{$cat->name}}</option>
				@endforeach
				</select>
			</div>
			
			<div class="form-group" required>
				<label for="">Trạng thái</label>
				<select name="status" class="form-control">
					<option value="0">Ẩn</option>
					<option value="1">Hiện</option>
				</select>
			</div>
			<div class="form-group" required>
				<label for="">Hình ảnh</label>
				<input type="file" name="file" >
			</div>
			<button type="submit" class="btn btn-primary">Lưu lại</button>
				
		</div>
<input type="hidden" name="_token" value="{{csrf_token()}}">

	</form>
	
</div>


@stop()