<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title> Admin Asset | @yield("title") </title>
    <link rel="apple-touch-icon" href="{{ asset("assets") }}/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets") }}/images/logo/mui2.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/vendors/css/extensions/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/vendors/css/tables/datatable/responsive.bootstrap.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/css/plugins/extensions/ext-component-toastr.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/css/pages/app-invoice-list.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

    @yield('css')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
        <h4 class="mt-1 text-primary"><b>MUI - IT Assets Information    </b></h4>
            <ul class="nav navbar-nav align-items-center ml-auto">
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">{{ auth()->user()->name }}</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="{{ asset("assets") }}/images/logo/it.jpg" alt="avatar" height="50" width="50"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="/logout"><i class="mr-50" data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header mb-4">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="/admin/dashboard"><span class="brand-logo"></span>
                <img src="{{ asset("assets") }}/images/logo/mui1.jpg" alt="" height="70" width="100">
                        <h2 class="brand-text">IT Assets</h2>
                    </a></li>
                <!-- <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li> -->
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="/admin/dashboard">
                        <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Home">Dashboard</span>
                    </a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Asset Information">Asset Information</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/admin/computer-asset"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Computer Asset">Computer Asset</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/admin/peripheral-asset"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Peripherals Asset">Peripherals Asset</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/admin/software-asset"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Software Asset">Software Asset</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/admin/client-information"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Client Information">Client Information</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="codesandbox"></i><span class="menu-title text-truncate" data-i18n="Asset Information">Inventory</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="#">Computer Inventory</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="#">Peripherals Inventory</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="#">Software Inventory</span></a>
                        </li>
                    </ul>
                </li>
                 <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="tool"></i><span class="menu-title text-truncate" data-i18n="Asset Information">Maintenance</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/admin/computer-asset"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Computer Asset">Computer Asset</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/admin/peripheral-asset"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Peripherals Asset">Peripherals Asset</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/admin/software-asset"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Software Asset">Software Asset</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/admin/dashboard"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Client Information">Client Information</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25"><b>I T T S</b> &copy; 2022 <b>PT. Multi Usage Indonesia</b> </span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset("assets") }}/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset("assets") }}/vendors/js/charts/apexcharts.min.js"></script>
    <!-- <script src="{{ asset("assets") }}/vendors/js/extensions/toastr.min.js"></script> -->
    <script src="{{ asset("assets") }}/vendors/js/extensions/moment.min.js"></script>
    <script src="{{ asset("assets") }}/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="{{ asset("assets") }}/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="{{ asset("assets") }}/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="{{ asset("assets") }}/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="{{ asset("assets") }}/vendors/js/tables/datatable/responsive.bootstrap4.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset("assets") }}/js/core/app-menu.js"></script>
    <script src="{{ asset("assets") }}/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset("assets") }}/js/scripts/pages/dashboard-analytics.js"></script>
    <script src="{{ asset("assets") }}/js/scripts/pages/app-invoice-list.js"></script>
    <!-- END: Page JS-->
    @yield('js')

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>