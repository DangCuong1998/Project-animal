@extends('backend.layouts.backend')

@section('title','Thêm mới danh mục')

@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm mới pro_item</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" role="form" enctype="multipart/form-data">

			<div class="form-group">
				<label for="">Danh mục</label>
				<select name="product_id" id="product_ids" class="form-control" required>
					<option value="">Danh mục product</option>
				@foreach($Pro_img as $pro_item)
					<option value="{{$pro_item->id}}">{{$pro_item->name}}</option>
				@endforeach
				</select>
			</div>
				<div class="form-group">
				<label for="">Hình ảnh</label>
				<input type="file" name="file" >
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
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

</div>
@stop()