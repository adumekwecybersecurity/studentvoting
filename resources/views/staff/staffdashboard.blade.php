<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'UNITEN-SEV') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('studentbackend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="{{url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('studentbackend/dist/css/adminlte.min.css')}}">

  <!-- CSS for toastr -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />

</head>


<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('studentbackend/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle')}}">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('studentbackend/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3')}}">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('studentbackend/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3')}}">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
     

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
   <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         <!-- fix code back here later -->

         <div class="dropdown-divider"></div>
         <span class="dropdown-item">
           <i class="fas fa-envelope"></i>&nbsp;&nbsp;Logged in: <strong style="color: blueviolet">( {{Auth::guard('staff')->user()->email}} )</strong>
           <span class="float-right text-muted text-sm"></span>
         </span>


          <a href="{{route('staff.profile.update')}}" class="dropdown-item">
            <i class="nav-icon far fa-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;Update-Profile
            <span class="float-right text-muted text-sm"></span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{route('staff.profile')}}" class="dropdown-item">
            <i class="nav-icon far fa-image"></i>&nbsp;&nbsp;&nbsp;&nbsp;View Profile
            <span class="float-right text-muted text-sm"></span>
          </a>

          <div class="dropdown-divider"></div>
          <a href="{{route('staffpassword.show')}}" class="dropdown-item">
            <i class="fas fa-key"></i>&nbsp;&nbsp;&nbsp;&nbsp;Change-Password
            <span class="float-right text-muted text-sm"></span>
          </a>

          <!-- code has error login-out automatically for admin -->
         <!--   <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-barcode"></i>&nbsp;&nbsp;&nbsp;&nbsp;Enable-2FA-AUTH
            <span class="float-right text-muted text-sm"></span>
          </a> -->

          



          <div class="dropdown-divider"></div>
          <a href="{{route('staff.logout')}}" class="dropdown-item">
            <span class="fas fa-lock"></span>&nbsp;&nbsp;&nbsp;&nbsp;Logout
            <span class="float-right text-muted text-sm"></span>
          </a>
         </li>
    </ul>
  </ul>
</nav>
<!-- /.navbar -->
    

   
  
  






 

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;<img src="{{asset('studentbackend/dist/img/homelogo-uniten.png')}}" alt=""  class="profile-user-img img-fluid img-circle" style="width: 60px; height:60px" >
      <div  style="text-align: center"><span class="brand-text font-weight-light"><strong>{{ config('app.name', 'UNITEN-SEV') }}<br>Secured Electronic Voting</strong></span>
    </a></div>

    < <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;<img src="/upload/staff_profilephotos/{{Auth::guard('staff')->user()->profile_photo_path}}"
        class="profile-user-img img-fluid img-circle" style="width: 60px; height:60px">
      </div>
     
    
     

      
    </div>  
  
    <div class="info" style="text-align: center">
      <a href="/staff/dashboard" class="d-block"><strong>&nbsp;&nbsp;&nbsp;&nbsp;{{Auth::guard('staff')->user()->email}}</strong></a>
      
    </div>

    <hr>



    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       

       
        <a href="{{route('staff.dashboard')}}"><button type="button" class="btn btn-block btn-warning btn-lg">Staff-Admin Dashboard.</button></a>
        <!--<button type="button" class="btn btn-block btn-success">Staff-Admin Dashboard.</button>-->
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('staff.dashboard')}}" class="nav-link active">
              <i ></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          


          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Students-Voted
              </p>
            </a>
          </li>



          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-1.5x fa-sync-alt"></i>
              <p>
                Voting Deadline Settings
              </p>
            </a>
          </li>

          
          <li class="nav-item">
            <a href="{{route('view.students')}}" class="nav-link">
              <i class="fas fa-user-plus"></i>
              <p>
                Register Students
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{route('add.candidate')}}" class="nav-link">
              <i class="fas fa-user-plus"></i>
              <p>
                Add-Nominee
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('view.candidate')}}" class="nav-link">
              <i class="far fa-star"></i>
              <p>
               View Nominees & Positions
              </p>
            </a>
        </li>





          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-star"></i>
              <p>
               ELectoral Moderators
              </p>
            </a>
        </li>


        <li class="nav-item">
          <a href="{{route('votestats.view')}}" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
             Voting Statistics
            </p>
          </a>
      </li>








          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Calendar
              </p>
            </a></li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-columns"></i>
                  <p>
                    Election-Results
                  </p>
                </a>
            </li>
        
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-envelope"></i>
                  <p>
                    Messages
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="fas fa-comments"></i>
                        <p>Inbox</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Compose</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-thumbs-up"></i>
                        <p>Read</p>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a href="{{route('infoaddform')}}" class="nav-link">
                    <i class="fas fa-rss-square fa-1.8x"></i>
                    <p>
                      Add Info/Annoucement
                    </p>
                  </a></li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-calendar-alt"></i>
                      <p>
                        Calendar
                      </p>
                    </a></li>


                    <li class="nav-item">
                        <a href="{{route('staff.profile')}}" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                          <p>
                           View Profile 
                          </p>
                        </a>
                    </li>

                    
               
                   

                    <li class="nav-item">
                        <a href="{{route('staff.profile.update')}}" class="nav-link">
                            <i class="nav-icon far fa-plus-square"></i>
                          <p>
                           Update Profile 
                          </p>
                        </a>
                    </li>


                    <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-book"></i>
                        <p>
                          Kanban-Board 
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>


                      

                      
      
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="fas fa-circle fa-1.5x text-red"></i>
                              <p>To-DO list</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="fas fa-circle fa-1.5x text-green"></i>
                              <p>Done-Task</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="fas fa-rss-square fa-1.5x"></i>
                              <p>Quote of the Day</p>
                            </a>
                          </li>
                        </ul>
                      </li>

                      
                      <p>
                        <a href="{{route('staff.logout')}}"><button type="button" class="btn btn-block btn-danger"><strong>Logout</strong></button></a>
                  </p>

                    
                  <br><br><br><br>
</div>
                 
            

                    
                
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   @yield('staff')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="http://studentvoting.local">{{ config('app.name', 'UNITEN-SEV') }}</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('studentbackend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('studentbackend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('studentbackend/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('studentbackend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script>-->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('studentbackend/dist/js/pages/dashboard3.js')}}"></script>






<!-- JS for toastr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>

@if (Session::has('message'))

var type="{{Session::get('alert-type','info') }}"
switch(type){

case 'info':
toastr.info("{{Session::get('message') }}");
break;

case 'success':
toastr.success("{{Session::get('message') }}");
break;


case 'warning':
toastr.warning("{{Session::get('message') }}");
break;


case 'error':
toastr.error("{{Session::get('message') }}");
break;

}
@endif

</script>








</body>
</html>
