<!-- Authentication Links -->
@if (!Auth::guest())
 <nav class="navbar-team">
    <div class="container">
        <div class="navbar">
            <div class="dropdown">
                <a href="#" class="dropdown-toggle">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    Team
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>

                <div class="dropdown-menu">
                    <a href="#">
                        <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                        Tinypickle
                    </a>
                    <a href="#">
                        <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                        Everyones Team
                    </a>
                     <a href="#">
                        <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                        Everyones Team a very very long team
                    </a>
                    <a class="btn accept text-center" href="#">
                        <i class="fa fa-plus fa-lg" aria-hidden="true"></i>
                        Skapa nytt team
                    </a>
                </div>
            </div>

            <div class="dropdown">

            <a href="#" class="dropdown-toggle">
                <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i>
                Stena Line Inhouse
                <i class="fa fa-caret-down" aria-hidden="true"></i>
            </a>

            <div class="dropdown-menu">
                <a href="#">
                    <i class="fa fa-list-ol" aria-hidden="true"></i>
                    Planering
                </a>
                <a href="#">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    Dina beställningar
                </a>
                <a href="#">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    Hantera medlemmar
                </a>
                <a href="#">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                    Hantera formulär
                </a>
                <a class="btn accept text-center" href="#">
                    <i class="fa fa-plus fa-lg" aria-hidden="true"></i>
                    Nytt formulär
                </a>
                <a class="btn accept text-center" href="#">
                    <i class="fa fa-plus fa-lg" aria-hidden="true"></i>
                    Ny beställning
                </a>
            </div>
        </div>
    </div>
</nav>
@endif