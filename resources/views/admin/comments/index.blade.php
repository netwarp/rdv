@extends('admin._layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="{{ action('Admin\AdminController@getIndex') }}">Home</a></li>
                <li class="active">Comments</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="well">

                <form action="#" method="get" class="pull-right">
                    <input type="text" class="form-control" placeholder="search">
                </form>
                <div class="clearfix"></div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Comments</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Content</th>
                            <th>Post</th>
                            <th>created_at</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{ $comment->id }}</td>
                                <td>{{ $comment->content }}</td>
                                <td><a href="{{ action('Admin\PostsController@edit', $comment->post_id) }}">{{ $comment->post_id }}</a></td>
                                <td>{{ $comment->created_at }}</td>
                                <td>
                                    <a href="{{ action('Admin\CommentsController@edit', $comment->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ action('Admin\CommentsController@destroy', $comment->id) }}" style="display: inline;">
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