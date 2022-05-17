@extends('backend.layouts.backend')

@section('title','Thêm mới Banner')

@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm mới Banner</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<div class="form-group">

				<input type="file" name="file">	

			</div>
			<div class="form-group">
				<label>Tên banner:</label>
				<input type="text" name="name">	
			</div>
			<label for="">Trạng thái</label>
			<div class="radio form-group">
				<label>
					<input type="radio" name="status" value="0">
					Ẩn
				</label>
				<label>
					<input type="radio" name="status" value="1" checked>
					Hiện
				</label>
				<label>link:</label>
				<input class="form-group" type="text" name="link">
			</div>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<button type="submit" class="btn btn-primary">Submit</button>

		</form>
	</div>
</div>
@stop()