<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="favicon.png">
    <link rel="stylesheet" href="{{ url('assets/icon/simple-line-icons/css/simple-line-icons.css') }}">

    <link rel="stylesheet"
        href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" />
    <link rel="stylesheet" href="assets/plugins/bootstrap-datepicker/css/bootstrap-datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" />


    <link rel="stylesheet" href="{{ url('assets/plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">
    <script src="{{ url('assets/plugins/jquery-ui-1.13.2/external/jquery/jquery.js') }}"></script>
    <title>Document</title>
</head>

<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar">
        </div>
    </div>
    <div class="wrapper">
        <!-- Navbar-->
        <header class="main-header-top hidden-print">
            <a href="#"
                class="logo d-flex justify-content-center align-items-center align-content-center my-auto">
                <h1 class="able-logo">
                    q-pos
                </h1>
            </a>
            <nav class="navbar d-block navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
                <ul class="top-nav lft-nav">
                    <li>
                        <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                            <i class="ti-files"> </i><span> Files</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                            <span>Dropdown </span><i class=" icofont icofont-simple-down"></i>
                        </a>
                        <ul class="dropdown-menu settings-menu">
                            <li><a href="#">List item 1</a></li>
                            <li><a href="#">List item 2</a></li>
                            <li><a href="#">List item 3</a></li>
                            <li><a href="#">List item 4</a></li>
                            <li><a href="#">List item 5</a></li>
                        </ul>
                    </li>
                    <li class="dropdown pc-rheader-submenu message-notification search-toggle">
                        <a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">
                            <i class="ti-search"></i>
                        </a>
                    </li>
                </ul>
                <!-- Navbar Right Menu-->
                <div class="navbar-custom-menu f-right">
                    <div class="upgrade-button">
                        <a href="#" class="icon-circle txt-white btn btn-sm btn-primary upgrade-button">
                            <span>Upgrade To Pro</span>
                        </a>
                    </div>

                    <ul class="top-nav">
                        <!--Notification Menu-->

                        <li class="dropdown notification-menu">
                            <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                                <i class="icon-bell"></i>
                                <span class="badge badge-danger header-badge">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>
                                <li class="bell-notification">
                                    <a href="javascript:;" class="media">
                                        <span class="media-left media-icon">
                                            <img class="img-circle" src="assets/images/avatar-1.png" alt="User Image">
                                        </span>
                                        <div class="media-body"><span class="block">Lisa sent you a mail</span><span
                                                class="text-muted block-time">2min ago</span></div>
                                    </a>
                                </li>
                                <li class="bell-notification">
                                    <a href="javascript:;" class="media">
                                        <span class="media-left media-icon">
                                            <img class="img-circle" src="assets/images/avatar-2.png" alt="User Image">
                                        </span>
                                        <div class="media-body"><span class="block">Server Not Working</span><span
                                                class="text-muted block-time">20min ago</span></div>
                                    </a>
                                </li>
                                <li class="bell-notification">
                                    <a href="javascript:;" class="media"><span class="media-left media-icon">
                                            <img class="img-circle" src="assets/images/avatar-3.png"
                                                alt="User Image">
                                        </span>
                                        <div class="media-body"><span class="block">Transaction xyz
                                                complete</span><span class="text-muted block-time">3 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="not-footer">
                                    <a href="#!">See all notifications.</a>
                                </li>
                            </ul>
                        </li>
                        <!-- chat dropdown -->
                        <li class="pc-rheader-submenu ">
                            <a href="#!" class="drop icon-circle displayChatbox">
                                <i class="icon-bubbles"></i>
                                <span class="badge badge-danger header-badge">5</span>
                            </a>

                        </li>
                        <!-- window screen -->
                        <li class="pc-rheader-submenu">
                            <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                                <i class="icon-size-fullscreen"></i>
                            </a>

                        </li>
                        <!-- User Menu-->
                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                                <span><img class="img-circle " src="assets/images/avatar-1.png" style="width:40px;"
                                        alt="User Image"></span>
                                <span>John <b>Doe</b> <i class=" icofont icofont-simple-down"></i></span>

                            </a>
                            <ul class="dropdown-menu settings-menu">
                                <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                                <li><a href="#"><i class="icon-user"></i> Profile</a></li>
                                <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li>
                                <li class="p-0">
                                    <div class="dropdown-divider m-0"></div>
                                </li>
                                <li><a href="#"><i class="icon-lock"></i> Lock Screen</a></li>
                                <li><a href="login1.html"><i class="icon-logout"></i> Logout</a></li>

                            </ul>
                        </li>
                    </ul>

                </div>
            </nav>
        </header>
        <aside class="main-sidebar hidden-print ">
            <section class="sidebar" id="sidebar-scroll">
                <!-- Sidebar Menu-->
                <ul class="sidebar-menu">
                    <li class="active treeview">
                        <a class="waves-effect waves-dark" href="#">
                            <i class="icon-speedometer"></i><span> Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-level">--- Components</li>
                    {{-- <li class="treeview">
                        <a class="waves-effect waves-dark" href="#!"><i
                                class="icon-briefcase"></i><span> UI Elements</span><i
                                class="icon-arrow-down"></i>
                        </a>
                        <ul class="treeview-menu"> --}}
                    <li>
                        <a class="waves-effect waves-dark" href="accordion.html">
                            <i class="icon-arrow-right"></i> Accordion</a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="button.html">
                            <i class="icon-arrow-right"></i> Button</a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="label-badge.html">
                            <i class="icon-arrow-right"></i> Label Badge</a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="bootstrap-ui.html">
                            <i class="icon-arrow-right"></i> Grid system</a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="box-shadow.html">
                            <i class="icon-arrow-right"></i> Box Shadow</a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="color.html">
                            <i class="icon-arrow-right"></i>
                            Color</a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="light-box.html">
                            <i class="icon-arrow-right"></i> Light Box</a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="notification.html">
                            <i class="icon-arrow-right"></i> Notification</a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="panels-wells.html">
                            <i class="icon-arrow-right"></i> Panels-Wells</a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="tabs.html">
                            <i class="icon-arrow-right"></i>
                            Tabs</a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="tooltips.html">
                            <i class="icon-arrow-right"></i> Tooltips</a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="typography.html">
                            <i class="icon-arrow-right"></i> Typography</a>
                    </li>
                    {{-- </ul>
                    </li> --}}

                    {{-- <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i
                                class="icon-chart"></i><span> Charts &amp; Maps</span><span
                                class="label label-success menu-caption">New</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="float-chart.html"><i
                                        class="icon-arrow-right"></i> Float Charts</a></li>
                            <li><a class="waves-effect waves-dark" href="morris-chart.html"><i
                                        class="icon-arrow-right"></i> Morris Charts</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="main-header">
                        <h4>Dashboard</h4>
                    </div>
                </div>
                <div class="row dashboard-header">
                    <div class="col-lg-3 col-md-6">
                        <div class="card dashboard-product">
                            <span>Products</span>
                            <h2 class="dashboard-total-products">4500</h2>
                            <span class="label label-warning">Sales</span>Arriving Today
                            <div class="side-box">
                                <i class="ti-signal text-warning-color"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card dashboard-product">
                            <span>Products</span>
                            <h2 class="dashboard-total-products">37,500</h2>
                            <span class="label label-primary">Views</span>View Today
                            <div class="side-box ">
                                <i class="ti-gift text-primary-color"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card dashboard-product">
                            <span>Products</span>
                            <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                            <span class="label label-success">Sales</span>Reviews
                            <div class="side-box">
                                <i class="ti-direction-alt text-success-color"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card dashboard-product">
                            <span>Products</span>
                            <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                            <span class="label label-danger">Sales</span>Reviews
                            <div class="side-box">
                                <i class="ti-rocket text-danger-color"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed-button">
                <a href="#!" class="btn btn-md btn-primary">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
                </a>
            </div>
        </div>
    </div>
    <script src="{{ url('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('assets/plugins/jquery-ui-1.13.2/jquery-ui.min.js') }}"></script>
    <script src="{{ url('assets/plugins/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ url('assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ url('assets/plugins/classie/classie.js') }}"></script>
    <script src="{{ url('assets/plugins/notification/js/bootstrap-growl.min.js') }}"></script>
    <script src="{{ url('assets/plugins/countdown/js/jquery.counterup.js') }}"></script>
    <script src="{{ url('assets/plugins/moment/min/moment.min.js') }}"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="{{ url('assets/js/main.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/pages/elements.js') }}"></script>
    <script src="{{ url('assets/js/menu.min.js') }}"></script>
    <script>
        var $window = $(window);
        var nav = $('.fixed-button');
        $window.scroll(function() {
            if ($window.scrollTop() >= 200) {
                nav.addClass('active');
            } else {
                nav.removeClass('active');
            }
        });
    </script>
</body>

</html>
