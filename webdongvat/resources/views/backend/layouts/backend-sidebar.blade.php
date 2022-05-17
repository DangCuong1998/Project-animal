<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{url('/')}}/uploads/{{Auth::user()->imageuser}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->full_name}} Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li>
        <a href="{{route('backend')}}">
          <i class="fa fa-home"></i> <span>Trang chính</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Sản phẩm</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('backend.product')}}"><i class="fa fa-circle-o"></i> Danh sách</a></li>
          <li><a href="{{route('backend.product-create')}}"><i class="fa fa-circle-o"></i> Thêm mới</a></li>
          <li><a href="{{route('backend.category')}}"><i class="fa fa-circle-o"></i> Danh mục</a></li>
          <li><a href="{{route('backend.catparent')}}"><i class="fa fa-circle-o"></i> Danh mục cha</a></li>
          <li><a href="{{route('backend.contact')}}"><i class="fa fa-circle-o"></i> Liên hệ</a></li>

          <li><a href="{{route('backend.orders')}}"><i class="fa fa-circle-o"></i> Orders</a></li>
          <li><a href="{{route('backend.comments')}}"><i class="fa fa-circle-o"></i> Comment</a></li>
          <li><a href="{{route('backend.product_images')}}"><i class="fa fa-circle-o"></i> Product_item</a></li>
          <li><a href="{{route('backend.news')}}"><i class="fa fa-circle-o"></i> News</a></li>

        </ul>
      </li>
      
      <li>
        <a href="{{route('backend.banner')}}">
          <i class="fa fa-image"></i> <span>Banner</span>
        </a>
        <a href="{{route('backend.user')}}">
          <i class="fa fa-image"></i> <span>User</span>
                  <a href="{{route('home')}}">Ra Trang Chủ</a>

        </a>
      </li>
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>