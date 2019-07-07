@extends('front._layout')

@section('content')
    <div class="container" style="margin-top: 3rem;">
        <div class="row" style="min-height: 62vh;">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="h3">{{ $user->name ?? '' }}</h1>
                    </div>
                    {{-- TODO class margin botton --}}
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Date d'inscription:</td>
                                    <td>{{ $user->created_at->format('d/m/Y') ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Nombre d'annonces</td>
                                    <td>{{ $user->ads->count() ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Avis positifs</td>
                                    <td>{{ '10' }}</td>
                                </tr>
                                <tr>
                                    <td>Avis négatifs</td>
                                    <td>{{ '1' }}</td>
                                </tr>
                                <tr>
                                    <td>Dernière visite</td>
                                    <td>{{ '1' }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <h3>Derniers commentaires</h3>
                        @for($i = 0; $i < 10; $i++)
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div>
                                        <a href="#">BOB</a>
                                        <small> 01/01/10</small>
                                    </div>
                                    <div>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi ex impedit in odit officia optio pariatur quaerat qui? Aliquid architecto earum enim et inventore libero nisi quis ratione reiciendis sed.
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection