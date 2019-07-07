@extends('profil._layout')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ action('Profil\ProfilController@getIndex') }}">Accueil</a>
        </li>
        <li class="breadcrumb-item active">Annonces</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            @if (count($ads))
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Monnaie</th>
                        <th>Status</th>
                        <th>Type</th>
                        <th>Titre</th>
                        <th>Prix</th>
                        <th>Lieu</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ads as $ad)
                        <tr>
                            <td>{{ $ad->currency }}</td>
                            <td>{{ $ad->status }}</td>
                            <td>{{ $ad->type }}</td>
                            <td>{{ $ad->title }}</td>
                            <td>{{ $ad->price }}</td>
                            <td>{{ $ad->location }}</td>
                            <td>{{ $ad->created_at->format('m/d/Y') }}</td>
                            <td>
                                <a href="{{ action('Profil\AdsController@edit', $ad->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Éditer</a>
                                <form action="{{ action('Profil\AdsController@destroy', $ad->id) }}" method="POST" style="display: inline;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                Pas d'annonce disponible.
            @endif

        </div>
    </div>
@endsection