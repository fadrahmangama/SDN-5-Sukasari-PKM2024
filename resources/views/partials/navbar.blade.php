<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand me-auto logo" href="#">
      <img src="{{ asset('Logo.png') }}" alt="" width="70" height="70">
    </a>

    
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
          <img src="{{ asset('Logo.png') }}" alt="" width="70" height="70">
          <h2 style="text-align: center;">SDN 5 Sukasari
            Tangerang
          </h2>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link {{ $active === 'home' ? 'active' : '' }} mx-lg-2" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $active === 'about' ? 'active' : '' }} mx-lg-2" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
    <a href="/login" class="login-button">Login</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>