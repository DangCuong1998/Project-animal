@extends('user.home')
@section('controller','Đơn hàng')
@section('action','Danh sách')
@section('content')

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Danh mục yêu cầu</h3>
	</div>
	<div class="panel-body">
		<form action="" method="POST" class="form-inline" role="form">
		
			<div class="form-group">
				<input type="email" class="form-control" id="" placeholder="Tìm kiếm">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Lọc</button>
			<a href="{{route('contact.unfinished')}}" class="btn btn-success">Yêu cầu đã sử lý</a>
		</form>
	</div>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
			
			</tr>
		</thead>
		<tbody>
		   @foreach($contact as $c)
			<tr>

				<td>{{$c->comment}}</td>
				 @if($c->status = 1)
                 
                
                
                
                <td><?php echo "Đã giải quyết"; ?></td>
                 @else
                 <td> <?php echo "Chưa giải quyết"; ?></td>
                  @endif
			</tr>
		@endforeach
		</tbody>
	</table>
</div>
@stop()