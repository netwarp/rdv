@extends('front._layout')

@section('content')
    <div class="container">
        <div class="row" style="min-height: 62vh;">
            <div class="col-md-9">
                <div class="panel panel-default" style="margin: 3rem 0 0 0;">
                    <div class="panel-heading">
                        <h1 class="h4">API</h1>
                    </div>
                    <div class="panel-body">
                        <h2 class="h5">Demandes</h2>
                        <pre>https://{{ env('APP_NAME') }}/api/requests</pre>
                        <br>
                        <h2 class="h5">Offres</h2>
                        <pre>https://{{ env('APP_NAME') }}/api/offers</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection