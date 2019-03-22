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

                <form action="{{ action('Front\FrontController@postPlaceAd') }}" method="post">
                    {{ csrf_field() }}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Votre annonce
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="currency">Monnaie</label>
                                <input type="text" class="form-control" list="currency" autocomplete="on" name="currency" value="{{ old('currency') }}">
                                <datalist id="currency">
                                    @foreach($currencies as $currency)
                                        <option value="{{ $currency }}">{{ $currency }}</option>
                                    @endforeach
                                </datalist>
                            </div>

                            <div class="form-group">
                                <label for="type">Type</label> <br>
                                <label class="radio-inline">
                                    <input type="radio" name="type" value="offer" required> Offre
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="type" value="request"> Demande
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="title">Titre</label>
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="message">Message &nbsp; <small>max 300 charactères</small></label>
                                <textarea name="message" rows="4" class="form-control" maxlength="300" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="price">Prix</label>
                                <input type="text" class="form-control" name="price" value="{{ old('price') }}" required pattern="[+-]?[0-9]{1,10}">
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Localisation
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="location">Ville ou code postal</label>
                                <input type="text" class="form-control" name="location" value="{{ old('location') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Vos informations
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="name">Pseudo</label>
                                <input type="text" class="form-control" name="name" value="{{ Auth::user()->name ?? '' }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ Auth::user()->email ?? '' }}" required>
                            </div>

                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="cgu" required>
                                        J'ai lu et j'accèpte les <a href="/conditions-generales-utilisations">conditions générales d'utilisation</a>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Valider</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection