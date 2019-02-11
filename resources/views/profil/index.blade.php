@extends('profil._layout')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ action('Profil\ProfilController@getIndex') }}">Accueil</a>
        </li>
    </ol>
    <div class="row">
        <div class="col-xl-6 col-sm-6 mb-6">
            <div class="card o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-fw fa-comments text-secondary"></i>
                    </div>
                    <div class="h4" href="#">{{ $ads ?? '' }} annonce{{ $ads > 1 ? 's' : '' }}</div>
                </div>
                <a class="card-footer clearfix" href="{{ '' }}">
                    Gérer mes annonces
                </a>
            </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-6">
            <div class="card o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fa fa-fw fa-star text-secondary"></i>
                    </div>
                    <div class="h4" href="#">{{ '$rates' ?? '' }} avis positif{{ '$rates' > 1 ? 's' : '' }}</div>
                </div>
                <a class="card-footer clearfix" href="{{ '' }}">
                    Voir mes avis
                </a>
            </div>
        </div>
    </div>
@endsection