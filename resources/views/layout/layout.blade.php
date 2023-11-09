<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="favicon.png">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/Waves/waves.min.css') }}">
    <link rel="stylesheet"
        href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" />
    <link rel="stylesheet" href="assets/plugins/bootstrap-datepicker/css/bootstrap-datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <script src="{{ url('assets/plugins/jquery-ui-1.13.2/external/jquery/jquery.js') }}"></script>
    <title>Document</title>
</head>

<body class="overflow-x-hidden">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="main-content">
        <aside class="sidebar fixed-top bg-light text-dark">
            <div class="sidebar-wrapper">
                <ul class="list-unstyled">
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" title="Dashboard"
                            class="waves-effect waves-dark link nav-link active">
                            <i class="fas fa-chevron-right"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('products') }}" title="Products"
                            class="waves-effect waves-dark link nav-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Products</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('customers') }}" title="Customers"
                            class="waves-effect waves-dark link nav-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Customers</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('suppliers') }}" title="Suppliers"
                            class="waves-effect waves-dark link nav-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Suppliers</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('orders') }}" title="Oders" class="waves-effect waves-dark link nav-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Orders</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('sales.report') }}" title="Sales Report"
                            class="waves-effect waves-dark link nav-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Sales Report</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="waves-effect waves-dark link nav-link">
                            <i class="fas fa-chevron-right"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                </ul>
                <div class="log-status-wrapper">
                    <h4 class="log-status-header text-center h6 p-2">
                        Login Status
                    </h4>
                    <ul class="list-unstyled">
                        <li><span class="fw-semibold"> Login As: </span> username</li>
                        <li><span class="fw-semibold"> User Type: </span> admin</li>
                        <li><span class="fw-semibold"> Since: </span> {{ Date('Y-m-d H:i') }}</li>
                    </ul>
                </div>
                <div class="sticky-bottom text-center">
                    <a href="#" class="btn btn-outline-primary">Logout</a>
                </div>
            </div>
        </aside>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark p-0">
            <div class="container-fluid">
                <a href="#" class="btn d- d-md-none" type="button">
                    <span id="x-toggle" class="fas text-white fa-bars"></span>
                </a>
                <div class="brand-wrapper">
                    <a href="#" class="navbar-brand">Q-POS </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-2">
                        <form class="d-flex my-0 py-0" role="search">
                            <input class="form-control form-control-lg form-search me-2" type="search"
                                placeholder="Search for products, customers ..." aria-label="Search">
                            <button class="btn btn-outline-light p-1" title="Search" type="submit"><i
                                    class="fas fa-magnifying-glass"></i></button>
                        </form>
                    </ul>
                </div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img src="{{ asset('assets/images/avatar-1.png') }}" alt="" class="img-user" />
                        <span class="text-white text-capitalize">username</span>
                    </a>
                    <ul class="dropdown-menu user-nav shadow outline-0 border-0">
                        <li>
                            <h6 class="dropdown-header">Hello, User !</h6>
                        </li>
                        {{-- <li><a class="dropdown-item" href="#">Action</a></li> --}}
                        <li><a class="dropdown-item" href="#">Notifications</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"><i class="fas fa-"></i><span>Log Out</span></a>
                        </li>
                    </ul>
                </div>
                <style>
                    .dropdown-menu[data-bs-popper] {
                        right: 0;
                        left: auto;
                        transition: all 0.3s ease-out;
                    }

                    .dropdown-menu.user-nav {
                        right: -15px !important;
                        top: 55px !important;
                    }

                    .dropdown-menu.user-nav.show {
                        border-radius: 0;
                        transition: all 0.3s ease-out;
                    }
                </style>
            </div>
        </nav>
        <div class="container-fluid">
            main content
            @yield('content')
        </div>
    </div>
    <script src="{{ url('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('assets/plugins/jquery-ui-1.13.2/jquery-ui.min.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="{{ asset('assets/plugins/Waves/waves.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/js/main.js') }}"></script>
    <script src="{{ url('assets/js/menu.js') }}"></script>
    @yield('js')
</body>

</html>
