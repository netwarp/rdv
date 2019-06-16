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
            <div class="panel panel-default">
                <div class="panel-heading">
                    Nom
                </div>
                <div class="panel-body">
                    <form action="{{ action('Profil\SettingsController@postIndex') }}" method="POST" class="">
                        @csrf
                        <input type="hidden" name="setting" value="name">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required>

                        </div>
                        <div class="form-group">
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Mettre à jour</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Email
                </div>
                <div class="panel-body">
                    <form action="{{ action('Profil\SettingsController@postIndex') }}" method="POST" class="">
                        @csrf
                        <input type="hidden" name="setting" value="email">

                        <div class="form-group">
                            <label for="old_email">Old email</label>
                            <input type="email" class="form-control" name="old_email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">New email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="confirmation">Confirmation</label>
                            <input type="email" class="form-control" name="confirmation" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Mot de passe
                </div>
                <div class="panel-body">
                    <form action="{{ action('Profil\SettingsController@postIndex') }}" method="POST" class="">
                        @csrf

                        <input type="hidden" name="setting" value="password">

                        <div class="form-group">
                            <label for="old_password">Old password</label>
                            <input type="password" class="form-control" name="old_password">
                        </div>

                        <div class="form-group">
                            <label for="password">New password</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="form-group">
                            <label for="password">Confirmation</label>
                            <input type="password" class="form-control" name="confirmation">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Description
                </div>
                <div class="panel-body">
                    <form action="{{ action('Profil\SettingsController@postIndex') }}" method="POST" class="">
                        @csrf
                        <input type="hidden" name="setting" value="description">
                        <div class="form-group">
                            <textarea class="form-control" name="description" rows="5">{{ Auth::user()->description ?? '' }}</textarea>
                        </div>
                        <div class="from-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Mettre à jour</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection