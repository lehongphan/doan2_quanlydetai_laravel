<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Meta -->
    <meta name="description" content="Quản lý đăng ký đề tài đồ án...">
    <meta name="author" content="lhPhan">


   <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    

    <!-- Shamcey CSS -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    

    <!-- Vendor css -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/Shamcey.css') }}">
    <link href="{{ asset('lib/datatables/jquery.dataTables.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/select2/css/select2.min.css') }}" rel="stylesheet">
    
    

</head>
<body>
    <div class="sh-logopanel">
        <a href="#" class="sh-logo-text">CTUET</a>
        <a id="navicon" href="#" class="sh-navicon d-none d-xl-block"><i class="icon ion-navicon"></i></a>
        <a id="naviconMobile" href="#" class="sh-navicon d-xl-none"><i class="icon ion-navicon"></i></a>
      </div><!-- sh-logopanel -->
  <!--menu navi-->
      <div class="sh-sideleft-menu">
        <label class="sh-sidebar-label">Navigation</label>
        <ul class="nav">
          <li class="nav-item">
            <a href="{{ url('admin') }}" class="nav-link {{ 'admin' ==request()->path() ? 'active' : ''}}">
              <i class="icon ion-ios-home-outline"></i>
              <span>Trang chủ</span>
            </a>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="{{ route('sinhvien.index') }}" class="nav-link {{ 'admin/sinhvien' ==request()->path() ? 'active' : ''}}">
              <i class="icon ion-ios-bookmarks-outline"></i>
              <span>Sinh viên</span>
              


            </a>
          </li><!-- nav-item -->

          <li class="nav-item">
            <a href="{{ route('khoa.index') }}" class="nav-link {{ 'admin/khoa' ==request()->path() ? 'active' : ''}}">
              <i class="icon ion-ios-bookmarks-outline"></i>
              <span>Khoa</span>            


            </a>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="{{ route('giangvien.index') }}" class="nav-link {{ 'admin/giangvien' ==request()->path() ? 'active' : ''}}">
              <i class="icon ion-ios-bookmarks-outline"></i>
              <span>Giảng viên</span>            


            </a>
          </li><!-- nav-item -->
           <li class="nav-item">
            <a href="{{ route('nganh.index') }}" class="nav-link {{ 'admin/nganh' ==request()->path() ? 'active' : ''}}">
              <i class="icon ion-ios-bookmarks-outline"></i>
              <span>Ngành</span>            


            </a>
          </li><!-- nav-item -->
           <li class="nav-item">
            <a href="{{ route('chuyennganh.index') }}" class="nav-link {{ 'admin/chuyennganh' ==request()->path() ? 'active' : ''}}">
              <i class="icon ion-ios-bookmarks-outline"></i>
              <span>Chuyên Ngành</span>            


            </a>
          </li><!-- nav-item -->
         
          
        </ul>
      </div><!-- sh-sideleft-menu -->
    
      <div class="sh-headpanel">        
        <div class="sh-headpanel-right">
          <div class="dropdown dropdown-profile">
            <a href="#" data-toggle="dropdown" class="dropdown-link">
              <img src="{{asset('img/img1.jpg')}}" class="wd-60 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="media align-items-center">
                <img src="{{asset('img/img1.jpg')}}" class="wd-60 ht-60 rounded-circle bd pd-5" alt="">
                <div class="media-body">
                  <h6 class="tx-inverse tx-15 mg-b-5">{{Auth::guard('admin')->user()->name}}</h6>
                  <p class="mg-b-0 tx-12">{{Auth::guard('admin')->user()->email}}</p>
                </div><!-- media-body -->
              </div><!-- media -->
              <hr>
              <ul class="dropdown-profile-nav">
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon ion-power"></i> Đăng xuất</a></li>
              </ul>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- sh-headpanel-right -->
      </div><!-- sh-headpanel -->
  
      <div class="sh-mainpanel">
        <div class="sh-breadcrumb">
          <nav class="breadcrumb">
            <!--<a class="breadcrumb-item">Admin</a>
            <span class="breadcrumb-item active">Dashboard</span>-->
          </nav>
        </div><!-- sh-breadcrumb -->
        <div class="sh-pagetitle">
          <div class="input-group">
            
          </div><!-- input-group -->
          <div class="sh-pagetitle-left">
            <div class="sh-pagetitle-icon"><i class="icon ion-ios-home"></i></div>
            <div class="sh-pagetitle-title">
              <span>Xin Chào</span>
            <h2>{{Auth::guard('admin')->user()->name}}</h2>
            </div><!-- sh-pagetitle-left-title -->
          </div><!-- sh-pagetitle-left -->
        </div><!-- sh-pagetitle -->
        @yield('home')
        @yield('sinhvien')
        @yield('khoa')
  @yield('nganh')
        @yield('chuyennganh')
        
      </div><!-- sh-mainpanel -->
      @include('admin.footer')
  
      <script src="{{ asset('lib/jquery/jquery.js') }}"></script>
      <script src="{{ asset('lib/popper.js/popper.js') }}"></script>
      <script src="{{ asset('lib/jquery-ui/jquery-ui.js') }}"></script>
      <script src="{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
      <script src="{{ asset('lib/moment/moment.js') }}"></script>
      <script src="{{ asset('lib/Flot/jquery.flot.js') }}"></script>
      <script src="{{ asset('lib/Flot/jquery.flot.resize.js') }}"></script>
      <script src="{{ asset('lib/flot-spline/jquery.flot.spline.js') }}"></script> 
      <script src="{{ asset('js/shamcey.js') }}"></script>
      <script src="{{ asset('lib/bootstrap/bootstrap.js') }}"></script>
      <script src="{{ asset('lib/datatables-responsive/dataTables.responsive.js') }}"></script>
      <script src="{{ asset('lib/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('lib/select2/js/select2.min.js') }}"></script>
    <script>
      $(function() {
        'use strict';

        $('#datatable1').DataTable({
          responsive: true,
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ dòng/trang',
          }
        });
        $('.edit-model').on('click',function(){
    var model_data= $(this).data('info').split(',');
    $('#id').val(model_data[0]);
    $('#name').val(model_data[1]);
    $('#email').val(model_data[2]);

  });

      });
    </script> 
    
</body>
</html>