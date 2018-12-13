<!DOCTYPE html>
<html lang="en">
@include('layout.header')
<body class="hold-transition skin-blue sidebar-mini">
<!-- page content -->
<div class="wrapper">
@include('layout.top_navbar')
@include('layout.side_navbar')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    @include('layout.footer')
</div>
<!-- /page content -->
@include('layout.pagejs')
</body>
</html>
