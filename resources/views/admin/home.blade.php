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
            <a href="{{ url('giangvien') }}" class="nav-link {{ 'giangvien' ==request()->path() ? 'active' : ''}}">
              <i class="icon ion-ios-home-outline"></i>
              <span>Trang chủ</span>
            </a>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="{{ route('sinhvien.index') }}" class="nav-link {{ 'giangvien/detai' ==request()->path() ? 'active' : ''}}">
              <i class="icon ion-ios-bookmarks-outline"></i>
              <span>Sinh viên</span>
              


            </a>
          </li><!-- nav-item -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="icon ion-ios-bookmarks-outline"></i>
              <span>Thống kê</span>
            </a>
           
          </li><!-- nav-item -->
          
        </ul>
      </div><!-- sh-sideleft-menu -->
    
      <div class="sh-headpanel">        
        <div class="sh-headpanel-right">
          <div class="dropdown mg-r-10">
            <a href="#" class="dropdown-link dropdown-link-notification">
              <i class="icon ion-ios-filing-outline tx-24"></i>
            </a>
          </div>
          <div class="dropdown dropdown-notification">
            <a href="#" data-toggle="dropdown" class="dropdown-link dropdown-link-notification">
              <i class="icon ion-ios-bell-outline tx-24"></i>
              <span class="square-8"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-menu-header">
                <label>Notifications</label>
                <a href="#">Mark All as Read</a>
              </div><!-- d-flex -->
  
              <div class="media-list">
                <!-- loop starts here -->
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="./img/img8.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0"><strong class="tx-medium">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span class="tx-12">October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="./img/img9.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0"><strong class="tx-medium">Mellisa Brown</strong> appreciated your work <strong class="tx-medium">The Social Network</strong></p>
                      <span class="tx-12">October 02, 2017 12:44am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="./img/img10.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0">20+ new items added are for sale in your <strong class="tx-medium">Sale Group</strong></p>
                      <span class="tx-12">October 01, 2017 10:20pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="#" class="media-list-link read">
                  <div class="media pd-x-20 pd-y-15">
                    <img src="./img/img5.jpg" class="wd-40 rounded-circle" alt="">
                    <div class="media-body">
                      <p class="tx-13 mg-b-0"><strong class="tx-medium">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium">Ronnie Mara</strong></p>
                      <span class="tx-12">October 01, 2017 6:08pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="media-list-footer">
                  <a href="#" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div>
          <div class="dropdown dropdown-profile">
            <a href="#" data-toggle="dropdown" class="dropdown-link">
              <img src="{{asset('img/img1.jpg')}}" class="wd-60 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="media align-items-center">
                <img src="{{asset('img/img1.jpg')}}" class="wd-60 ht-60 rounded-circle bd pd-5" alt="">
                <div class="media-body">
                  <h6 class="tx-inverse tx-15 mg-b-5">Auth::guard('admin')->user()->name</h6>
                  <p class="mg-b-0 tx-12">kdouglas@domain.com</p>
                </div><!-- media-body -->
              </div><!-- media -->
              <hr>
              <ul class="dropdown-profile-nav">
                <li><a href="#"><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                <li><a href="#"><i class="icon ion-ios-gear"></i> Settings</a></li>
                <li><a href="#"><i class="icon ion-ios-download"></i> Downloads</a></li>
                <li><a href="#"><i class="icon ion-ios-star"></i> Favorites</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon ion-power"></i> LogOut</a></li>
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
            <a class="breadcrumb-item" href="index.html">Admin</a>
            <span class="breadcrumb-item active">Dashboard</span>
          </nav>
        </div><!-- sh-breadcrumb -->
        <div class="sh-pagetitle">
          <div class="input-group">
            <input type="search" class="form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn"><i class="fa fa-search"></i></button>
            </span><!-- input-group-btn -->
          </div><!-- input-group -->
          <div class="sh-pagetitle-left">
            <div class="sh-pagetitle-icon"><i class="icon ion-ios-home"></i></div>
            <div class="sh-pagetitle-title">
              <span>Xin Chào</span>
              <h2>Lê Hồng Phan</h2>
            </div><!-- sh-pagetitle-left-title -->
          </div><!-- sh-pagetitle-left -->
        </div><!-- sh-pagetitle -->
        @yield('sinhvien')
  
        
        <div class="sh-footer">
          <div>Copyright &copy; 2020. </div>
          <div class="mg-t-10 mg-md-t-0">Designed by: <a href="#">Lê Hồng Phan</a></div>
        </div><!-- sh-footer -->
      </div><!-- sh-mainpanel -->
  
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
            lengthMenu: '_MENU_ items/page',
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