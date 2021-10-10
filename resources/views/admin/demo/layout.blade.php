<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>

    <style>
        .site-header{
            background: aquamarine;
            height: 50px;
        }

        .site-menu{
            width: 50%;
            float: left;
            height: 100%;
            background: #429eff;
        }

        .site-content{
            width: 75%;
            height: 500px;
            float: left;
            background: #7f57ff;
        }

        .site-footer{
            background: #ffd552;
        }
    </style>
</head>
<body>
    <div class="site-header">
        @include('admin.layout.include.header')
    </div>

    <div class="site-main">
        <div class="site-menu">
            @include('admin.layout.include.menu')
            @yield('page-menu')
        </div>
    </div>

    <div class="site-content">
        @yield('content')
    </div>

    <div class="site-footer">@include('admin.layout.include.footer')</div>
    @yield('script')
</body>
</html>
