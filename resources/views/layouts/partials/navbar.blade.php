<nav class="navbar navbar-expand-lg fixed-top bg-dark" data-bs-theme="dark">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="index.html">
            <img src="/logo.svg" alt="" width="165" />
        </a>

        <!-- Navbar toggler button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="navbar-toggler-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>

        <!-- Navbar content -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <div
                class="navbar-content-inner ms-lg-auto d-flex flex-column flex-lg-row align-lg-center gap-4 gap-lg-10 p-2 p-lg-0">
                <ul class="navbar-nav gap-lg-2 gap-xl-5">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Home
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.html">Home one</a></li>
                            <li><a class="dropdown-item" href="index-lite.html">Home one lite</a></li>
                            <li><a class="dropdown-item" href="index-2.html">Home two</a></li>
                            <li><a class="dropdown-item" href="index-2-lite.html">Home two lite</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                </ul>
                <div class="">
                    @auth
                    <form action="{{ url('/logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-outline-primary-dark">Deconnexion</button>
                    </form>
                    @endauth

                    @guest
                        <x-cta-button name="" url="/login">Get started</x-cta-button>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</nav>
