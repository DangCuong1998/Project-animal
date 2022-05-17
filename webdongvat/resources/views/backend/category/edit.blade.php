@extends('backend.layouts.backend')

@section('title','Thêm mới danh mục')

@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm mới danh mục</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
		
			<div class="form-group">
				<label for="">Tên danh mục</label>
				<input type="text" class="form-control" value="{{$model->name}}" name="name" id="name">
				@if($errors->has('name'))
					<div class="help-block">
						{!!$errors->first('name')!!}
					</div>
				@endif
			</div >
			<div class="form-group">
				<label for="">Danh mục cha</label>
				<select name="parent" id="inputCat_id" class="form-control" required>
					<option value="">Chọn danh mục cha</option>
				@foreach($catsp as $csp)
					<option value="{{$csp->id}}">{{$csp->name}}</option>
				@endforeach
				</select>
			</div>
			
			<div class="form-group">
				<label for="">Trạng thái</label>
				<div class="radio">
					<select name="status" class="form-control">
					<option value="0" @if($model->status == 0) selected @endif>Ẩn</option>
					<option value="1" @if($model->status == 1) selected @endif>Hiện</option>
				</select>
				</div>
			</div>
			<div class="form-group" required>
				<label for="">Hình ảnh</label>
				<input type="file" name="file" >
			</div>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	
</div>
@stop()