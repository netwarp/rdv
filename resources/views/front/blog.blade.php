@extends('front._layout')

@section('content')
    <div class="container">
        <h1 class="h3">Blog</h1>
        <div class="row">
            {{--
            <div class="col-md-8">
                @forelse($posts as $post)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2 class="h3"><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
                            <div style="margin-bottom: 20px;">
                                <small class="glyphicon glyphicon-calendar"></small> {{ $post->created_at->format('d F Y') }}
                                <span class="pull-right"><small class="glyphicon glyphicon-comment"></small> {{ $post->nb_comments }} commentaire{{ $post->nb_comments >= 2 ? 's' : '' }}</span>
                            </div>
                            {{--
                            <a href="/article/{{ $article->id }}/{{ $article->slug }}"><img class="img-responsive" src="{{ $article->image }}" alt=""></a>

                            <p>
                                {!! utf8_decode(nl2br($post->preview)) !!}
                            </p>
                            <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Lire plus <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-warning">
                        Pas d'article
                    </div>
                @endforelse
                {{ $posts->links() }}
            </div>
            @include('front.template.side_blog')
                    --}}
        </div>
    </div>
@endsection
