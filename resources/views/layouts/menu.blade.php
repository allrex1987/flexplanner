<!-- Authentication Links -->
@if (!Auth::guest())
 <nav class="navbar-team">
    <div class="container">

        <div class="nav">

            <ul class="navbar navbar-right">

                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                        Stena Line Inhouse
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ url('profile') }}">
                                <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                                Hantera medlemmar
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('teams') }}">
                                <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                                Gå ur
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-retweet" aria-hidden="true"></i>
                        Ändra team
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ url('profile') }}">
                                <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                                Tinypickle
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('teams') }}">
                                <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                                Everyones Team
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endif