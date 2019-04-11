@include('admin.layouts.header')

@include('admin.layouts.sidebar_left')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    @yield('content')

</div>
<!-- /.content-wrapper -->

@include('admin.layouts.footer')