@extends('front._layout')

@push('css')
    <style>
        .form-group {
            margin-bottom: 2.2rem;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="h3">Déposer une annonce</h1>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (Auth::guest())
                    <div class="alert alert-info">
                        Vous pouvez créer une annonce sans inscription. <br>
                        Si vous souhaitez gérer vos annonces ou être noté par d'autres utilisateurs, ça sera plus facile avec un compte. <br>

                    </div>
                @endif

                <form action="{{ action('Front\FrontController@postPlaceAd') }}" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Votre annonce
                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                                <label for="currency" class="col-sm-2 control-label">Monnaie</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" autocomplete="on" list="currency" name="currency" value="{{ old('currency') }}">
                                    <datalist id="currency">
                                        @foreach($currencies as $currency)
                                            <option value="{{ $currency }}">{{ $currency }}</option>
                                        @endforeach
                                    </datalist>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="type" class="col-sm-2 control-label">Type</label>
                                <label class="radio-inline">
                                    <input type="radio" name="type" value="offer" required> Offre
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="type" value="request"> Demande
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Titre</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message" class="col-sm-2 control-label">Message &nbsp; <small>max 300 charactères</small></label>
                                <div class="col-md-10">
                                    <textarea name="message" rows="4" class="form-control" maxlength="300" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="price" class="col-sm-2 control-label">Prix</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="price" value="{{ old('price') }}" required pattern="[+-]?[0-9]{1,10}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Localisation
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="location" class="col-sm-2 control-label">Ville ou code postal</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="location" value="{{ old('location') }}" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Vos informations
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Pseudo</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name ?? '' }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email ?? '' }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-offset-1">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="cgu" required>
                                            J'ai lu et j'accèpte les <a href="/conditions-generales-utilisations">conditions générales d'utilisation</a>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-offset-1">
                                    <button type="submit" class="btn btn-primary btn-lg">Valider</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection