<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="{{ route('dashboard') }}">UKMK-Kristen</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('jadwal') }}">Jadwal</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('profil') }}">Profil</a></li>

      <li class="nav-item">
        <a class="nav-link text-warning fw-bold" href="{{ route('logout') }}">Logout</a>
      </li>
    </ul>
  </div>
</nav>
