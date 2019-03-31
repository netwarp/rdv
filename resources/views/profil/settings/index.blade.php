@extends('profil._layout')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ action('Profil\ProfilController@getIndex') }}">Accueil</a>
        </li>
        <li class="breadcrumb-item">
            Paramètres
        </li>
    </ol>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-header">
                    Nom
                </div>
                <div class="card-body">
                    <form action="{{ action('Profil\SettingsController@postIndex') }}" method="POST" class="">
                        {{ csrf_field() }}
                        <input type="hidden" name="param" value="name">
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Mettre à jour</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-header">
                    Email
                </div>
                <div class="card-body">
                    <form action="{{ action('Profil\SettingsController@postIndex') }}" method="POST" class="">
                        {{ csrf_field() }}
                        <input type="hidden" name="param" value="email">
                        <div class="input-group">
                            <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Mettre à jour</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Mot de passe
                </div>
                <div class="card-body">
                    <form action="{{ action('Profil\SettingsController@postIndex') }}" method="POST" class="">
                        {{ csrf_field() }}
                        <input type="hidden" name="param" value="password">
                        <div class="form-group">
                            <label>Nouveau mot de passe</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>Confirmer le  mot de passe</label>
                            <input type="password" class="form-control" name="confirmation">
                        </div>
                        <div class="from-group">
                            <button type="submit" class="btn btn-primary btn-block">Mettre à jour</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Description
                </div>
                <div class="card-body">
                    <form action="{{ action('Profil\SettingsController@postIndex') }}" method="POST" class="">
                        {{ csrf_field() }}
                        <input type="hidden" name="param" value="description">
                        <div class="form-group">
                            <textarea class="form-control" name="description" rows="5">{{ Auth::user()->description }}</textarea>
                        </div>
                        <div class="from-group">
                            <button type="submit" class="btn btn-primary btn-block">Mettre à jour</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection