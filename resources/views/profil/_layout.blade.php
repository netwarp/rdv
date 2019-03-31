<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        :root {
            --main-bg-color: #f6f8fa;
        }

        html {
            position: relative;
            min-height: 100%;
        }
        body {
            overflow-x: hidden;
        }
        body.sticky-footer {
            margin-bottom: 56px;
        }
        body.sticky-footer .content-wrapper {
            min-height: calc(100vh - 56px - 56px);
        }
        body.fixed-nav {
            padding-top: 56px;
        }
        .content-wrapper {
            min-height: calc(100vh - 56px);
            padding-top: 1rem;
        }
        .scroll-to-top {
            position: fixed;
            right: 15px;
            bottom: 3px;
            display: none;
            width: 50px;
            height: 50px;
            text-align: center;
            color: white;
            background: rgba(52, 58, 64, 0.5);
            line-height: 45px;
        }
        .scroll-to-top:focus, .scroll-to-top:hover {
            color: white;
        }
        .scroll-to-top:hover {
            background: #343a40;
        }
        .scroll-to-top i {
            font-weight: 800;
        }
        .smaller {
            font-size: 0.7rem;
        }
        .o-hidden {
            overflow: hidden !important;
        }
        .z-0 {
            z-index: 0;
        }
        .z-1 {
            z-index: 1;
        }
        #mainNav .navbar-collapse {
            overflow: auto;
            max-height: 75vh;
        }
        #mainNav .navbar-collapse .navbar-nav .nav-item .nav-link {
            cursor: pointer;
        }
        #mainNav .navbar-collapse .navbar-sidenav .nav-link-collapse:after {
            float: right;
            content: '\f107';
            font-family: 'FontAwesome';
        }
        #mainNav .navbar-collapse .navbar-sidenav .nav-link-collapse.collapsed:after {
            content: '\f105';
        }
        #mainNav .navbar-collapse .navbar-sidenav .sidenav-second-level,
        #mainNav .navbar-collapse .navbar-sidenav .sidenav-third-level {
            padding-left: 0;
        }
        #mainNav .navbar-collapse .navbar-sidenav .sidenav-second-level > li > a,
        #mainNav .navbar-collapse .navbar-sidenav .sidenav-third-level > li > a {
            display: block;
            padding: 0.5em 0;
        }
        #mainNav .navbar-collapse .navbar-sidenav .sidenav-second-level > li > a:focus, #mainNav .navbar-collapse .navbar-sidenav .sidenav-second-level > li > a:hover,
        #mainNav .navbar-collapse .navbar-sidenav .sidenav-third-level > li > a:focus,
        #mainNav .navbar-collapse .navbar-sidenav .sidenav-third-level > li > a:hover {
            text-decoration: none;
        }
        #mainNav .navbar-collapse .navbar-sidenav .sidenav-second-level > li > a {
            padding-left: 1em;
        }
        #mainNav .navbar-collapse .navbar-sidenav .sidenav-third-level > li > a {
            padding-left: 2em;
        }
        #mainNav .navbar-collapse .sidenav-toggler {
            display: none;
        }
        #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link {
            position: relative;
            min-width: 45px;
        }
        #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
            float: right;
            width: auto;
            content: '\f105';
            border: none;
            font-family: 'FontAwesome';
        }
        #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link .indicator {
            position: absolute;
            top: 5px;
            left: 21px;
            font-size: 10px;
        }
        #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown.show > .nav-link:after {
            content: '\f107';
        }
        #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown .dropdown-menu > .dropdown-item > .dropdown-message {
            overflow: hidden;
            max-width: none;
            text-overflow: ellipsis;
        }
        @media (min-width: 992px) {
            #mainNav .navbar-brand {
                width: 250px;
            }
            #mainNav .navbar-collapse {
                overflow: visible;
                max-height: none;
            }
            #mainNav .navbar-collapse .navbar-sidenav {
                position: absolute;
                top: 0;
                left: 0;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                margin-top: 56px;
            }
            #mainNav .navbar-collapse .navbar-sidenav > .nav-item {
                width: 250px;
                padding: 0;
            }
            #mainNav .navbar-collapse .navbar-sidenav > .nav-item > .nav-link {
                padding: 1em;
            }
            #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level,
            #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level {
                padding-left: 0;
                list-style: none;
            }
            #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li,
            #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li {
                width: 250px;
            }
            #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a,
            #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a {
                padding: 1em;
            }
            #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a {
                padding-left: 2.75em;
            }
            #mainNav .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a {
                padding-left: 3.75em;
            }
            #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link {
                min-width: 0;
            }
            #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
                width: 24px;
                text-align: center;
            }
            #mainNav .navbar-collapse .navbar-nav > .nav-item.dropdown .dropdown-menu > .dropdown-item > .dropdown-message {
                max-width: 300px;
            }
        }
        #mainNav.fixed-top .sidenav-toggler {
            display: none;
        }
        @media (min-width: 992px) {
            #mainNav.fixed-top .navbar-sidenav {
                height: calc(100vh - 112px);
            }
            #mainNav.fixed-top .sidenav-toggler {
                position: absolute;
                top: 0;
                left: 0;
                display: flex;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                margin-top: calc(100vh - 56px);
            }
            #mainNav.fixed-top .sidenav-toggler > .nav-item {
                width: 250px;
                padding: 0;
            }
            #mainNav.fixed-top .sidenav-toggler > .nav-item > .nav-link {
                padding: 1em;
            }
        }
        #mainNav.fixed-top.navbar-dark .sidenav-toggler {
            background-color: #212529;
        }
        #mainNav.fixed-top.navbar-dark .sidenav-toggler a i {
            color: #adb5bd;
        }
        #mainNav.fixed-top.navbar-light .sidenav-toggler {
            background-color: #dee2e6;
        }
        #mainNav.fixed-top.navbar-light .sidenav-toggler a i {
            color: rgba(0, 0, 0, 0.5);
        }
        body.sidenav-toggled #mainNav.fixed-top .sidenav-toggler {
            overflow-x: hidden;
            width: 55px;
        }
        body.sidenav-toggled #mainNav.fixed-top .sidenav-toggler .nav-item,
        body.sidenav-toggled #mainNav.fixed-top .sidenav-toggler .nav-link {
            width: 55px !important;
        }
        body.sidenav-toggled #mainNav.fixed-top #sidenavToggler i {
            -webkit-transform: scaleX(-1);
            -moz-transform: scaleX(-1);
            -o-transform: scaleX(-1);
            transform: scaleX(-1);
            filter: FlipH;
            -ms-filter: 'FlipH';
        }
        #mainNav.static-top .sidenav-toggler {
            display: none;
        }
        @media (min-width: 992px) {
            #mainNav.static-top .sidenav-toggler {
                display: flex;
            }
        }
        body.sidenav-toggled #mainNav.static-top #sidenavToggler i {
            -webkit-transform: scaleX(-1);
            -moz-transform: scaleX(-1);
            -o-transform: scaleX(-1);
            transform: scaleX(-1);
            filter: FlipH;
            -ms-filter: 'FlipH';
        }
        .content-wrapper {
            overflow-x: hidden;
            background: var(--main-bg-color);
        }
        @media (min-width: 992px) {
            .content-wrapper {
                margin-left: 250px;
            }
        }
        #sidenavToggler i {
            font-weight: 800;
        }
        .navbar-sidenav-tooltip.show {
            display: none;
        }
        @media (min-width: 992px) {
            body.sidenav-toggled .content-wrapper {
                margin-left: 55px;
            }
        }
        body.sidenav-toggled .navbar-sidenav {
            width: 55px;
        }
        body.sidenav-toggled .navbar-sidenav .nav-link-text {
            display: none;
        }
        body.sidenav-toggled .navbar-sidenav .nav-item,
        body.sidenav-toggled .navbar-sidenav .nav-link {
            width: 55px !important;
        }
        body.sidenav-toggled .navbar-sidenav .nav-item:after,
        body.sidenav-toggled .navbar-sidenav .nav-link:after {
            display: none;
        }
        body.sidenav-toggled .navbar-sidenav .nav-item {
            white-space: nowrap;
        }
        body.sidenav-toggled .navbar-sidenav-tooltip.show {
            display: flex;
        }
        #mainNav.navbar-dark .navbar-collapse .navbar-sidenav .nav-link-collapse:after {
            color: #868e96;
        }
        #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item > .nav-link {
            color: #868e96;
        }
        #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item > .nav-link:hover {
            color: #adb5bd;
        }
        #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a,
        #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a {
            color: #868e96;
        }
        #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a:focus, #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a:hover,
        #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a:focus,
        #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a:hover {
            color: #adb5bd;
        }
        #mainNav.navbar-dark .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
            color: #adb5bd;
        }
        @media (min-width: 992px) {
            #mainNav.navbar-dark .navbar-collapse .navbar-sidenav {
                background: #343a40;
            }
            #mainNav.navbar-dark .navbar-collapse .navbar-sidenav li.active a {
                color: white !important;
                background-color: #495057;
            }
            #mainNav.navbar-dark .navbar-collapse .navbar-sidenav li.active a:focus, #mainNav.navbar-dark .navbar-collapse .navbar-sidenav li.active a:hover {
                color: white;
            }
            #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level,
            #mainNav.navbar-dark .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level {
                background: #343a40;
            }
        }
        #mainNav.navbar-light .navbar-collapse .navbar-sidenav .nav-link-collapse:after {
            color: rgba(0, 0, 0, 0.5);
        }
        #mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item > .nav-link {
            color: rgba(0, 0, 0, 0.5);
        }
        #mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item > .nav-link:hover {
            color: rgba(0, 0, 0, 0.7);
        }
        #mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a,
        #mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a {
            color: rgba(0, 0, 0, 0.5);
        }
        #mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a:focus, #mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level > li > a:hover,
        #mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a:focus,
        #mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level > li > a:hover {
            color: rgba(0, 0, 0, 0.7);
        }
        #mainNav.navbar-light .navbar-collapse .navbar-nav > .nav-item.dropdown > .nav-link:after {
            color: rgba(0, 0, 0, 0.5);
        }
        @media (min-width: 992px) {
            #mainNav.navbar-light .navbar-collapse .navbar-sidenav {
                background: #f8f9fa;
            }
            #mainNav.navbar-light .navbar-collapse .navbar-sidenav li.active a {
                color: #000 !important;
                background-color: #e9ecef;
            }
            #mainNav.navbar-light .navbar-collapse .navbar-sidenav li.active a:focus, #mainNav.navbar-light .navbar-collapse .navbar-sidenav li.active a:hover {
                color: #000;
            }
            #mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-second-level,
            #mainNav.navbar-light .navbar-collapse .navbar-sidenav > .nav-item .sidenav-third-level {
                background: #f8f9fa;
            }
        }
        .card-body-icon {
            position: absolute;
            z-index: 0;
            top: -25px;
            right: -25px;
            font-size: 5rem;
            -webkit-transform: rotate(15deg);
            -ms-transform: rotate(15deg);
            transform: rotate(15deg);
        }
        @media (min-width: 576px) {
            .card-columns {
                column-count: 1;
            }
        }
        @media (min-width: 768px) {
            .card-columns {
                column-count: 2;
            }
        }
        @media (min-width: 1200px) {
            .card-columns {
                column-count: 2;
            }
        }
        .card-login {
            max-width: 25rem;
        }
        .card-register {
            max-width: 40rem;
        }
        footer.sticky-footer {
            position: absolute;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 56px;
            background-color: #e9ecef;
            line-height: 55px;
        }
        @media (min-width: 992px) {
            footer.sticky-footer {
                width: calc(100% - 250px);
            }
        }
        @media (min-width: 992px) {
            body.sidenav-toggled footer.sticky-footer {
                width: calc(100% - 55px);
            }
        }
    </style>
    <title>Document</title>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">{{ Auth::user()->name }}</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Accueil">
                <a class="nav-link" href="{{ action('Profil\ProfilController@getIndex') }}">
                    <i class="fa fa-fw fa-home"></i>
                    <span class="nav-link-text">Accueil</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Annonces">
                <a class="nav-link" href="{{ action('Profil\AdsController@index') }}">
                    <i class="fa fa-fw fa-bullhorn"></i>
                    <span class="nav-link-text">Annonces</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Notation">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-star"></i>
                    <span class="nav-link-text">Notation</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Paramètres">
                <a class="nav-link" href="{{ ''  }}">
                    <i class="fa fa-fw fa-gear"></i>
                    <span class="nav-link-text">Paramètres</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/logout">
                    <i class="fa fa-fw fa-sign-out"></i>Déconnexion
                </a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        @yield('content')
    </div>
