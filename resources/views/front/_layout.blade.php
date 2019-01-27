<!doctype html>
<html lang="en">
    <head>
        @include('front.includes.head')
        @stack('css')
    </head>
    <body>
        <div id="app" style="padding-top: 50px;">
            @include('front.includes.navbar')
            @yield('content')
        </div>
        @include('front.includes.footer')
        @stack('js')
    </body>
</html>