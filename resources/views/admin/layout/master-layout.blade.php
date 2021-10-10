<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layout.include.header')
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="/admin/layout/home" class="site_title"><i class="fa fa-paw"></i> <span>Hello World!</span></a>
                </div>

                <!-- menu profile quick info -->
            @include('admin.layout.include.profile')
            <!-- /menu profile quick info -->

                <!-- sidebar menu -->
            @include('admin.layout.include.menu')
            <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
    @include('admin.layout.include.top-navigation')
    <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="row">
                @yield('content')
            </div>
            <br/>
        </div>
        <!-- /page content -->

        <!-- footer content -->
    @include('admin.layout.include.footer')
    <!-- /footer content -->
    </div>
</div>
@include('admin.layout.include.scrips')
<!-- Custom Theme Scripts -->
<script src="/build/js/custom.min.js"></script>

</body>
</html>