</div>
<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">
            <small>{{ env('APP_NAME') }} {{ date('Y') }}</small>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    !function(e){"use strict";e('.navbar-sidenav [data-toggle="tooltip"]').tooltip({template:'<div class="tooltip navbar-sidenav-tooltip" role="tooltip" style="pointer-events: none;"><div class="arrow"></div><div class="tooltip-inner"></div></div>'}),e("#sidenavToggler").click(function(o){o.preventDefault(),e("body").toggleClass("sidenav-toggled"),e(".navbar-sidenav .nav-link-collapse").addClass("collapsed"),e(".navbar-sidenav .sidenav-second-level, .navbar-sidenav .sidenav-third-level").removeClass("show")}),e(".navbar-sidenav .nav-link-collapse").click(function(o){o.preventDefault(),e("body").removeClass("sidenav-toggled")}),e("body.fixed-nav .navbar-sidenav, body.fixed-nav .sidenav-toggler, body.fixed-nav .navbar-collapse").on("mousewheel DOMMouseScroll",function(e){var o=e.originalEvent,t=o.wheelDelta||-o.detail;this.scrollTop+=30*(t<0?1:-1),e.preventDefault()}),e(document).scroll(function(){e(this).scrollTop()>100?e(".scroll-to-top").fadeIn():e(".scroll-to-top").fadeOut()}),e('[data-toggle="tooltip"]').tooltip(),e(document).on("click","a.scroll-to-top",function(o){var t=e(this);e("html, body").stop().animate({scrollTop:e(t.attr("href")).offset().top},1e3,"easeInOutExpo"),o.preventDefault()})}(jQuery);
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('success'))
    <script>
        swal("Succès", "{{ session('success') }}", "success");
    </script>
@endif
</body>
</html>