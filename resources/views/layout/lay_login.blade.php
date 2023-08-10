<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('/clear_theme/img/favicon.ico') }}" />
    <!-- Bootstrap -->
    <link href="{{ asset('/clear_theme/css/bootstrap.css') }}" rel="stylesheet">
    <!-- end of bootstrap -->
    <!--page level css -->
    <link type="text/css" href="{{ asset('/clear_theme/css/themify-icons/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/clear_theme/vendors/iCheck/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('/clear_theme/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('/clear_theme/css/login.css') }}" rel="stylesheet">
    <!--end page level css-->
</head>

<body id="sign-in">
    <div class="preloader">
        <div class="loader_img"><img src="{{ asset('/clear_theme/img/loader.gif') }}" alt="loading..." height="64"
                width="64"></div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <!-- global js -->
    <script src="{{ asset('/clear_theme/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/clear_theme/js/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/clear_theme/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- page level js -->
    <script type="text/javascript" src="{{ asset('/clear_theme/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('/clear_theme/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"
        type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('/clear_theme/js/custom_js/login.js') }}"></script>
    <!-- end of page level js -->
</body>

</html>
