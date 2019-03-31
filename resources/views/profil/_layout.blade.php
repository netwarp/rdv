<!doctype html>
<html lang="fr">
    <head>
        @include('front.includes.head')
        @stack('css')
    </head>
    <body>
    <div id="app" style="padding-top: 50px;">
        @include('front.includes.navbar')
        <div class="container-fluid" style="margin-top: 3rem">
            <div class="row">
                <div class="col-md-2" id="sidebar">
                    <ul>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Accueil">
                            <a class="nav-link" href="{{ action('Profil\ProfilController@getIndex') }}">
                                <i class="fas fa-home"></i>
                                <span class="nav-link-text">Accueil</span>
                            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Annonces">
                            <a class="nav-link" href="{{ action('Profil\AdsController@index') }}">
                                <i class="fas fa-bullhorn"></i>
                                <span class="nav-link-text">Annonces</span>
                            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Notation">
                            <a class="nav-link" href="#">
                                <i class="fas fa-star"></i>
                                <span class="nav-link-text">Notation</span>
                            </a>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Paramètres">
                            <a class="nav-link" href="{{ ''  }}">
                                <i class="fas fa-cogs"></i>
                                <span class="nav-link-text">Paramètres</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-10" id="main-profil">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('front.includes.footer')
    @stack('js')

    @if (session('error'))
        <script src="/js/sweetalert.min.js"></script>
        <script>
            swal('Erreur', '{{ session('error') }}', 'error')
        </script>
    @endif

    @if (session('success'))
        <script src="/js/sweetalert.min.js"></script>
        <script>
            swal('Merci', '{{ session('success') }}', "success")
        </script>
    @endif
    </body>
</html>