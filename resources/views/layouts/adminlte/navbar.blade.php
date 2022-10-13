
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="logout" data-slide="true" href="#" role="button" onClick="document.getElementById('formLogout').submit();">
          <span class="mr-3">{{Str::title(Auth::user()->name)}}</span> 
          <i class="fas fa-sign-out-alt"></i>
        </a>
        <form method="POST" action="{{ route('logout') }}" id="formLogout">
            @csrf
        </form>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
