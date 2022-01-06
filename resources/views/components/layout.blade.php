<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>{{ $title }}</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body class="light-version">
    <!-- Preloader -->
    @include('include.header')

{{ $body }}
@include('include.footer')
</body>
<!-- ########## All JS ########## -->
<!-- jQuery js -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- All Plugins js -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/particles.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<!-- Parallax js -->
<script src="{{ asset('assets/js/dzsparallaxer.js') }}"></script>

<script src="{{ asset('assets/js/jquery.syotimer.min.js') }}"></script>

<!-- script js -->
<script src="{{ asset('assets/js/script.js') }}"></script><a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;">Scroll
    Top</a>

</html>
