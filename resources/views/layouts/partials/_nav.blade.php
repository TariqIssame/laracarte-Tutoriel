<header class="p-1 bg-dark text-white mb-5">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="{{ route('home') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none fs-3 pr-3" style="margin-right : 30px;">Larcarte </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto pt-2 justify-content-start align-items-center">
                <li><a href="{{ route('home') }}" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link px-2 text-white">About</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Artisans</a></li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle nav-link px-2 text-white" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Planet</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown04">
                    <li><a class="dropdown-item" href="#">Laravel.com</a></li>
                    <li><a class="dropdown-item" href="#">Laravel.io</a></li>
                    <li><a class="dropdown-item" href="#">Laracasts</a></li>
                    <li><a class="dropdown-item" href="#">Larajobs</a></li>
                    <li><a class="dropdown-item" href="#">Laravel News</a></li>
                    <li><a class="dropdown-item" href="#">Larachat</a></li>
                  </ul>
                </li>
                <li><a href="#" class="nav-link px-2 text-white">Contact</a></li>
            </ul>
 {{-- mb-2 mt-1 mb-md-0 --}}
            <div class="text-end">
                <button type="button" class="btn btn-outline-warning me-2">Login</button>
                <button type="button" class="btn btn-danger">Sign-up</button>
            </div>
        </div>
    </div>
</header>
