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
				<input type="text" class="form-control" name="name" placeholder="Input field">
				@if($errors->has('name'))
					<div class="help-block">
						{!!$errors->first('name')!!}
					</div>
				@endif
			</div>
			<div class="form-group">
				<label for="">Danh mục</label>
				<select name="parent" id="inputCat_id" class="form-control" required>
					<option value="">Chọn danh mục cha</option>
				@foreach($catsp1 as $csp)
					<option value="{{$csp->id}}">{{$csp->name}}</option>
				@endforeach
				</select>
			</div>
		<a href="{{route('backend.catparent-create')}}" class="btn btn-success">Thêm mới danh mục cha</a>
			
			
			<div class="form-group">
				<label for="">Trạng thái</label>
				<div class="radio">
					<label>
						<input type="radio" name="status" value="0">
						Ẩn
					</label>
					<label>
						<input type="radio" name="status" value="1" checked>
						Hiện
					</label>
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