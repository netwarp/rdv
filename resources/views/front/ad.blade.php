@extends('front._layout')

@section('content')
    <div class="container" style="margin-top: 46px; min-height: 54vh;">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="data">
                            <div class="data-row">
                                <div class="data-key">Prix</div>
                                <div class="data-value">{{ $ad->data['price'] }}</div>
                            </div>
                            <div class="data-row">
                                <div class="data-key">Monnaie</div>
                                <div class="data-value">{{ $ad->data['currency'] }}</div>
                            </div>

                            <div class="data-row">
                                <div class="data-key">Nom</div>
                                <div class="data-value">{{ $ad->data['name'] }}</div>
                            </div>
                            <div class="data-row">
                                <div class="data-key">Type</div>
                                <div class="data-value">{{ $ad->data['type'] == 'request' ? 'Demande' : 'Offre' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Information sur l'utilisateur
                    </div>
                    <div class="panel-body">
                        <div class="data">
                            <div class="data-row">
                                <div class="data-key">Nom</div>
                                <div class="data-value">{{ $ad->getUser->name ?? $ad->data['name'] }}</div>
                            </div>
                            @if (isset($ad->getUser))
                                <div class="data-row">
                                    <div class="data-key">Avis positifs</div>
                                    <div class="data-value">{{ '10' }}</div>
                                </div>
                                <div class="data-row">
                                    <div class="data-key">Avis négatif</div>
                                    <div class="data-value">{{ '2' }}</div>
                                </div>
                                <a href="/utilisateur/{{ $ad->getuser->name }}" class="btn btn-primary btn-block"><i class="fas fa-search"></i></i> Plus d'information</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1 class="h3">{{ $ad->data['title'] }}</h1></div>
                    <div class="panel-body">
                        {{ $ad->data['message'] }}
                    </div>
                    <div class="panel-footer">
                        {{ $ad->data['email'] }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection