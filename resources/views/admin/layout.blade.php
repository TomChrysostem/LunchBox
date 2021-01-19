<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>AWA FOOD SERVICE</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar" data-color="azure" data-image="{{ asset('img/sidebar-6.jpg') }}">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        AWA - Food Service
                    </a>
                </div>
                <ul class="nav">
                    <li class="{{ (request()->is('admin')) ? 'active nav-item' : 'nav-item' }}">
                        <a class="nav-link" href="{{ route('admin.index') }}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="{{ (request()->segment(2) == 'courses') ? 'active nav-item' : 'nav-item' }}">
                        <a class="nav-link" href="{{ route('courses.index') }}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Course List</p>
                        </a>
                    </li>
                    <li class="{{ (request()->segment(2) == 'categories') ? 'active nav-item' : 'nav-item' }}">
                        <a class="nav-link" href="{{ route('categories.index') }}">
                            <i class="nc-icon nc-bullet-list-67"></i>
                            <p>Category List</p>
                        </a>
                    </li>
                    <li class="{{ (request()->segment(2) == 'menus') ? 'active nav-item' : 'nav-item' }}">
                        <a class="nav-link" href="{{ route('menus.index') }}">
                            <i class="nc-icon nc-bullet-list-67"></i>
                            <p>Menu List</p>
                        </a>
                    </li>
                    <li class="{{ (request()->segment(2) == 'orders') ? 'active nav-item' : 'nav-item' }}">
                        <a class="nav-link" href="{{ route('orders.index') }}">
                            <i class="nc-icon nc-cart-simple"></i>
                            <p>Order List</p>
                        </a>
                    </li>
                    <li class="{{ (request()->segment(2) == 'attendees') ? 'active nav-item' : 'nav-item' }}">
                        <a class="nav-link" href="{{ route('attendees.index') }}">
                            <i class="nc-icon nc-badge"></i>
                            <p>Student List</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Start Nav -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link"  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                     <span class="no-icon">Log out</span>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="#">AWA - Food Service </a>, good food is good mood
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
</body>
    <script src="{{asset('js/app.js')}}"></script>
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
    <!--   Core JS Files   -->
    <script src="{{asset('assets/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{asset('assets/js/plugins/bootstrap-switch.js')}}"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--  Chartist Plugin  -->
    <script src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
    <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
    <script src="{{asset('assets/js/light-bootstrap-dashboard.js?v=2.0.0')}}" type="text/javascript"></script>
    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{asset('assets/js/demo.js')}}"></script>
    <!-- <script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
    </script> -->
</html>
