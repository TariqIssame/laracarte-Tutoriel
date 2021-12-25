<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="{{ route('home') }}" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="{{ route('about') }}" class="nav-link px-2 text-muted">About</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Artisans</a></li>
      <li class="nav-item" class="nav-item dropdown">
        <a class="nav-link dropdown-toggle nav-link px-2 text-muted" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Planet</a>
        <ul class="dropdown-menu mt-1" aria-labelledby="dropdown04">
          <li><a class="dropdown-item" href="#">Laravel.com</a></li>
          <li><a class="dropdown-item" href="#">Laravel.io</a></li>
          <li><a class="dropdown-item" href="#">Laracasts</a></li>
          <li><a class="dropdown-item" href="#">Larajobs</a></li>
          <li><a class="dropdown-item" href="#">Laravel News</a></li>
          <li><a class="dropdown-item" href="#">Larachat</a></li>
        </ul>
      </li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact</a></li>
    </ul>
    <p class="text-center text-muted">&copy; {{date('Y')}} Company, Laracarte</p>
</footer>
