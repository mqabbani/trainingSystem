<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trainings</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Courses <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/home')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Actions
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User`s</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User Components:</h6>
                        <a class="collapse-item" href="{{url('/create/user')}}">Create User`s</a>
                        <a class="collapse-item" href="{{url('/all/users')}}">Show User`s</a>
                    </div>
                </div>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Students Link`s -->
                <a class="nav-link" href="{{url('/create/student')}}"">
                    <i class="fas fa-fw fa fa-comment"></i>
                    <span>Create Student</span></a>

                    <a class="nav-link" href="{{url('/all/student')}}">
                    <i class="fas fa-fw fa fa-comment"></i>
                    <span>Show Student</span></a>
                    <!-- old Code student !-->
                <!--<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-people-carry"></i>
                    <span>Student`s</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Student Components:</h6>
                        <a class="collapse-item" href="{{url('/create/student')}}"> Create Student</a>
                        <a class="collapse-item" href="{{url('/all/student')}}">Show Student</a>
                    </div>
                </div> -->
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Course Link`s -->
                <a class="nav-link" href="{{url('/create/course')}}">
                    <i class="fas fa-fw fa fa-comment"></i>
                    <span>Create Course</span></a>

                <a class="nav-link" href="{{url('/all/course')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Show Courses</span></a>

                <a class="nav-link" href="{{url('/pending/course')}}">
                    <i class="fas fa-fw fa-pause"></i>
                    <span>Pending Courses</span></a>

                <a class="nav-link" href="{{url('/active/course')}}">
                    <i class="fas fa-fw fa-paw"></i>
                    <span>Active Courses</span></a>

                <a class="nav-link" href="{{url('/finished/course')}}">
                    <i class="fa fa-graduation-cap"></i>
                    <span>Finished Courses</span></a>
                <!-- Divider -->
                <hr class="sidebar-divider">

                <!--  Course  old Code-->
                <!--  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-book"></i>
                <span >Course`s</span>
            </a>
            <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header" >Course`s Components:</h6>
                    <a class="collapse-item" href="{{url('/create/course')}}" >Create Course</a>
                    <a class="collapse-item" href="{{url('/all/course')}}" >Show Courses</a>
                    <a class="collapse-item" href="{{url('/pending/course')}}" >Pending Courses</a>
                    <a class="collapse-item" href="{{url('/active/course')}}" >Active Courses</a>
                    <a class="collapse-item" href="{{url('/finished/course')}}" >Finished Courses</a>
                </div>
            </div>-->
            
           

                    <a class="nav-link"  href="{{url('/search/invoice/serial')}}">
                    <i class="fa fa-search"></i>
                    <span>Search Invoice Serial</span></a>

                    <a class="nav-link"  href="{{url('/payment/details')}}">
                    <i class="fa fa-info"></i>
                    <span>Payment Details</span></a>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!--Student Course Old -->
                
              

                <a class="nav-link"  href="{{url('/add/new/question')}}">
                    <i class="fa fa-graduation-cap"></i>
                    <span>Add New Question</span></a>

                    <a class="nav-link"  href="{{url('/all/questions')}}">
                    <i class="fa fa-graduation-cap"></i>
                    <span>All Question</span></a>

                    <a class="nav-link"  href="{{url('/print/exam')}}">
                    <i class="fa fa-graduation-cap"></i>
                    <span>Print Exam</span></a>
                <!-- Divider -->
                <hr class="sidebar-divider">



                <a class="nav-link"  href="{{url('student/marks')}}">
                    <i class="fa fa-graduation-cap"></i>
                    <span>Student Marks</span></a>

                   
                    <a class="nav-link"  href="{{url('/register/student/course')}}">
                    <i class="fa fa-graduation-cap"></i>
                    <span>Register on Course</span></a>
                 
                <!-- Divider -->
                <hr class="sidebar-divider">


             

            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/course/information')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Courses Details</span></a>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::User()->name }}</span>
                                <!-- <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="submit" value="Logout" class="dropdown-item">
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h3 class="h4 mb-4 text-gray-800">
                        @yield('page_name')

                    </h3>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message')}}
                    </div>
                    @endif
                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
        </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->

    <script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('backend/js/sb-admin-2.min.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#course_name").change(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            var course_name1 = $("#course_name").val();
            $.ajax({
                type: "GET",
                url: "{{url('/ajax/request')}}" + "/" + course_name1,
                cache: false,
                success: function(data) {
                    $("#course_session").html("");
                    $("#course_session").append(data);
                    $("#course_session").val(data);
                }
            });
        });
    });
    </script>
</body>

</html>