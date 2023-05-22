
<nav class="navbar navbar-expand-lg bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


          @auth

          <li class="nav-item">
            <a class="nav-link" href="{{route('createProduct')}}">Inserisci prodotto</a>
          </li>

          @else

          <li class="d-none"></li>

          @endauth

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('indexProduct')}}">I nostri piatti</a>
          </li>


          @auth

          <li class="nav-item">
            <a class="nav-link" href="{{route('createShop')}}">Inserisci sponsor</a>
          </li>

          @endauth

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('indexShop')}}">I nostri sponsor</a>
          </li>

          @auth

          <li class="nav-item">
            <a class="nav-link" href="{{route('userProfile')}}">Profilo utente</a>
          </li>

          @endauth


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Accedi
            </a>
            <ul class="dropdown-menu">

              @guest

              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
              <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li> 

              @else

              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();" >Logout</a></li>

              <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none"> 
                @csrf 
              </form>

          
                  
              @endguest


            </ul>
              
{{--           

            @auth

            <li class="nav-item mt-2 me-2 ms-2">

              Benvenuto {{Auth::user()->name}}

            </li>

          @else

            <li class="nav-item mt-2 me-2 ms-2">

              Ciao, accedi!

            </li>
              
          @endauth --}}

          </li>

  
        <form class="d-flex justify-content-end" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

      </div>
    </div>
  </nav>

