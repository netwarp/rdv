@extends('profil._layout')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ action('Profil\ProfilController@getIndex') }}">Accueil</a>
        </li>
        <li class="breadcrumb-item active">Notation</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            @if (count($rates))
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Utilisateur</th>
                        <th>Note</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rates as $rate)
                        <tr>
                            <td>{{ $rate->rater_user_id }}</td>
                            <td>{{ $rate->score }}</td>
                            <td>{{ $rate->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                Pas de notations disponible.
            @endif

        </div>
    </div>
@endsection