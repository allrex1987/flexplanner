<!-- Authentication Links -->
@if (!Auth::guest())
 <nav class="navbar-team">
    <div class="container">
        <div class="navbar">
            <div class="dropdown">
                <a href="#" class="dropdown-toggle">
                    <i class="fa fa-retweet" aria-hidden="true"></i>
                    Ändra team
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>

                <div class="dropdown-menu">
                    <a href="{{ url('profile') }}">
                        <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                        Tinypickle
                    </a>
                    <a href="{{ url('teams') }}">
                        <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                        Everyones Team
                    </a>
                     <a href="{{ url('teams') }}">
                        <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                        Everyones Team a very very long team
                    </a>
                </div>
            </div>

             <div class="dropdown">
                <div>
                <a href="#" class="dropdown-toggle">
                    <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                    Stena Line Inhouse
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                </a>

                <div class="dropdown-menu">
                    <a href="{{ url('profile') }}">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                        Hantera medlemmar
                    </a>


                    <a href="{{ url('teams') }}">
                        <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                        Gå ur
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
@endif