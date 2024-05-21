<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" aria-current="page" target="blank" href="{{ route('home') }}">Home</a>
          </li>

          <div>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" target="blank" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" target="blank" href="{{ route('register') }}">Registrati</a>
            </li>
          </div>

          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Profilo</a></li>
              <li><a class="dropdown-item" href="#">Impostazioni</a></li>
              <li>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit">LOGOUT</button>
                </form>
              </li> --}}
          {{-- </ul> --}}
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
