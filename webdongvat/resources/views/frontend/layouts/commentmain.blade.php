<style type="text/css">
  .user_name{
    font-size:14px;
    font-weight: bold;
  }
  .comments-list .media{
    border-bottom: 1px dotted #ccc;

  }
  .add-comment{
    float: left;
    margin-right: 700px
  }
</style>
<!-- /viêt comment -->             
@if(Auth::user())
<div class="tab-pane" class="add-comment">
  <form action="" method="post" class="form-horizontal" id="commentForm" role="form"> 
  <a href="" name="comm_name" value='Auth::user()->username'></a>
    <div class="form-group">
      <label for="email"" class="glyphicon glyphicon-pencil">Comment:</label>
      <div class="">
        <textarea class="form-control" name="comm_content" id="addComment" rows="5"></textarea>
      </div>
    </div>
    <input type="submit" name="submit">   
                <input type="hidden" name="_token" value="{{csrf_token()}}">
        
  </form>
</div>

@else
<div class="tab-pane" class="add-comment">
  <form action="" method="" class="form-horizontal" id="commentForm" role="form"> 
    <div class="form-group">
    </div>
  </form>
</div>
<h2>Đăng nhập để bình luận :</h2>
<button class="btn btn-success"><a href="{{route('loginmain')}}">Đăng nhập</a></button>
@endif()

@if(session('thongbao'))
{{session('thongbao')}}
@endif
<!-- /hiển thị comment -->  

@if(!Auth::user())
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h1><small class="pull-right"  style="float: left;">{{$count_comment}} comments</small> Comments </h1>
      </div>      

      <div class="comments-list">
        @foreach($comment as $comm)

        <div class="media">
         <p class="pull-right"><smaill>{!!  \Carbon\Carbon::createFromTimestamp(strtotime($comm["created_at"]))->diffForHumans() !!}</small></p>
         <a class="media-left" href="#">
          <img style="width: 70px;height: 70px" src="{{url('uploads')}}/{{$comm ->comm_image}}">
        </a>
        <div class="media-body">
          <h4 class="media-heading user_name">
            <a href="">       {{$comm ->comm_name}}        
            </a>
          </h4>
          {{$comm ->comm_content}}

          <p>
            <small>
              <a>Like</a>

            </small>
          </p>
        </div>
        @endforeach()

      </div>
    </div>
  </div>



</div>
@elseif(Auth::user()->group == 'admin')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h1><small class="pull-right"  style="float: left;">{{$count_comment}} comments</small> Comments </h1>
      </div>      

      <div class="comments-list">
        @foreach($comment as $comm)

        <div class="media">
         <p class="pull-right"><smaill>{!!  \Carbon\Carbon::createFromTimestamp(strtotime($comm["created_at"]))->diffForHumans() !!}</small></p>
         <a class="media-left" href="#">
          <img style="width: 70px;height: 70px" src="{{url('uploads')}}/{{$comm ->comm_image}}">
        </a>
        <div class="media-body">
          <h4 class="media-heading user_name">
            <a href="">       {{$comm ->comm_name}}        
            </a>
          </h4>
          {{$comm ->comm_content}}

          <p>
            <small>
              <a>Like</a>
              - <a>Share</a>
              - - <a>Xóa</a>
               - - - <a>Trả lời</a>
            </small>
          </p>

        </div>
        @endforeach()

      </div>
    </div>
  </div>



</div>
@elseif(Auth::user()->group == 'customer')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h1><small class="pull-right"  style="float: left;">{{$count_comment}} comments</small> Comments </h1>
      </div>      

      <div class="comments-list">
        @foreach($comment as $comm)

        <div class="media">
         <p class="pull-right"><smaill>{!!  \Carbon\Carbon::createFromTimestamp(strtotime($comm["created_at"]))->diffForHumans() !!}</small></p>
         <a class="media-left" href="#">
          <img style="width: 70px;height: 70px" src="{{url('uploads')}}/{{$comm ->comm_image}}">
        </a>
        <div class="media-body">
          <h4 class="media-heading user_name">
            <a href="">       {{$comm ->comm_name}}        
            </a>
          </h4>
          {{$comm ->comm_content}}

          <p>
            <small>
              <a>Like</a>
              - <a>Share</a>
              - - <a>Xóa</a>
               - - - <a>Trả lời</a>
            </small>
          </p>
        </div>
        @endforeach()

      </div>
    </div>
  </div>



</div>
@endif

</div>
</div>