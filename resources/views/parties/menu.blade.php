  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        {{-- <h1 class="text-light"><a href="">Hmak's</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="{{ $titre=="Accueil"?"active":"" }}" href="{{ route('home') }}">Accueil</a></li>
          <li><a class="{{ $titre=="about"?"active":"" }}" href="{{ route('about') }}">A propos</a></li>
          <li><a class="{{ $titre=="service"?"active":"" }}" href="{{ route('service') }}">Nos services</a></li>
          <li><a class="{{ $titre=="annonce"?"active":"" }}" href="{{ route('anonce') }}">Annonce</a></li>
          <li><a class="{{ $titre=="rdv"?"active":"" }}" href="{{ route('rdv') }}">Prendre un rendez-vous</a></li>
          <li><a class="{{ $titre=="pub"?"active":"" }}" href="{{ route('pub') }}">Publicité</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
