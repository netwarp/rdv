@extends('admin._layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="{{ action('Admin\AdminController@getIndex') }}">Home</a></li>
                <li><a href="{{ action('Admin\CommentsController@index') }}">Comments</a></li>
                <li class="active">Edit</li>
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
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{ action('Admin\CommentsController@update', $comment->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            Name: {{ $comment->name }}
                        </div>
                        <div class="form-group">
                            Email: {{ $comment->email }}
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="validated">
                                <option value="#">Validated ?</option>
                                <option value="0">No</option>
                                <option value="1" {{ $comment->validated ? 'selected' : '' }}>Yes</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="content" class="form-control" rows="4">{{ $comment->content }}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection