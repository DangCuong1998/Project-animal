@extends('backend.layouts.backend')

@section('title','Bảng điều khiển')

@section('content')

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr align="center">
            <th>STT</th>
            <th>Tên</th>
            <th>Lời bình luận</th>
            <th>Sản phẩm</th>
            <th>Ngày bình luận</th>
            <th>Chi tiết</th>
            <th>Xóa</th>
            <th>Đã xem</th>

        </tr>
    </thead>
    <tbody>
        <?php $stt = 0 ?>
        @foreach($comments as $item)
        <?php $stt += 1; ?>
          @if($item->status =1)
        <tr class="odd gradeX" align="center">
            <td>{!! $stt !!}</td>
            <td>{!! $item->comm_name !!}</td>
            <td>{!! $item->comm_content !!}</td>
            <?php
            $product_name = DB::table("product")->where("id", $item->product_id)->get();
            ?>

            @foreach($product_name as $item2)
            
            <td>{!! $item2->name !!}</td>
            @endforeach
            <td>{!!  \Carbon\Carbon::createFromTimestamp(strtotime($item->created_at))->diffForHumans() !!}</td>
            {{--<td>--}}
            {{--@if($item->status == 0)--}}
            {{--Chưa duyệt--}}
            {{--@else--}}
            {{--Đã duyệt--}}
            {{--@endif--}}
            {{--</td>--}}
            <?php $slugs = DB:: table('product')
->where('id',$item->product_id)
->first();
//dd($slugs->slug);
//$slug = DB::table('product')->slug;
             ?>
            <td class="center"><a href="{!! URL::route("product",$slugs->slug) !!}"> Chi tiết</a>
            </td>
            <td class="center"><a onclick="return xacNhanXoa('Bạn có chắc chắn muốn xóa?')"
              href="{!! URL::route("backend.comments.getDelete",$item->id) !!}"> Xóa</a></td>
              <td>


                 <form method="post" >

                  <div class="form-group">

                    <select name="status" class="form-control">
                      
                        <option value="1" checked>Chưa xem</option>
                        <option value="0">Đã xem</option>
                        

                    

                    </select>
                      <select name="id_cmm" class="form-control">
                            <option value="{!! $item->id !!}" checked>{!! $item->id !!}</option>

                        </select>
                </div>
                <input type="submit" name="submit">Cập nhật :Trạng thái</input>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </form>




        </td>
    </tr>    
    @endif
    @endforeach
</tbody>
</table>
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
