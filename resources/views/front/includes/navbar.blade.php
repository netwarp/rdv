<nav class="navbar navbar-default navbar-fixed-top" style="margin-bottom: 40px;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="/images/logo.png" alt="logo" id="logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Route::currentRouteName() == 'front.getPlaceAd' ? 'active' : '' }}"><a href="/deposer-annonce">Déposer une annonce <span class="sr-only">(current)</span></a></li>
                <li class="{{ Route::currentRouteName() == 'front.getOffers' ? 'active' : '' }}"><a href="/offres">Offres</a></li>
                <li class="{{ Route::currentRouteName() == 'front.getRequests' ? 'active' : '' }}"><a href="/demandes">Demandes</a></li>
                <li class="{{ Route::currentRouteName() == 'front.getCurves' ? 'active' : '' }}"><a href="/cours">Cours</a></li>
                <li class="{{ Route::currentRouteName() == 'front.getBlog' ? 'active' : '' }}"><a href="/blog">Blog</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Plus <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ Route::currentRouteName() == 'front.getCurrencies' ? 'active' : '' }}"><a href="/monnaies">Monnaies</a></li>
                        <li class="{{ Route::currentRouteName() == 'front.getTools' ? 'active' : '' }}"><a href="/outils">Outils</a></li>
                        <li class="{{ Route::currentRouteName() == 'front.api' ? 'active' : '' }}"><a href="/api">API</a></li>
                    </ul>
                </li>
                @if(Auth::guest())
                    <li><a href="/register" class="btn-account"><button class="btn btn-success btn-lg">Inscription</button></a></li>
                    <li><a href="/login" class="btn-account"><button class="btn btn-primary btn-lg">Connexion</button></a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> {{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="glyphicon glyphicon-home"></i> Espace membre</a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Paramètres</a></li>
                            <li><a href="/logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>