<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center">

    <!-- <h1 class="logo me-auto"><a href="{{ route('homepage') }}">Dentro do Código</a></h1> -->
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
    <a href="{{ route('homepage') }}" class="logo me-auto img-fluid"><i class="fa-solid fa-code fa-sm"></i><span style="font-size:20px;"> Dentro do Código<span></a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="{{ route('homepage') }}" class="active">Home</a></li>

        <!-- <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="about.html">About</a></li>
            <li><a href="team.html">Team</a></li>
            <li><a href="testimonials.html">Testimonials</a></li>

            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
          </ul>
        </li> -->
        <li><a href="#">Serviços</a></li>
        <li><a href="{{ route('blog') }}">Blog</a></li>
        <li><a href="#">Contato</a></li>
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="#" class="getstarted">WhatsApp</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
