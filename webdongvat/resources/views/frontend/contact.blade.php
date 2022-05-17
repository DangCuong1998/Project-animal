


@extends('frontend.layouts-adopt.frontend')

@section('title','Lien He')

@section('main')


<div class="main-container col2-right-layout">
	<div class="main container">
		<div class="row">
			<section class="col-left col-sm-7">
				<div class="container">
				<div class="card card-container text-center">
						@if(Session::has('success'))
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{!!Session::get('success')!!}
						</div>
						@endif

					</div><!-- /card-container -->
				</div><!-- /container -->
				<div class="page-title">
					<h2><a href="#">Liên hệ</a></h2>
				</div>
				<form action="" method="POST">






					<label>Nội dung<em class="required">*</em></label>
					<br>
					<div style="float:none" class="">
						<textarea name="comment" id="comment" title="Nội dung" class="input-text form-control" rows="3"></textarea>
					</div>

					<span class="require"><em class="required">* </em>Thông tin bắt buộc</span>
					<div class="buttons-set">
						<input type="hidden" name="_token" value="{{csrf_token()}}">

						<button type="submit" title="submit" class="button submit"> <span> Gửi </span> </button>
					</div>
				</form>
			</div>
		</section>

	</div>
</div>
</div>

@stop