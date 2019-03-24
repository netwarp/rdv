@extends('admin._layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="{{ action('Admin\AdminController@getIndex') }}">Home</a></li>
                <li><a href="{{ action('Admin\MessagesController@index') }}">Messages</a></li>
                <li class="active">Edit</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <div class="panel-body">
                    <dl>
                        <dt>Name</dt>
                        <dd>{{ json_decode($message->data)->name }}</dd>
                        <br>
                        <dt>Email</dt>
                        <dd>{{ json_decode($message->data)->email }}</dd>
                        <br>
                        <dt>IP</dt>
                        <dd>{{ json_decode($message->data)->ip }}</dd>
                        <br>
                        <dt>Message</dt>
                        <dd>{{ json_decode($message->data)->message }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection