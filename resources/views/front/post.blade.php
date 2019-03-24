@extends('front._layout')

@section('content')
    <div class="container">
        <div class="clearfix" style="margin-bottom: 30px;"></div>
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <article>
                            <h1 class="h3">{{ $post->title }}</h1>
                            <div>
                                 {!! Markdown::convertToHtml($post->content) !!}
                            </div>
                            <hr>
                            <div>
                                {{ date('d F Y', strtotime($post->created_at)) }}
                            </div>
                        </article>
                    </div>
                </div>
                <div class="panel panel-default" id="form-commment">
                    <div class="panel-heading"><span class="h4">Poster un commentaire</span></div>
                    <div class="panel-body">
                        @if (session('success'))
                            <div class="col-md-12">
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            </div>
                        @else
                            <div class="col-md-12">
                                <div class="alert alert-info">
                                    Nous rappelons à nos lecteurs que l'orthographe est de mise et qu'ils sont les seuls responsables de leurs propos. <br>
                                    La modération.
                                </div>
                            </div>
                        @endif
                        <form action="/blog/post/{{ $post->id }}" method="POST">
                            {{ csrf_field() }}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nom">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="content">Contenu</label>
                                <textarea name="content" class="form-control" rows="8"></textarea>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <button type="submit" class="btn btn-success pull-right">Envoie</button>
                            </div>
                        </form>
                    </div>
                </div>
                @foreach($comments as $comment)
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-md-9">
                                {{ $comment->name }}
                            </div>
                            <div class="col-md-3">
                                {{ $comment->created_at->format('d M Y') }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                {{ $comment->content }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @include('front.includes.side_blog')
        </div>
    </div>
@endsection