<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        @include('front.includes.css')
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @include('front.includes.menu')
        <!-- Masthead-->
        @yield('body')
        <!-- Footer-->
        @include('front.includes.footer')
        <!-- Portfolio Modals-->
        @include('front.includes.script')
    </body>
</html>
