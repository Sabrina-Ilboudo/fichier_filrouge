<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('titre')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body  style="background-color: rgb(239, 241, 240);">
  <nav class="navbar fixed-top" style="background-color: transparent;">
      <div class="container-fluid" style="display: flex; ">
          <a class="navbar-brand" href="{{URL::to('/')}}"><img src="img/logo.png" alt="logo" style="width: 90px; height: 90px; background-color: transparent;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
              aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-body" style="display: flex; margin-left: 200px;">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item active">
                  <a href="{{URL::to('/index')}}">Accueil</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="{{URL::to('/boutique')}}" role="button" 
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Boutique
                  </a>
                  <ul class="dropdown-menu">
                    <li><a  href="{{URL::to('/pagnes')}}">Pagnes</a></li>
                    <li><a href="{{URL::to('/sacs')}}">Sacs</a></li>
                    <li><a href="{{URL::to('/chaussure')}}">Chaussure</a></li>
                    <li><a href="{{URL::to('/ensemble')}}">Ensemble</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{URL::to('/portfolio')}}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/contacts')}}">Contact</a>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>