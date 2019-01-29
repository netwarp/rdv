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
                            <th>prix en bitcoin</th>
                            <th>% 1H</th>
                            <th>% 24H</th>
                            <th>% 7 J</th>
                            <th>MAJ</th>
                            </thead>
                            <tbody>
                            {{--
                            @foreach($currencies as $currency)
                                <tr>
                                    <td>{{ $currency->id }}</td>
                                    <td>{{ $currency->symbol }}</td>
                                    <td>{{ $currency->price_usd }}</td>
                                    <td>{{ $currency->price_btc }}</td>
                                    <td class="{{ $currency->percent_change_1h > 0 ? 'arrow-up' : 'arrow-down' }}">{{ $currency->percent_change_1h }}</td>
                                    <td class="{{ $currency->percent_change_24h > 0 ? 'arrow-up' : 'arrow-down' }}">{{ $currency->percent_change_24h }} </td>
                                    <td class="{{ $currency->percent_change_7d > 0 ? 'arrow-up' : 'arrow-down' }}">{{ $currency->percent_change_7d }}</td>
                                    <td>{{ date('d-m-Y H:i:s', $currency->last_updated) }}</td>
                                </tr>
                            @endforeach
                            --}}
                            </tbody>
                        </table>
                        <hr>
                        Source: <a href="https://coinmarketcap.com">coinmarketcap.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
