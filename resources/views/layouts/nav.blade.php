<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">

        <span class="navbar-brand" href="/">Kontroller Demo</span>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : ''}}" href="/">Nyitó oldal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/passing-data') ? 'active' : ''}}" href="/passing-data">Változók</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/cars') ? 'active' : ''}}" href="/cars">Autók</a>
          </li>
      </div>
    </div>
  </nav>
