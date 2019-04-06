@extends('profil._layout')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ action('Profil\ProfilController@getIndex') }}">Accueil</a>
        </li>
    </ol>
    <div class="row">
        <div class="col-xl-6 col-sm-6 mb-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="h4" href="#">{{ $ads ?? '' }} annonce{{ $ads > 1 ? 's' : '' }}</div>
                </div>
                <div class="panel-footer">
                    <a href="#">Gérer mes annonces</a>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="h4" href="#">{{ '$rates' ?? '' }} avis positif{{ '$rates' > 1 ? 's' : '' }}</div>
                </div>
                <div class="panel-footer">
                    <a href="#">Voir mes avis</a>
                </div>
            </div>
        </div>
    </div>
@endsection