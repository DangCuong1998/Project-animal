@extends('frontend.layouts-adopt.frontend')

@section('title','Danh Muc')

@section('main')

@section('imgbanner')
	
<div class="" id="z1">
        <img style="width: 100%;height: 550px;min-width: 768px;padding: none;margin-top: -100px;" src="{{url('/')}}/images/17.png" alt="">

    </div>
@stop


<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 right-panel collections ">

    <div class="col-lg-12 col-md-12 col-sm- col-xs-12 collection_header">
        <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 pd_0">
            <h4 class="txt_u fw600 pd_0 pull-left">     
                <h2 >
                    {{$product->name}}
                </h2>
            </h4>
            Xuất sứ:
        </div>
    </div>
    <div class="products">

        <div class="row">
            <div class="col-md-5">
                <div class="thumbnail">
                    <img src="" alt="">


                    <img class="xzoom" src="{{url('../uploads')}}/{{$product->image}}" xoriginal="{{url('uploads')}}/{{$product->image}}" />

                    <div class="xzoom-thumbs text-center" style="margin-top: 10px; float: left; display: inline-block;width: 300%">
                      @foreach($pro_item as $pro)
                      <a href="" style="float: left;">
                        <img style="height: 70px" class="xzoom-gallery rep" width="82" src="{{url('../uploads/pro-item')}}/{{$pro->image}}">
                    </a>
                    @endforeach             
                    <table class="table">
                    <td>
                    </td>
                </table>

            </div>               
        </div>
    </div>       
    <div class="col-md-7">

        <table class="table">
            <td>
            </td>
        </table>
        Chọn Kích Thước:

        <table class="table">
            <td>
            </td>
        </table>

        <table class="table">

            <p>
                @if($product->sale_price)
                <s>Gia cũ: {{number_format($product->price,0,'',',')}}</s>
                <b>Gia: {{number_format($product->sale_price,0,'',',')}}</b>
                <p>              <b>Tiết Kiệm <?php echo round(100-($product->sale_price/$product->price)*100) ;?> %<b> 
                </p>           
                @else
                <b>Gia: {{number_format($product->price,0,'',',')}}</b>
                @endif
            </p>
            <p>
            </p>

            <p class="table">
                <a  href="{{route('add-cart',[$product->id])}}" class="btn btn-success">Add To Cart</a>
                <a href="https://www.facebook.com/shikama.kenno.5" class="btn btn-danger">0986421127</a>
               
                <td>
                </td>
            </p>
            <h4 style="color: #199cb7">Chi Tiết sản phẩm : {!!$product->name!!}</h4>
            {!!$product->info_product!!}

        </table>
    </div>
</div>
<table class="table">
    <td>
    </td>
</table>
<h4 style="color: #199cb7">Giới thiệu sản phẩm : {!!$product->name!!}</h4>
{!!$product->content!!}
<table class="table">
    <td>
    </td>
</table>
<h4 style="color: #199cb7">Chi Tiết sản phẩm : {!!$product->name!!}</h4>
<table class="table">
    <td>
    </td>
</table>

{!!$product->info_product!!}
<table class="table">
    <td>
    </td>
</table>
<table class="table">
    <td>
    </td>
</table>
</div>
</div>
</div>


@include('frontend.layouts.commentmain')
</div>
</div>
</div>
</div>



<div class="">
    <div class="panel panel-success" style="width: 100%;">
        <div class="panel-heading">
            <h3 class="panel-title">San pham liên quan</h3>
        </div>

        <div class="panel-body">
         @foreach($otherProducts as $pro)
        <div class="col-md-2 product-item">
            <div class="thumbnail">
                <div class="product-item-img text-center" >
                    <img style="height:200px;" src="{{url('../uploads')}}/{{$pro->image}}" alt="dfdf" class="img-responsive">
                    <table class="table">
                        <td>
                        </td>
                    </table>

                    <a class="product-hover" href="{{route('product',['slug'=>$pro->slug])}}">

                    </a>
                </div>
                <div class="caption text-center">
                    <h5>
                        <a href="{{route('product',['slug'=>$pro->slug])}}">Chi tiết sản phẩm</a>

                        <a href="{{route('product',['slug'=>$pro->slug])}}" title="">
                           {{$pro->name}}

                       </a>
                       <h5 style="color: red">{{$pro->price}}đ
                       </h5>
                   </h5>
                </div>
            </div>
        </div>
       <!-- product-item -->
       @endforeach
   </div>

<!-- products -->



@stop