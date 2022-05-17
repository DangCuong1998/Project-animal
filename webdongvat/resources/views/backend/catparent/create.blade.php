@extends('backend.layouts.backend')

@section('title','Thêm mới danh mục cha')

@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm mới danh mục cha</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" role="form">
			<div class="form-group">
				<label for="">Thêm danh mục cha</label>
				<input type="text" name="name">
			</div>
		
				</div>
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

		</div>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				<button type="submit" class="btn btn-primary">Submit</button>

		</form>

		

</div>
@stop()