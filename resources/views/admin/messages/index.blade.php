@extends('admin._layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="{{ action('Admin\AdminController@getIndex') }}">Home</a></li>
                <li class="active">Messages</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)
                            <tr>
                                <td><a href="{{ action('Admin\MessagesController@edit', $message->id) }}">{{ $message->id }}</a></td>
                                <td><a href="{{ action('Admin\MessagesController@edit', $message->id) }}">{{ json_decode($message->data)->name }}</a></td>
                                <td>{{ $message->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $messages->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection