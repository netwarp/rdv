@extends('admin._layout')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplemde/1.11.2/simplemde.min.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="{{ action('Admin\AdminController@getIndex') }}">Home</a></li>
                <li><a href="{{ action('Admin\PostsController@index') }}">Posts</a></li>
                <li class="active">{{ $link }}</li>
            </ol>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                @if(str_contains(Route::currentRouteAction(), 'edit'))
                                    @method('PUT')
                                @endif

                                <div class="form-group">
                                    <label for="title">Titre</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{ $post->title ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="title">Image</label>
                                    @if(isset($post->image))
                                        <pre>
                                            <img src="/{{ $post->image }}" alt="{{ $post->image }}">
                                        </pre>
                                    @endif
                                    <input type="file" name="image" id="file">
                                </div>


                                <div class="form-group">
                                    <label for="tags">Tags</label>
                                    <input type="text" class="form-control" name="tags" id="tags" value="{{ $post->tags ?? '' }}">
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="draft" {{ isset($post) && $post->status == 'draft' ? 'selected' : '' }}>draff</option>
                                        <option value="published" {{ isset($post) && $post->status == 'published' ? 'selected' : '' }}>published</option>
                                        <option value="unpublished" {{ isset($post) && $post->status == 'unpublished' ? 'selected' : '' }}>unpublished</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="created_at">Created at</label>
                                            <input type="date" class="form-control" name="created_at" id="created_at" value="{{ $post->created_at ?? '' }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="created_at">Upldated at</label>
                                            <input type="date" class="form-control" name="updated_at" id="updated_at" value="{{ $post->updated_at ?? '' }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea name="content" class="form-control" id="content" rows="15">{{ $post->content ?? '' }}</textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplemde/1.11.2/simplemde.min.js"></script>
    <script>
        var simplemde = new SimpleMDE();
    </script>
@endsection