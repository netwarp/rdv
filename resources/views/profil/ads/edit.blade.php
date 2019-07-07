@extends('profil._layout')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ action('Profil\ProfilController@getIndex') }}">Accueil</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ action('Profil\AdsController@index') }}">Annonces</a>
        </li>
        <li class="breadcrumb-item active">Editer</li>
    </ol>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ action('Profil\AdsController@update', $ad->id) }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
                            <label for="currency">Monnaie</label>
                            <input type="text" class="form-control" list="currency" autocomplete="on" name="currency" value="{{ json_decode($ad->data)->currency ?? '' }}">
                            <datalist id="currency">
                                @foreach($currencies as $currency)
                                    <option value="{{ $currency }}">{{ $currency }}</option>
                                @endforeach
                            </datalist>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="type">Type</label> <br>
                            <label class="radio-inline">
                                <input type="radio" name="type" value="offer" required {{ $ad->type == 'offer' ? 'checked' : '' }}> Offre
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="type" value="request" {{ $ad->type == 'request' ? 'checked' : '' }}> Demande
                            </label>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="title">Titre</label>
                            <input type="text" class="form-control" name="title" value="{{ $ad->title ?? '' }}" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="message">Message &nbsp; <small>max 300 charactères</small></label>
                            <textarea name="message" rows="4" class="form-control" maxlength="300" required>{{ $ad->message ?? '' }}</textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="price">Prix</label>
                            <input type="text" class="form-control" name="price" value="{{ $ad->price ?? '' }}" required pattern="[+-]?[0-9]{1,10}">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="location">Ville ou code postal</label>
                            <input type="text" class="form-control" name="location" value="{{ $ad->location ?? '' }}" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Mettre à jour</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection