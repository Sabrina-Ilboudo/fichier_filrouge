
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>BIENVENUE</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            /* ... le reste du code ... */
            background-color: rgba(0, 0, 0, 0);
            /* Couleur de fond transparente */
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Times New Roman', serif;
        }

        h1 {
            font-size: 50px;
            color: rgb(22, 21, 21);
            
            /* Animation */
            animation: sparkle 2s linear infinite;
        }

        @keyframes sparkle {
            0% {
                text-shadow: 0 0 5px #fff;
            }

            50% {
                text-shadow: 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #ff00de, 0 0 50px #ff00de, 0 0 60px #ff00de, 0 0 70px #ff00de, 0 0 80px #ff00de;
            }

            100% {
                text-shadow: 0 0 5px #fff;
            }
        }

        p {
            font-size: 25px;
            color: rgb(23, 23, 23);
        }

        h3 {
            font-size: 25px;
            color: rgb(241, 236, 236);
        }

        .glyphicon-pencil {
            font-size: 35px;
            color: rgb(247, 243, 243);
            float: right;
            margin-top: 20px;
        }

        .col-md-5 {
            margin-top: 80px;
            background: rgba(0, 0, 0, 0.4);
        }

        .label {
            font-weight: normal;
            margin-top: 15px;
            color: rgb(250, 248, 248);
            font-size: 19px;
        }

        .form-control {
            background: transparent;
            border-radius: 0px;
            border: 0px;
            border-bottom: 1px solid white;
            font-size: 18px;
            margin-top: 15px;
            height: 40px;
            color: white;
        }

        input[type="checkbox"] {
            margin-top: 15px;
            width: 15px;
            height: 15px;
        }

        small {
            font-size: 18px;
            color: rgb(242, 239, 239);
        }

        input[type="radio"] {
            margin-top: 25px;
        }

        option {
            color: rgb(169, 222, 35);
        }

        .btn-info {
            margin-top: 21px;
            font-size: 16px;
            width: 120px;
            margin-left: 80px;
            margin-bottom: 20px;
        }

        .btn-warning {
            margin-top: 21px;
            font-size: 16px;
            width: 120px;
            margin-left: 80px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body style="background-color: rgb(239, 241, 240);">



    <nav class="navbar navbar-expand-lg bg-body-tertiary" >

        <div class="container-fluid">
            <a class="navbar-brand " href="#"><img src="{{URL::to('/')}}/img/222.png" style="width:75%" alt="222"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll" style="margin-left: 900px; font-size:25px">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{URL::to('/')}}">Accueil</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{URL::to('/boutique')}}" role="button" 
                data-bs-toggle="dropdown" aria-expanded="false">
                Boutique
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{URL::to('/pagnes')}}">Pagnes</a></li>
                  <li><a class="dropdown-item" href="{{URL::to('/sacs')}}">Sacs</a></li>
                  <li><a class="dropdown-item" href="{{URL::to('/chaussure')}}">Chaussure</a></li>
                  <li><a class="dropdown-item" href="{{URL::to('/ensemble')}}">Ensemble</a></li>
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
      </nav>










   

@yield('content')
    

<footer class="mb-auto text-white-50 text-center my-5 bg-dark" style="color: white">
    <p>BURKINA_DESIGN @2023 livraisons gratuite/ 
        expédition partout dans le monde. Satisfait ou rembourser</p>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

</body>

</html>