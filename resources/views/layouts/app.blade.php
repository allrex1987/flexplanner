<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ elixir('css/all.css') }}" rel="stylesheet">
    <link href="{{ elixir ('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar-default">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> -->

                </div>

                <div class="nav row">

                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!--{{ config('app.name', 'Laravel') }} -->
                    </a>

                    <div class="navbar">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <a {{ (Request::is('login') ? 'class=active' : '') }} href="{{ url('/login') }}">Logga in</a>
                            <a {{ (Request::is('register') ? 'class=active' : '') }} href="{{ url('/register') }}">Skaffa konto</a>
                        @else
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle">
                                    <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                                    {{ Auth::user()->name }}
                                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>

                                <div class="dropdown-menu">
                                    <a href="{{ url('profile/edit') }}">
												<i class="fa fa-pencil" aria-hidden="true"></i>
                                                Redigera profil
                                    </a>
                                    <a class="btn warning" href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                 <i class="fa fa-sign-out" aria-hidden="true"></i>
                                                 Logga ut
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/vendor.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
