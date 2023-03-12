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
    <title>Login Asset IT PT. MUI</title>
    <link rel="apple-touch-icon" href="{{ asset("assets") }}/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon"  height="20" width="30" href="{{ asset("assets") }}/images/logo/MUI2.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/vendors/css/vendors.min.css">
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
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets") }}/css/pages/page-auth.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v1 px-2">
                    <div class="auth-inner py-2">
                        <!-- Login -->
                        <div class="card mb-0">
                            <div class="card-body">
                            <img src="{{ asset("assets") }}/images/logo/mui1.jpg" class="mx-auto d-block" alt="" height="100" width="150">
                            <!-- <h6 class=" text-center">PT. Multi Usage Indonesia</h6> -->
                                    <h2 class="brand-text text-primary text-center">IT Assets Information Application</h2>


                                <form class="auth-login-form mt-2" action="/login" method="post">
                                    @csrf

                                    {{-- inputan username --}}
                                    <div class="form-group">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" aria-describedby="login-email" tabindex="1" autofocus required />
                                    </div>
                                    
                                    {{-- inputan password --}}
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="password">Password</label>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input type="password" required class="form-control form-control-merge" id="password" name="password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" />
                                            <div class="input-group-append">
                                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- submit --}}
                                    <button class="btn btn-primary btn-block" type="submit" tabindex="4">Login</button>
                                </form>
                                <br/>
                                @if (session('status'))
                                    <div class="alert alert-danger">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                
                            </div>
                        </div>
                        <!-- /Login -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset("assets") }}/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset("assets") }}/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset("assets") }}/js/core/app-menu.js"></script>
    <script src="{{ asset("assets") }}/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset("assets") }}/js/scripts/pages/page-auth-login.js"></script>
    <!-- END: Page JS-->

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