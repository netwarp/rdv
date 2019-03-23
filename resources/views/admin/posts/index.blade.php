@extends('admin._layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="{{ action('Admin\AdminController@getIndex') }}">Home</a></li>
                <li class="active">Posts</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="well">
                <a href="{{ action('Admin\PostsController@create') }}" class="btn btn-primary">Create</a>

                <form action="#" method="get" class="pull-right">
                    <input type="text" class="form-control" placeholder="search">
                </form>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Preview</th>
                            <th>created_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ utf8_decode($post->preview) }}</td>
                                    <td>{{ $post->created_at ?? 'zz' }}</td>
                                    <td>
                                        <a href="{{ action('Admin\PostsController@edit', $post->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ action('Admin\PostsController@destroy', $post->id) }}" method="post" style="display: inline;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection