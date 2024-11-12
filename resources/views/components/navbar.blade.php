<nav class="navbar navbar-expand-lg bg-body-tertiary shadow sticky-top">
    <div class="container-fluid mx-3">
      <a class="navbar-brand" href="/">Test Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link drop-item rounded" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle drop-item rounded" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item drop-item" href="/about">About</a></li>
              {{-- menu login --}}
              @guest
              <li><a class="dropdown-item drop-item" href="/account/login">Login</a></li>
              @endguest
              {{-- Admin menu --}}
              @auth
              <li><a class="dropdown-item drop-item" href="/admin/dashboard">Admin Dashboard</a></li>
              {{-- Logout --}}
              <li>
                <form action="{{ route('logout') }}" method="POST" class="dropdown-item p-0 drop-item">
                    @csrf
                    <button type="submit" class="btn btn-link dropdown-item drop-item">Logout</button>
                </form>
            </li>
              @endauth
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>