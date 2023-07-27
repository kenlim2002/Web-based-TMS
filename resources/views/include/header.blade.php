<nav class="navbar navbar-expand-lg " style="background-color: #a91414">
  <div class="container-fluid">
    <img src="/images/logo.png" alt="Logo" style="height: 70px; width: auto; padding-right: 2%; padding-left: 2%;">
    <a class="navbar-brand" href="{{route('home')}}">
      <h1 class="text-white fw-light">Treasury Management System</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @auth
        {{-- <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{route('dashboard')}}"><div class="text-white">Dashboard</div></a>
        </li> --}}

        @if(Request::route()->getName() !== 'dashboard')
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('dashboard') }}">
                        <div class="text-white">Dashboard</div>
                    </a>
                </li>
                @endif
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#"><div class="text-white">Home</div></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}"><div class="text-white">Logout</div></a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}"><div class="text-white">Login</div></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('registration')}}"><div class="text-white">Registration</div></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('registration')}}"><div class="text-white">About Us</div></a>
        </li>
        @endauth
      </ul>
      @auth 
      <span class="navbar-text ">
        <h4 class="text-white pe-2"><i class="bi bi-bell"></i></h4>
      </span>
      <span class="navbar-text ">
        <h4 class="text-white pe-2"><i class="bi bi-person-circle p-2"></i>{{auth()->user()->name}}</h4>
      </span> 
      @endauth
    </div>
  </div>
</nav>

