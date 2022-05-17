@extends('backend.layouts.backend')

@section('title','Thêm mới màu')

@section('content')
<div class="panel panel-info">
	<form>
		<input type="text" name="color" placeholder="nhập màu">
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@stop()