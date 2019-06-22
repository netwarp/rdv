@extends('front._layout')

@section('content')
    <div class="container" style="margin-top: 3rem;">
        <div class="row" style="min-height: 62vh;">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>{{ $title ?? '' }}</h1>
                    </div>
                </div>
                <ul class="list-group">

                    @forelse($ads as $ad)
                        <li class="list-group-item" data-price="{{ $ad->price }}" data-location="{{ $ad->location ?? '' }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="h3"><a href="{{ action('Front\FrontController@getAd', ['id' => $ad->id, 'slug' => str_slug($ad->title) ]) }}">{{ $ad->title }}</a></h2>
                                    <h3 class="h5">{{ $ad->name }}</h3>
                                    <p>
                                        {{ $ad->message ?? '' }}
                                    </p>
                                    <div>
                                        {{ $ad->created_at ?? '' }}
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="h2">
                                        {{ $ad->location ?? '' }}
                                    </div>
                                    <div class="h3">
                                        {{ $ad->price ?? '' }} €
                                    </div>
                                </div>
                            </div>
                        </li>
                    @empty
                        <li>
                            Pas d'annonce
                        </li>
                    @endforelse

                </ul>
            </div>
            <div class="col-md-3">
                <noscript>
                    <div class="alert alert-info">
                        Les filtres de recherches sont disponible uniquement avec Javascript.
                    </div>
                </noscript>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2 class="h4">Filtres de recherche</h2>

                        <div>
                            <h3 class="h4">Prix</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="min">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="max">
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3 class="h4">Monnaie</h3>
                            <input list="currencies" class="form-control">

                            <datalist id="currencies">
                                <option value="btn">
                                <option value="ltn">
                                <option value="bnc">
                                <option value="Opera">
                                <option value="Safari">
                            </datalist>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
