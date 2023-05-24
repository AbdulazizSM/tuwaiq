<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'home') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Font+Name&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


        <title>@yield('title') - My Laravel App</title>

</head>
<body>
    <header> 
        <!-- NavBar -->
        {{-- <nav class="navbar navbar-expand-lg navbar-light bg-white ">
            <div class="container-fluid">
                <a href="{{ route('Home') }}" class="d-flex align-items-end " style="text-decoration: none;">
                    <img src='img/logo.png' height="50" alt="Logo"><h3 style="color:rgb(10, 124, 4)">Rarely World </h3>
                </a>
             
                <div class="d-flex">
                  <h5>service </h5> 

                </div>

            </div>
      
          </nav> --}}
          <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
              <a href="{{ route('Home') }}" class="d-flex align-items-end" style="text-decoration: none;">
                <img src="/img/logo.png" height="50" alt="Logo">
                <h3 style="color:rgb(10, 124, 4); margin-left: 20px;">Rare Forest</h3>
              </a>
          
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('Home') }}" style="text-decoration: none;">Home</a>
                </li>
                <li class="nav-item" style="margin-left: 20px;">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item" style="margin-left: 20px;">
                  <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item" style="margin-left: 20px;">
                  <a class="nav-link" href="#">Cart</a>
                </li>
                @guest
                <!-- Show login and register links for guests -->
                <li class="nav-item" style="margin-left: 20px;">
                  <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item" style="margin-left: 20px;">
                  <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                @else
                <!-- Show logout link for authenticated users -->
                <li class="nav-item" style="margin-left: 20px;">
                  <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </li>
                @endguest
              </ul>
            </div>
          </nav>
          
          

    </header>

  
    <main class="py-4 ">
        @yield('content')

    </main>


    <footer>
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-2 border-bottom">
          <!-- Left -->
          <div class="me-3 d-none d-lg-block">
              <span>Get connected with us on social networks:</span>
          </div>
          <!-- Left -->
  
          <!-- Right -->
          <div>
              <a href="" class="me-2 link-secondary">
                  <i class="fab fa-twitter"></i>
              </a>
              <a href="" class="me-2 link-secondary">
                  <i class="fab fa-google"></i>
              </a>
              <a href="" class="me-2 link-secondary">
                  <i class="fab fa-instagram"></i>
              </a>
          </div>
          <!-- Right -->
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Links  -->
      <section>
          <div class="container text-center text-md-start mt-3">
              <!-- Grid row -->
              <div class="row mt-3">
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                      <!-- Content -->
                      <h6 class="text-uppercase fw-bold mb-3">
                          <i class="fas fa-gem me-2 text-secondary"></i>Rare Forest
                      </h6>
                      <p>
                          Sell and buy all kinds of Pets
                      </p>
                  </div>
                  <!-- Grid column -->
  
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                      <!-- Links -->
                      <h6 class="text-uppercase fw-bold mb-3">
                          Useful links
                      </h6>
                      <p><a href="#!" class="text-reset">Pricing</a></p>
                      <p><a href="#!" class="text-reset">About</a></p>
                      <p><a href="#!" class="text-reset">Help</a></p>
                  </div>
                  <!-- Grid column -->
  
                  <!-- Grid column -->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                      <!-- Links -->
                      <h6 class="text-uppercase fw-bold mb-3">Contact</h6>
                      <p><i class="fas fa-home me-2 text-secondary"></i> Qassim, SA 1111, KSA</p>
                      <p><i class="fas fa-envelope me-2 text-secondary"></i>info@example.com</p>
                      <p><i class="fas fa-phone me-2 text-secondary"></i> +966 53 806 3086 </p>
                  </div>
                  <!-- Grid column -->
              </div>
              <!-- Grid row -->
          </div>
      </section>
      <!-- Section: Links  -->
  </footer>
  

</body>
</html>
