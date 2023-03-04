<!-- Header -->
<header id="header">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand top">
        <div class="container header">

            <!-- Nav holder -->
            <div class="ml-auto"></div>


        </div>


    </nav>

    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-fixed sub">
        <div class="container header">

            <!-- Navbar Brand-->
            <a class="navbar-brand light" href="/">
                <span class="brand">
                    <span class="featured">
                        <span class="first">Anotnx</span>
                    </span>
                    <span class="last">Tasks</span>
                </span>

                <!--
                    Custom Logo
                    <img src="assets/images/logo.svg" alt="NEXGEN">
                -->
            </a>

            <!-- Nav holder -->
            <div class="ml-auto"></div>

            <!-- Navbar Items -->
            <ul class="navbar-nav items">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    @if (Auth::user())
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                            class="smooth-anchor nav-link">LOGOUT</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @else
                        <a href="#login" data-toggle="modal" data-target="#loginModal"
                            class="smooth-anchor nav-link">LOGIN</a>
                    @endif
                </li>
            </ul>

        </div>
    </nav>

</header>
