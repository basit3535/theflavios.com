<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container-fluid">

        <!-- Logo for mobile and desktop -->
        <a class="mx-4 navbar-brand" href="{{route('home')}}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid logo">
        </a>
        <!-- Navbar content -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <!-- Left nav -->
            <ul class="text-center navbar-nav ms-auto text-lg-start">
                <li class="nav-item">
                    <a class="nav-link" href="#weekly-menu">Weekly Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#feedback">Feedback</a>
                </li>
                <li class="mx-4 mt-2 nav-item mt-lg-0">
                    <a href="{{ url('/menu') }}" target="_blank" class="btn book-btn">Download Menu</a>
                </li>
            </ul>
            <!-- Centered logo for desktop only -->
        </div>
    </div>
</nav>
