<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    @include('backend.includes.css')
</head>
<body>
@include('backend.includes.header')
<div id="layoutSidenav">
    @include('backend.includes.menu')
    <div id="layoutSidenav_content">
        @yield('body')
       @include('backend.includes.footer')
    </div>
</div>
@include('backend.includes.script')
</body>
</html>
