<!doctype html>
<html lang="fr">
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

        @if (session('error'))
            <script src="/js/sweetalert.min.js"></script>
            <script>
                swal('Erreur', '{{ session('error') }}', 'error')
            </script>
        @endif
    </body>
</html>