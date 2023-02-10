<!-- META DATA -->
<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<!-- TITLE -->
<title>@yield('title')</title>
<!-- FAVICON -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/images/brand/favicon.ico') }}" />
<!-- BOOTSTRAP CSS -->
<link href="{{ asset('backend/assets/plugins/bootstrap/css/bootstrap.rtl.min.css') }}" rel="stylesheet" />
<!-- STYLE CSS -->
<link href="{{ asset('backend/assets/css-rtl/style.css') }}" rel="stylesheet" />
<link href="{{ asset('backend/assets/css-rtl/dark-style.css') }}" rel="stylesheet" />
<link href="{{ asset('backend/assets/css-rtl/skin-modes.css') }}" rel="stylesheet" />
<!-- SIDE-MENU CSS -->
<link href="{{ asset('backend/assets/css-rtl/sidemenu.css') }}" rel="stylesheet" id="sidemenu-theme">
<!-- P-scroll bar css-->
<link href="{{ asset('backend/assets/plugins/p-scroll/perfect-scrollbar-rtl.css') }}" rel="stylesheet" />
<!--- FONT-ICONS CSS -->
<link href="{{ asset('backend/assets/plugins/icons/icons.css') }}" rel="stylesheet" />
<!-- SIDEBAR CSS -->
<link href="{{ asset('backend/assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">
<!-- SELECT2 CSS -->
<link href="{{ asset('backend/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
<!-- INTERNAL Data table css -->
<link href="{{ asset('backend/assets/plugins/datatable-rtl/css/dataTables.bootstrap5.css') }}" rel="stylesheet" />
<link href="{{ asset('backend/assets/plugins/datatable-rtl/responsive.bootstrap5.css') }}" rel="stylesheet" />
<!-- COLOR SKIN CSS -->
<link id="theme" rel="stylesheet" type="text/css" media="all"
    href="{{ asset('backend/assets/colors/color1.css') }}" />
<!-- DATA TABLE CSS -->
<link href="{{ asset('backend/assets/plugins/datatable-rtl/css/dataTables.bootstrap5.css') }}" rel="stylesheet" />
<link href="{{ asset('backend/assets/plugins/datatable-rtl/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/plugins/datatable-rtl/responsive.bootstrap5.css') }}" rel="stylesheet" />
<!-- INTERNAL Switcher css -->
<link href="{{ asset('backend/assets/switcher/css/switcher-rtl.css') }}" rel="stylesheet" />
<link href="{{ asset('backend/assets/switcher/demo.css') }}" rel="stylesheet" />
@yield('css')
