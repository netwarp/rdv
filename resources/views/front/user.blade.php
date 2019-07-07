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
                        <hr>
                        <h3>Noter un vendeur</h3>
                        <form action="{{ action('Front\FrontController@postRate') }}" method="POST">
                            {{ csrf_field() }}
                            <div>
                                <input type="hidden" name="rater_id" value="{{ Auth::user()->id }}" readonly>
                                <input type="hidden" name="rated_id" value="{{ $user->id }}" readonly>
                            </div>
                            <div class="form-group rate-thumbs">
                                <i>Votre avis</i>
                                <i id="up" class="far fa-thumbs-up icon-rate"></i>
                                <i id="down" class="far fa-thumbs-down icon-rate"></i>
                                <small>(Cliquer sur l'une des deux icones)</small>
                            </div>
                            <div class="form-group">
                                <div id="rate-level">
                                </div>
                                <input type="hidden" name="level" id="level">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                            </div>
                        </form>

                        <h3>Dernières notes</h3>
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

@push('js')
    <script>
        const up = document.querySelector('#up');
        const down = document.querySelector('#down');
        const rate_level = document.querySelector('#rate-level');
        const level = document.querySelector('#level');

        up.addEventListener('click', () => {
            rate_level.innerHTML = 'Positif';
            level.value = 1;
        });
        down.addEventListener('click', () => {
            rate_level.innerHTML = 'Négatif';
            level.value = 0;
        });
    </script>
@endpush