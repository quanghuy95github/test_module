@include('admin.layouts.header')

@include('admin.layouts.sidebar_left')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    @include('admin.partials.entete')

    <!-- Main content -->
    <section class="content">

        <!-- Main row -->
        <div class="row">
            @yield('content')
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@include('admin.layouts.footer')