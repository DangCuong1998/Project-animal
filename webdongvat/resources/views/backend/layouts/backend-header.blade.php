<header class="main-header">
  <!-- Logo -->
  <a href="" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>{{Auth::user()->username}}</b>LTE</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
 <?php
$comments = DB::table("comment")->where('status',1)->get();
$cmm_count = COUNT($comments);
             ?> 
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <li class="dropdown messages-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope-o"></i>
            <span class="label label-success"><?php echo $cmm_count;?></span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have<?php echo $cmm_count;?> Comment</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">

              @foreach($comments as $cmm)
                <li><!-- start message -->


                  <a href="{{route('backend.comments')}}">
                    <div class="pull-left">
                      <img src=" {{url('/uploads')}}/{{$cmm->comm_image}}" class="img-circle" alt="User Image">
                    </div>
                    <h4>
                      {{$cmm->comm_name}}
                      <div>
                         {{$cmm->comm_content}}
                      </div>
                      <small><i class="fa fa-clock-o"></i>{!!  \Carbon\Carbon::createFromTimestamp(strtotime($cmm->created_at))->diffForHumans() !!}</small>
                    </h4>
                    <p>

 
                            
                               


                    </p>
                  </a>
                </li>

@endforeach
                <!-- end message -->
              </ul>
            </li>
            <li class="footer"><a href="{{route('backend.comments')}}">See All Messages</a></li>
          </ul>
        </li>
        <!-- Notifications: style can be found in dropdown.less -->
 <?php
$models = DB::table("users")->get();
$md_count = COUNT($models);
$com = DB::table("orders")->where('status',1)->get();
$cm_count = COUNT($com);
             ?> 
        <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">{{$md_count}}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have {{$md_count}} notifications</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li>
                    @foreach($models as $md)
                  <a href="#">
                    <i class="fa fa-users text-aqua"></i> {{$md->username}}/name : {{$md->full_name}}
                  </a>
                   <a href=""><i class="fa fa-clock-o"></i>{!!  \Carbon\Carbon::createFromTimestamp(strtotime($md->created_at))->diffForHumans() !!}</a>
                  @endforeach
                </li>
              </ul>
            </li>
            <li class="footer"><a href="{{route('backend.user')}}">View all</a></li>
          </ul>
        </li>
        <!-- Tasks: style can be found in dropdown.less -->
        <li class="dropdown tasks-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-flag-o"></i>
            <span class="label label-danger">{{$cm_count}}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have {{$cm_count}} Ordering</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                @foreach($orders as $od)
                <li><!-- Task item -->

                  <a href="{{route('backend.ordersinfor',['id'=>$od->id])}}">
                    <h3>
                     Email:{{$od->email}}
                    </h3>
                    <h4>
                      {{$od->full_name}}
                      <small><i class="fa fa-clock-o"></i>{!!  \Carbon\Carbon::createFromTimestamp(strtotime($od->created_at))->diffForHumans() !!}</small>
                    </h4>
                  </a>
                </li>
                @endforeach()
                <!-- end task item -->
              </ul>
            </li>
            <li class="footer">
              <a href="#">View all tasks</a>
            </li>
          </ul>
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src=" {{url('/uploads')}}/{{Auth::user()->imageuser}}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{Auth::user()->full_name}}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src=" {{url('/uploads')}}/{{Auth::user()->imageuser}}" class="img-circle" alt="User Image">

              <p>
                {{Auth::user()->full_name}}
                <small>Member for: {{Auth::user()->created_at}}</small>
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="row">
                <div class="col-xs-4 text-center">
                  <a href="#">Followers</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="{{route('backend.productsale')}}">Sales</a>
                </div>
                <div class="col-xs-4 text-center">
                  <a href="#">Friends</a>
                </div>
              </div>
              <!-- /.row -->
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="{{route('logout')}}" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
        
      </ul>
    </div>
  </nav>
</header>