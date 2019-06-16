<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootflat/2.0.4/css/bootflat.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <title>Admin</title>
        <style>
            body {
                background: #f1f2f6;
            }

            #sidebar {
                background-color: #fff;
                height: 100vh;
                padding-left: 0;
                padding-right: 0;
            }

            #sidebar i {
                font-size: 2.6rem;
                margin-right: 2rem;
            }

            #top_nav {
                background: #2a2a2a;
                height: 50px;
                margin-bottom: 20px;

                display: flex;
                justify-content: flex-end;
            }

            #top_nav .item {
                color: #fff;
                display: flex;

            }

            #top_nav .item a {
                color: #fff;
                background: #2a2a2a;
                padding: 14px 20px 0 20px ;
                transition: 0.4s ease all;
            }

            #top_nav .item a:hover {
                background: #ED5565;
                transition: 0.4s ease all;
            }
        </style>
        @yield('css')
    </head>
    <body>
        <div class="container-fluid documents">
            <div class="row">
                <div class="col-md-2" id="sidebar">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="h3"><a href="#">Bienvenue</a></div>
                        </div>
                        <div class="list-group">
                            <a href="{{ action('Admin\UsersController@index') }}" class="list-group-item {{ str_contains(Route::currentRouteAction(), 'Users') ? 'active' : '' }}"><i class="fas fa-users"></i> Users</a>
                            <a href="{{ action('Admin\AdsController@index') }}" class="list-group-item {{ str_contains(Route::currentRouteAction(), 'Ads') ? 'active' : '' }}"><i class="fab fa-adversal"></i> Ads</a>
                            <a href="{{ action('Admin\PostsController@index') }}" class="list-group-item {{ str_contains(Route::currentRouteAction(), 'Posts') ? 'active' : '' }}"><i class="far fa-newspaper"></i> Posts</a>
                            <a href="{{ action('Admin\CommentsController@index') }}" class="list-group-item {{ str_contains(Route::currentRouteAction(), 'Comments') ? 'active' : '' }}"><i class="fas fa-comments"></i> Comments</a>
                            <a href="{{ action('Admin\MessagesController@index') }}" class="list-group-item {{ str_contains(Route::currentRouteAction(), 'Messages') ? 'active' : '' }}"><i class="fas fa-envelope-open"></i> Messages</a>
                            <a href="{{ action('Admin\SettingsController@index') }}" class="list-group-item"><i class="fas fa-cogs"></i> Settings</a>
                            {{--
                            --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="row" id="top_nav">
                        <div class="item">
                            <a href="#">Admin</a>
                        </div>
                        <div class="item">
                            <a href="#">Admin</a>
                        </div>
                        <div class="item">
                            <a href="#">Lorem ipsum doicing elit. Odio.</a>
                        </div>
                        <div class="item">
                            <a href="/logout">Logout</a>
                        </div>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
        @yield('js')
    </body>
</html>