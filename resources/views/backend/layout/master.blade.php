<!doctype html>
<html lang="en" dir="rtl">

<head>
    @include('backend.layout.header')
</head>

<body class="app sidebar-mini">
    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('backend/assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->
    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            @include('backend.layout.sidebar')
            @include('backend.layout.navbar')
            @yield('content')
        </div>
        @include('backend.layout.footer')
    </div>
    @include('backend.layout.footerjs')
</body>

</html>
