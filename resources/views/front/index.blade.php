@extends('front._layout')

@section('content')
    <section style="margin-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Dernières offres
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Utilisateur</th>
                                        <th>Monnaie</th>
                                        <th>Lieu</th>
                                        <th>Prix</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($offers as $ad)
                                        <tr>
                                            <td><a href="{{ action('Front\FrontController@getAd', ['id' => $ad['_id'], 'slug' => $ad->slug] ) }}">{{ $ad->name ?? '' }}</a></td>
                                            <td><a href="{{ action('Front\FrontController@getAd', ['id' => $ad['_id'], 'slug' => $ad->slug] ) }}">{{ $ad->currency ?? '' }}</a></td>
                                            <td><a href="{{ action('Front\FrontController@getAd', ['id' => $ad['_id'], 'slug' => $ad->slug] ) }}">{{ $ad->location ?? '' }}</a></td>
                                            <td><a href="{{ action('Front\FrontController@getAd', ['id' => $ad['_id'], 'slug' => $ad->slug] ) }}">{{ $ad->price ?? '' }}</a></td>
                                            <td><a href="{{ action('Front\FrontController@getAd', ['id' => $ad['_id'], 'slug' => $ad->slug] ) }}">{{ $ad->created_at->format('d/m/Y') ?? '' }}</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Dernières demandes
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Utilisateur</th>
                                        <th>Monnaie</th>
                                        <th>Lieu</th>
                                        <th>Prix</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($requests as $ad)
                                        <tr>
                                            <td><a href="#">{{ $ad->name ?? '' }}</a></td>
                                            <td><a href="#">{{ $ad->currency ?? '' }}</a></td>
                                            <td><a href="#">{{ $ad->location ?? '' }}</a></td>
                                            <td><a href="#">{{ $ad->price ?? '' }}</a></td>
                                            <td><a href="{{ action('Front\FrontController@getAd', ['id' => $ad['_id'], 'slug' => $ad->slug] ) }}">{{ $ad->created_at->format('d/m/Y') ?? '' }}</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="street">
        <h1 class="title">Votre plateforme d'echange de crypto-monnaies <br> entre particuliers.</h1>
        <a href="/deposer-annonce" class="btn-inverted">Commencer</a>
    </section>

    <section id="how-it-works">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title">Comment ça marche ?</h2>
                    <p>
                        Si vous avez l'habitude des sites de petites annonces vous ne serez pas perdu. <br>
                        Le principe est simple: vous passez une annonce,  indiquez si vous souhaitez acheter ou vendre des crypto-monnaies, et des gens de votre région vous répondront directement.
                        <br>
                        Une fois la rencontre organisée, les deux parties échangent de la monnaie virtuelle contre de la monnaie physique.
                    </p>
                </div>
                <div class="col-md-6 text-center" id="network">
                    <img src="/images/qr-code.svg" alt="qr-code" width="180">
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4 service">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="icon">
                                <img src="/images/agreement.png" alt="agreement">
                            </div>
                            <h2 class="title">Direct</h2>
                            <p>
                                Votre transaction se fait de particulier à particulier. Pas de banque, pas d'intermédiaire et nous ne touchons aucune commission.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="icon">
                                <img src="/images/anonymous.png" alt="anonyme">
                            </div>
                            <h2 class="title">Privé</h2>
                            <p>
                                Aucune sauvegarde d'information sur vous. Vous pouvez créer autant d'annonces que vous le souhaitez avec des pseudonymes différents.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 service">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="icon">
                                <img src="/images/reading.png" alt="livres">
                            </div>
                            <h2 class="title">Ludique</h2>
                            <p>
                                Pour vous offir encore plus de sécurité, nous vous faisons découvrir des outils qui assurent une meilleure protection sur internet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--
    <section id="curve">
        <h3 class="title">Restez informé des cours</h3>
        <p>Vous pouvez suivre les cours du bitcoin, ether, litecoin, monero et plein d'autres.</p>
        <a href="/cours" class="btn btn-primary btn-lg">Voir les cours</a>
    </section>
    --}}

    <section id="stats">
        <div class="container">
            <h4 class="title">Quelques chiffres en bref</h4>
            <div class="row">
                {{--
                <div class="col-md-3 stat">
                    {{ 30 * 24 }} mises à jours quotidiennes des cours
                </div>
                --}}
                <div class="col-md-4 stat">
                    {{ $offers->count() ?? '' }} <br> offres
                </div>

                <div class="col-md-4 stat">
                    {{ $requests->count() ?? '' }} <br> demandes
                </div>
                {{--
                <div class="col-md-4 stat">
                    {{ $posts_count ?? '' }} <br> article{{ $posts_count > 1 ? 's' : '' }} sur le blog
                </div>
                --}}
            </div>
            <div class="row" style="margin-top: 80px;">
                <h5 class="title">Bientôt sur IOS et Android...</h5>
            </div>
        </div>
    </section>
@endsection