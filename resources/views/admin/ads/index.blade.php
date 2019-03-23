@extends('admin._layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="{{ action('Admin\AdminController@getIndex') }}">Home</a></li>
                <li class="active">Ads</li>
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
                            <th>Title</th>
                            <th>Currency</th>
                            <th>Message</th>
                            <th>Price</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($ads as $ad)
                                <tr>
                                    <td>{{ $ad->id }}</td>
                                    <td>{{ $ad->data['title'] ?? '' }}</td>
                                    <td>{{ $ad->data['currency'] ?? '' }}</td>
                                    <td>{{ $ad->data['message'] ?? '' }}</td>
                                    <td>{{ $ad->data['price'] ?? '' }}</td>
                                    <td>{{ $ad->data['name'] ?? '' }}</td>
                                    <td>{{ $ad->data['email'] ?? '' }}</td>
                                    <td>
                                        <a href="{{ action('Admin\AdsController@edit', $ad->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ action('Admin\AdsController@destroy', $ad->id) }}" method="post" style="display: inline;">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $ads->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection