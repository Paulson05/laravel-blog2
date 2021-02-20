<div class="container">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light    ">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">bucci</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse pull-lg-right" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto  ">

              <li class="nav-item mx-3">
                <a class="nav-link active" href="{{ route('pages.home') }}"><i class="fas fa-home">Home</i></a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="{{ route('pages.about') }}"><i class="fas fa-user">About</i></a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="{{ route('pages.contact') }}"><i class="fas fa-phone">contact</i></a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="{{ route('pages.service')}}"><i class="fas fa-cog">service</i></a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="{{ route('auth.login') }}"><i class="fas fa-cog">login</i></a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="{{ route('auth.register')}}"><i class="fas fa-cog">Register</i></a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    </div>
    </div>
