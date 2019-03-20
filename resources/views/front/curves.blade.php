@extends('front._layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h3">Cours</h1>
                <i class="md-icon dp48"></i>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-striped table-hover table-responsive">
                            <thead>
                                <th>Nom</th>
                                <th>Symbole</th>
                                <th>prix en dollar</th>
                                <th>% 24H</th>
                                <th>MAJ</th>
                            </thead>
                            <tbody>
                                @foreach($currencies as $currency)
                                    <tr>
                                        {{dd($currency)}}
                                        <td>{{ $currency->baseId }}</td>
                                        <td>{{ $currency->baseSymbol }}</td>
                                        <td>{{ $currency->priceUsd }}</td>
                                        <td class="{{ $currency->volumeUsd24Hr > 0 ? 'arrow-up' : 'arrow-down' }}">{{ $currency->volumeUsd24Hr }} </td>
                                        <td>{{ $currency->updated }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <div>
                            Dernière MAJ: {{ $timestamp}}
                        </div>

                        Source: <a href="https://coinmarketcap.com">coinmarketcap.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
