{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 bg-white border-b border-gray-200">--}}
{{--                    You're logged in!--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}


@extends('navigation')
 @section('content')

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
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                   aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                 aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                               placeholder="Search for..." aria-label="Search"
                                               aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                             alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                             alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                             alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                             alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ucfirst(Auth::user()->name)}}</span>
                                <img class="img-profile rounded-circle"
                                     src="{{asset('uploads/'.Auth::user()->user_image)}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->




{{--                MOST WORK IS HERE--}}

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCategoryModal" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i class="fa fa-plus" aria-hidden="true"></i> </a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Categories</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800 cat-head-sec"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Eligible voters</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Banned Votters
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                             style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Content Row -->

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h3 class="h3 mb-0 text-gray-800">Categories <span style="display:block !important; font-size: 18px; text-transform: capitalize"><p class="text-gray-600 cat-head-sec"> </p></span></h3>

                    </div>

                    <div class="row cat-show" id="cat-show">
                     @include('categories.show_category');
                    </div>


                    <!-- MODAL -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Button trigger modal -->
{{--                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
{{--                        Launch demo modal--}}
{{--                    </button>--}}


                    <!--END OF MODAL -->

                    <!-- Content Row -->
{{--                    <div class="row mt-3">--}}

{{--                        <!-- Content Column -->--}}
{{--                        <div class="col-lg-6 mb-4">--}}

{{--                            <!-- Project Card Example -->--}}
{{--                            <div class="card shadow mb-4">--}}
{{--                                <div class="card-header py-3">--}}
{{--                                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <h4 class="small font-weight-bold">Server Migration <span--}}
{{--                                            class="float-right">20%</span></h4>--}}
{{--                                    <div class="progress mb-4">--}}
{{--                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"--}}
{{--                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                    </div>--}}
{{--                                    <h4 class="small font-weight-bold">Sales Tracking <span--}}
{{--                                            class="float-right">40%</span></h4>--}}
{{--                                    <div class="progress mb-4">--}}
{{--                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"--}}
{{--                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                    </div>--}}
{{--                                    <h4 class="small font-weight-bold">Customer Database <span--}}
{{--                                            class="float-right">60%</span></h4>--}}
{{--                                    <div class="progress mb-4">--}}
{{--                                        <div class="progress-bar" role="progressbar" style="width: 60%"--}}
{{--                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                    </div>--}}
{{--                                    <h4 class="small font-weight-bold">Payout Details <span--}}
{{--                                            class="float-right">80%</span></h4>--}}
{{--                                    <div class="progress mb-4">--}}
{{--                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"--}}
{{--                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                    </div>--}}
{{--                                    <h4 class="small font-weight-bold">Account Setup <span--}}
{{--                                            class="float-right">Complete!</span></h4>--}}
{{--                                    <div class="progress">--}}
{{--                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"--}}
{{--                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Color System -->--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-6 mb-4">--}}
{{--                                    <div class="card bg-primary text-white shadow">--}}
{{--                                        <div class="card-body">--}}
{{--                                            Primary--}}
{{--                                            <div class="text-white-50 small">#4e73df</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 mb-4">--}}
{{--                                    <div class="card bg-success text-white shadow">--}}
{{--                                        <div class="card-body">--}}
{{--                                            Success--}}
{{--                                            <div class="text-white-50 small">#1cc88a</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 mb-4">--}}
{{--                                    <div class="card bg-info text-white shadow">--}}
{{--                                        <div class="card-body">--}}
{{--                                            Info--}}
{{--                                            <div class="text-white-50 small">#36b9cc</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 mb-4">--}}
{{--                                    <div class="card bg-warning text-white shadow">--}}
{{--                                        <div class="card-body">--}}
{{--                                            Warning--}}
{{--                                            <div class="text-white-50 small">#f6c23e</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 mb-4">--}}
{{--                                    <div class="card bg-danger text-white shadow">--}}
{{--                                        <div class="card-body">--}}
{{--                                            Danger--}}
{{--                                            <div class="text-white-50 small">#e74a3b</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 mb-4">--}}
{{--                                    <div class="card bg-secondary text-white shadow">--}}
{{--                                        <div class="card-body">--}}
{{--                                            Secondary--}}
{{--                                            <div class="text-white-50 small">#858796</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 mb-4">--}}
{{--                                    <div class="card bg-light text-black shadow">--}}
{{--                                        <div class="card-body">--}}
{{--                                            Light--}}
{{--                                            <div class="text-black-50 small">#f8f9fc</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 mb-4">--}}
{{--                                    <div class="card bg-dark text-white shadow">--}}
{{--                                        <div class="card-body">--}}
{{--                                            Dark--}}
{{--                                            <div class="text-white-50 small">#5a5c69</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                        <div class="col-lg-6 mb-4">--}}

{{--                            <!-- Illustrations -->--}}
{{--                            <div class="card shadow mb-4">--}}
{{--                                <div class="card-header py-3">--}}
{{--                                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="text-center">--}}
{{--                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"--}}
{{--                                             src="img/undraw_posting_photo.svg" alt="...">--}}
{{--                                    </div>--}}
{{--                                    <p>Add some quality, svg illustrations to your project courtesy of <a--}}
{{--                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a--}}
{{--                                        constantly updated collection of beautiful svg images that you can use--}}
{{--                                        completely free and without attribution!</p>--}}
{{--                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on--}}
{{--                                        unDraw &rarr;</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <!-- Approach -->--}}
{{--                            <div class="card shadow mb-4">--}}
{{--                                <div class="card-header py-3">--}}
{{--                                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce--}}
{{--                                        CSS bloat and poor page performance. Custom CSS classes are used to create--}}
{{--                                        custom components and custom utility classes.</p>--}}
{{--                                    <p class="mb-0">Before working with this theme, you should become familiar with the--}}
{{--                                        Bootstrap framework, especially the utility classes.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}

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
                    <form action="{{route('logout')}}" method="POST">
                        <input type="submit" value="logout" class="btn btn-primary">
                    </form>
{{--                    <a class="btn btn-primary" href="">Logout</a>--}}
                </div>
            </div>
        </div>
    </div>

    <!-- add category Modal -->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title text-dark text-center" id="exampleModalLabel">Add category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{--Form for taking categories--}}
                   <div style="" class="text-center ">
                       <p class="validation-message"></p>
                       <ul class="validation">  </ul>
                   </div>
                    <form class="add-cat" id="myform" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Category Name</label>
                                <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Name">
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="md-form">
                                <i class="fas fa-pencil-alt prefix">Category description</i>
                                <textarea id="category_description" class="md-textarea form-control"  name="category_description" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <label for="formFileSm" class="form-label">Small file input example</label>
                                <input class="form-control form-control-sm" id="category_image" name="category_image" type="file">
                            </div>
                        </div>


                        <button type="submit" id="create-btn"  class="btn btn-dark add-cat-btn">Create

                        </button>
                        <div style="display: inline-block; padding-left: 10%" hidden="hidden" class="text-center spinner">


                            <div class="spinner-grow text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- add show participant Modal -->
    <div class="modal fade" id="showParticipant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document"  >
            <div class="modal-content">
                <div class="modal-header ">
                    <div  id="modal_cat_image">

                    </div>
                </div>
                <div class="card">

                    <div>
                        <div class="container">
                            <div id="modal_cat_head">

                            </div>


                            <div class="row" id="modal_contestant_info">

                            </div>
                            <div class="row mb-3">
                                <div class="col-4"></div>
                                <div class="col-4 ">
                                    <button  href="" class="btn btn-dark "><i class="fa fa-trash"></i></button>
                                    <button href="" class="btn btn-primary"> <i class="fa fa-pen"></i></button>
{{--                                    <button type="button" class="close btn btn-danger" data-dismiss="modal" aria-label="Close">--}}
{{--                                        <span aria-hidden="">&times;</span>--}}
{{--                                    </button>--}}
                                </div>
                                <div class="col-4"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>



    {{--AJAX--}}




    <script type="text/javascript">
        $(document).ready(function () {

                $.ajax({
                    url:"{{ route('cat_show') }}",
                    success: function(res) {
                        $('#cat-show').html(res);
                        //console.log(res);
                    }
                })

            .done(function(response){

               $('.cat-head-sec').html(response.message);
               $.each(response.data , function(index , value){
                   $('.cat-show').append(
                       "<div class=\"col-xl-3 col-lg-4 col-md-4 col-sm-4 mb-3\">\n" +
                       "                            <div class=\"card\" style=\"width: 16rem;\">\n" +
                       "                                <img style=\"  height:180px; object-fit:cover; \" src=\"{{asset('uploads')}}/" + value.category_image +"  \" class=\"card-img-top\" alt=\"...\">\n" +
                       "                                <div class=\"card-body\">\n" +
                       "                                    <h5 style=\"font-family: 'Playfair Display', serif !important;\" class=\"card-title\">" + value.category_name + "</h5>\n" +
                       "                                    <p  class=\"card-text\">" + value.category_description + "</p>\n" +
                       "                                   <div>\n" +
                       "                                       <a href=\"#\" data-id=\" " + value.id + " \" style=\"display:inline-block\" class=\"btn btn-primary check-in\">Check in &rarr;</a>\n" +
                       "                                   <form style=\"display:inline-block\" >"+

                       "                                        <a data-id=\" " + value.id + " \" id=\"buttons \" data-toggle=\"modal\" style=\"display:inline-block\" data-target=\"#showParticipant\" aria-hidden=\"true\" class=\"btn btn-dark ssss\"> <i class=\"fa fa-eye \"></i></a>" +
                       "                                        <a id=\"buttons \" data-toggle=\"modal\" style=\"display:inline-block\" data-target=\"#showParticipant\" aria-hidden=\"true\" class=\"btn btn-danger \"> <i class=\"fa fa-pen \"></i></a>" +
                       "                                   </form>"+
                       "                                   </div>\n" +
                       "                                </div>\n" +
                       "                            </div>\n" +
                       "                        </div>"

                   );
               });


                participant();
                checkIn();

            })
            .fail(function (response) {
                // console.log(response);
            })

        });


        function participant(){
            $('.ssss').click(function () {
               let category_id = $(this).attr('data-id');
               $('#modal_contestant_info').html('');

               $.ajax({
                   url:"http://127.0.0.1:8000/cat/participant/"+category_id,
                   type:"GET",
                   dataType:"json",
               })
                .done(function(response){
                    if(response.status == 200){
                        console.log(response.data.category_image);
                        $('#modal_cat_image').html("<img height='300px' src=\"{{asset('uploads')}}/"+response.data.category_image+"   \" class=\"card-img-top\" alt=\"...\">");
                        $('#modal_cat_head').html("<p class='text-center mt-3 text-dark' >"+response.message+"</p>  ");
                        $('#modal_cat_head').append("<p class='text-center mt-3 text-dark' >"+response.data.category_description+"</p>  ");

                        $.each(response.data.contestants , function(index , value){
                            $('#modal_contestant_info').append(" <div class=\"col-md\">\n" +
                                "                                   <img class=\"rounded-circle z-depth-2\" width=\"80\" height=\"80\" alt=\"100x100\" src=\"{{asset('uploads')}}/" + value.contestant_image +"  \"\n" +
                                "                                        data-holder-rendered=\"true\">\n" +
                                "                                   <p style=\" font-size:13px \" class=\"text-left\">"+value.contestant_name +"</p>\n" +
                                "                               </div>");
                            })



                    }

                })
                .fail(function(response){

                })


            })
        }

        function checkIn(){
            $('.check-in').click(function(){
                let category_id = $(this).attr('data-id');
                window.location.href = 'checkin/'+category_id ;
            })
        }



      $('.add-cat-btn').click(function (e) {
            e.preventDefault();
           $('#create-btn').attr('disabled','disabled');
           $('.spinner').removeAttr('hidden' , 'hidden');
           $('.validation-message').html('');

           //VARIABLES
          let category_name = $('#category_name').val();
          let category_description = $('#category_description').val();
          let category_image = $('#category_image').val().replace(/C:\\fakepath\\/i, '');
          //let  sel_files = $('#category_image').val();
          let file_data = $('#category_image').prop('files')[0];
          let form_data = new FormData();
          form_data.append('category_image', file_data);
          form_data.append('category_name', category_name);
          form_data.append('category_description', category_description);


          console.log(form_data);

          $.ajaxSetup({
              headers:{
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
              }
          })
          $.ajax({
              url:'http://127.0.0.1:8000/category',
              data:form_data,
              type:'POST',
              dataType:"json",
              cache: false,
              contentType: false,
              processData: false,



          })
              .done(function(response){
                  if(response.status == 200){
                      $('.validation-message').addClass('text-success');
                      $('.validation-message').html(response.message);
                      setTimeout(function() {
                          $('.validation-message').html('');
                          $('.validation-message').removeClass('text-success');
                          $('.validation').html('');

                          location.reload();
                      }, 3000);



                  }else if(response.status == 403){

                      $('.validation-message').addClass('text-danger');
                      $('.validation-message').html(response.message);
                      $('.validation').addClass('text-danger');
                      $.each(response.data , function(index , value){
                          $('.validation').html('<li>'+ value +  '</li>');
                          console.log(value);
                      })
                      setTimeout(function() {
                          $('.validation-message').html('');
                          $('.validation-message').removeClass('text-danger');
                          $('.validation').html('');
                          $('#create-btn').removeAttr('disabled','disabled');
                          $('.spinner').attr('hidden' , 'hidden');
                      }, 3000);
                  }
                  console.log(response.status);

              })
              .fail(function (response){
                  console.log(response);
              })


      })

        $.ajax(
            {
                url: '',
                data: "",
                type: "",
                dataType: ''
            })

        .done(function(response){

        })
        .fail(function(reponse){

        })


        ///////////////////////////

        $('.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ').click(function(e){
            e.preventDefault();
            console.log('hi');
        })


    </script>




    <!-- Bootstrap core JavaScript-->



    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
{{--    <script src="{{asset('assets/js/demo/chart-area-demo.js')}}"></script>--}}
{{--    <script src="{{asset('assets/js/demo/chart-pie-demo.js')}}"></script>--}}


 @stop
