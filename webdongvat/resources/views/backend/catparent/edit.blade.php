 @extends('backend.layouts.backend')

@section('title','Sửa danh mục')

@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Sửa danh mục cha</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" role="form">
		
			<div class="form-group">
				<label for="">Tên danh mục cha</label>
				<input type="text" class="form-control" value="{{$model->name}}" name="name">
				@if($errors->has('name'))
					<div class="help-block">
						{!!$errors->first('name')!!}
					</div>
				@endif
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
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	
</div>
@stop()