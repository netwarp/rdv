@extends('admin._layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li class="active">Accueil</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Messages</div>

                <div class="panel-body">
                    @foreach($messages as $message)
                        <div>
                            <form action="admin/messages/{{ $message->id }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger btn-xs pull-right">Delete</button>
                            </form>
                        </div>
                        <div>
                            <b>Nom</b>: {{ json_decode($message->data, true)['name'] }}
                        </div>
                        <div>
                            <b>Email</b>: {{ json_decode($message->data, true)['email'] }}
                        </div>
                        <div>
                            <b>Message</b>: {{ json_decode($message->data, true)['message'] }}
                        </div>
                        <div>
                            <b>Date</b>: {{ $message->created_at }}
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ads
                </div>
                <div class="panel-body">
                    <h3>{{ $ads }}</h3>
                </div>
                <div class="panel-footer">
                    <a href="#">Plus</a>
                </div>
            </div>
        </div>
    </div>
@endsection