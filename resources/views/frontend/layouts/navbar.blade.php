 <!-- Navbar Start -->
 <div class="container-fluid p-0">
    <nav
      class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5"
    >
      <a href="index.html" class="navbar-brand d-block d-lg-none">
        <h1 class="m-0 display-5 text-capitalize font-italic text-white">
          <span class="text-primary">Vet</span>Hub
        </h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-toggle="collapse"
        data-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse px-3 "
        id="navbarCollapse"
      >
     
        <a href="{{ route('home') }}" class="navbar-brand d-none d-lg-block brand">
          <h1 class="m-2 display-5 text-capitalize">
            <span class="text-primary">Vet</span><span style="color: white;">Hub</span>
          </h1>
        </a>
        <div style="width: 180px;"></div>
        <div class="navbar-nav py-0">
          <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
          <a href="{{ route('about') }}" class="nav-item nav-link">About</a>

          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-toggle="dropdown"
              >Service</a
            >
            <div class="dropdown-menu rounded-0 m-0">
              <a href="clinic_" class="dropdown-item">Vet Clinics</a>
              <a href="ask_a_vet" class="dropdown-item">Ask a Vet</a>
            </div>
          </div>
          <a href="{{ route('blog_website') }}" class="nav-item nav-link">Blog</a>
          <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
          {{-- <a class="usericon" href="Register/Register.html" style="">
            <i class="fas fa-user fa-lg text-white ml-3"></i>
        </a> --}}
        {{-- @if (Route::has('login'))
                            @auth
                                <li><a>My Account</a>
                                    <ul class="dropdown text-center">
                                        <li><a href="">Profile</a></li>
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf
                                            
                                            <li><a href="{{ route('logout') }}">Logout</a></li>
                                        </form>
                                        
                                    </ul>
                                </li>
                            @else
                                <li style="margin-left: 190px"><a id="loginbnt" class="btn btn-md btn-primary mt-3 mt-md-4 px-4" href="{{ route('login') }}"
                                        class="">Login</a></li>
                                @if (Route::has('register'))
                                    <li style="margin-left: 10px"><a id="loginbnt" class="btn btn-md btn-primary mt-3 mt-md-4 px-4" href="{{ route('register') }}"
                                            class="">Register</a></li>
                                @endif
                            @endauth
                        @endif --}}
                        @if (Route::has('login'))
    @auth
        <!-- User is logged in -->
        {{-- <li><a>My Account</a>
          <ul class="dropdown text-center">
              <li><a >Profile</a></li>
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <li><a href="{{ route('logout') }}">Logout</a></li>
              </form>
              
          </ul>
      </li> --}}
      <li class="nav-item dropdown" style="margin-left: 210px" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            My Account
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item" href="{{ route('logout') }}">Logout</button>
                </form>
            </li>
        </ul>
    </li>
    
        {{-- <form method="POST" action="{{ route('logout') }}">
            @csrf
            
            <button type="submit" class="btn btn-md btn-primary mt-3 mt-md-4 px-4">Logout</button>
        </form> --}}
    @else
        <!-- User is not logged in -->
        <li style="margin-left: 190px"><a id="loginbnt" class="btn btn-md btn-primary mt-3 mt-md-4 px-4" href="{{ route('login') }}">Login</a></li>
        @if (Route::has('register'))
            <li style="margin-left: 10px"><a id="loginbnt" class="btn btn-md btn-primary mt-3 mt-md-4 px-4" href="{{ route('register') }}">Register</a></li>
        @endif
    @endauth
@endif
        
        </div>
      </div>
     
      
    </nav>
  </div>

  <!-- Navbar End -->