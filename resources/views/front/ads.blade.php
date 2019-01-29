@extends('front._layout')

@section('content')
    <div class="container">
        <div class="row" style="min-height: 62vh;">
            <div class="col-md-9">
                <div class="panel panel-default" style="margin: 3rem 0 0 0;">
                    <div class="panel-heading">
                        <h1>{{ $title ?? '' }}</h1>
                    </div>
                </div>
                <ul class="list-group">
                    {{--
                    @forelse($ads as $ad)
                        <li class="list-group-item" data-price="{{ json_decode($ad->data, true)['price'] }}" data-location="{{ json_decode($ad->data, true)['location'] }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="h4"><a href="{{ route('front.getAd', ['id' => json_decode($ad->data)->public_id, 'slug' => str_slug(json_decode($ad->data)->title)]) }}">{{ json_decode($ad->data)->title }}</a></h2>
                                    <h3 class="h6">{{ json_decode($ad->data)->name }}</h3>
                                    <p>
                                        {{ json_decode($ad->data)->message }}
                                    </p>
                                    <div>
                                        {{ $ad->created_at->format('d M Y') }}
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="h2">
                                        {{ json_decode($ad->data)->location }}
                                    </div>
                                    <div>
                                        {{ json_decode($ad->data)->price }} €
                                    </div>
                                </div>
                            </div>
                        </li>
                    @empty
                        <li>
                            Pas d'annonce
                        </li>
                    @endforelse
                    --}}
                </ul>
            </div>
            <div class="col-md-3">
                {{--
                <noscript>
                    <div class="alert alert-info">
                        Les filtres de recherches sont disponible uniquement avec Javascript.
                    </div>
                </noscript>
                <h2 class="h4">Filtres de recherche</h2>
                <h3 class="h4">Region</h3>
                <select class="form-control">
                    <option value="#">Choississez une région</option>
                    <option value="ile-de-france">Ile de France</option>
                </select>
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
                --}}
            </div>
        </div>
    </div>
@endsection

@section('js')
    @if (session('success'))
        <script>
            swal('Merci', 'Votre annonce a bien été crée', "success")
        </script>
    @endif
@endsection
