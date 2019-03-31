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
                            <td>{{ json_decode($ad->data)->currency }}</td>
                            <td>{{ json_decode($ad->data)->status }}</td>
                            <td>{{ json_decode($ad->data)->type }}</td>
                            <td>{{ json_decode($ad->data)->title }}</td>
                            <td>{{ json_decode($ad->data)->price }}</td>
                            <td>{{ json_decode($ad->data)->location }}</td>
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