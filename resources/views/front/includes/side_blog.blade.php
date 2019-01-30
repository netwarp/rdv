<div class="col-md-4">
    <div class="well">
        <h4>Recherche</h4>
        <form action="/blog/recherche" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="word">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>
    </div>

    <div class="well">
        <h4>Categories</h4>
        <div class="row">
            <div class="col-lg-6">
                @php
                    $categories = ['Crypto-monnaie', 'Blockchain', 'TOR', 'VPN']
                @endphp
                <ul class="list-unstyled">
                    @foreach($categories as $category)
                        <li><a href="/blog/tag/{{ strtolower($category) }}">{{ $category }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6">
                @php
                    $categories = ['Politique', 'Censure', 'Surveillance', 'Développement']
                @endphp
                <ul class="list-unstyled">
                    @foreach($categories as $category)
                        <li><a href="/blog/tag/{{ strtolower($category) }}">{{ $category }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="well">
        <h4>On est ou là ?</h4>
        <p>Sur ce blog on parle de crypto-monnaies, de blockchain, de trading, de développement/administration système et plein d'autres trucs.
            <br>
            Plus d'infos sur <a href="/a-propos">cette page</a>
        </p>
    </div>

    <div class="well">
        <h4>Derniers articles</h4>
        @php
            $posts = DB::table('posts')->orderBy('id', 'desc')->limit(5)->get();
        @endphp

        <ul class="list-unstyled">
            @foreach($posts as $post)
                <li><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    </div>

    <div class="well">
        <h4>Abonnez vous à la newsletter <br> <small>on spam pas promis</small></h4>
        <form action="/subscribe" method="POST">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Envoie</button>
                </span>
            </div>
        </form>
    </div>

    <div class="well">
        <h4>Articles au hasard</h4>
        @php
            $posts = DB::table('posts')->inRandomOrder()->limit(5)->get();
        @endphp

        <ul class="list-unstyled">
            @foreach($posts as $post)
                <li><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    </div>
</div>