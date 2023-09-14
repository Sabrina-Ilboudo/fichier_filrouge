@extends('layouts.app')
    
@section('content')
  <div style="margin-top: 50px;">
    <div style=" margin-left: 350px;">
      <p>
      <h1><strong>Boutique</strong></h1>
      </p>
    </div>
    <div style="margin-top: 30px; margin-left: 200px;">
      <p>
      <h3><strong>Chaussures</strong></h3>
      </p>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <div class="card" style="background-color: transparent;">
        <img src="{{URL::to('/')}}/img/c1 - Copie.jpg" class="card-img-top" alt="c1">
        <h5 class="card-title">5 000F CFA</h5>
        <p>nue pierd en pagne chanel</p>
                        <a href="https://wa.me/69679649">
                          <button type="button" class="btn btn-outline-success">
                            <img src="{{URL::to('/')}}/img/whatapp.jpeg" alt="whatapp" width="45px" height="45px">
                            Whatapp
                            "click-to-chat"
                          </button>
                        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="background-color: transparent;">
        <img src="{{URL::to('/')}}/img/chaussure7.jpg" class="card-img-top" alt="chaussure7">
        <h5 class="card-title">9 000F CFA</h5>
        <p>nue pierd en pagne wax </p>
                        <a href="https://wa.me/69679649">
                          <button type="button" class="btn btn-outline-success">
                            <img src="{{URL::to('/')}}/img/whatapp.jpeg" alt="whatapp" width="45px" height="45px">
                            Whatapp
                            "click-to-chat"
                          </button>
                        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="background-color: transparent;">
        <img src="{{URL::to('/')}}/img/c3 - copie.jpg" class="card-img-top" alt="c3">
        <h5 class="card-title">4 000F CFA</h5>
        <p>chaussure fermer en pagne wax </p>
                        <a href="https://wa.me/69679649">
                          <button type="button" class="btn btn-outline-success">
                            <img src="{{URL::to('/')}}/img/whatapp.jpeg" alt="whatapp" width="45px" height="45px">
                            Whatapp
                            "click-to-chat"
                          </button>
                        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="background-color: transparent;">
        <img src="{{URL::to('/')}}/img/saus10.jpeg" class="card-img-top" alt="saus10">
        <h5 class="card-title">3 000F CFA</h5>
        <p>chaussure en pagne traditionnel</p>
                        <a href="https://wa.me/69679649">
                          <button type="button" class="btn btn-outline-success">
                            <img src="{{URL::to('/')}}/img/whatapp.jpeg" alt="whatapp" width="45px" height="45px">
                            Whatapp
                            "click-to-chat"
                          </button>
                        </a>
      </div>
    </div>
  </div><br><br>


  <div class="row">
    <div class="col-md-3">
      <div class="card" style="background-color: transparent;">
        <img src="{{URL::to('/')}}/img/a1 - copie.jpg" class="card-img-top" alt="a1">
          <h5 class="card-title">4 000F CFA</h5>
          <p>vendredi jaune</p>
                        <a href="https://wa.me/69679649">
                          <button type="button" class="btn btn-outline-success">
                            <img src="{{URL::to('/')}}/img/whatapp.jpeg" alt="whatapp" width="45px" height="45px">
                            Whatapp
                            "click-to-chat"
                          </button>
                        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="background-color: transparent;">
        <img src="{{URL::to('/')}}/img/a2 - copie.jpg" class="card-img-top" alt="a2">
        <h5 class="card-title">3 500F CFA</h5>
        <p>lundi confort </p>
                        <a href="https://wa.me/69679649">
                          <button type="button" class="btn btn-outline-success">
                            <img src="{{URL::to('/')}}/img/whatapp.jpeg" alt="whatapp" width="45px" height="45px">
                            Whatapp
                            "click-to-chat"
                          </button>
                        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="background-color: transparent;">
        <img src="{{URL::to('/')}}/img/a3.jpg" class="card-img-top" alt="a3">
        <h5 class="card-title">4 000F CFA</h5>
        <p>pantoufles Ankara</p>
                        <a href="https://wa.me/69679649">
                          <button type="button" class="btn btn-outline-success">
                            <img src="{{URL::to('/')}}/img/whatapp.jpeg" alt="whatapp" width="45px" height="45px">
                            Whatapp
                            "click-to-chat"
                          </button>
                        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="background-color: transparent;">
        <img src="{{URL::to('/')}}/img/aa.jpg" class="card-img-top" alt="aa">
        <h5 class="card-title">3 000F CFA</h5>
        <p>Afrika CI</p>
                        <a href="https://wa.me/69679649">
                          <button type="button" class="btn btn-outline-success">
                            <img src="{{URL::to('/')}}/img/whatapp.jpeg" alt="whatapp" width="45px" height="45px">
                            Whatapp
                            "click-to-chat"
                          </button>
                        </a>
      </div>
    </div>
  </div>
  

  <!-- <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="c1.jpg" class="card-img-top" alt="c1">
        <div class="card-footer">
          <small class="text-body-secondary">3 000F CFA</small>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="c2.jpg" class="card-img-top" alt="c2">
        <div class="card-footer">
          <small class="text-body-secondary">2 000</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="c3.jpg" class="card-img-top" alt="c3">
        <div class="card-footer">
          <small class="text-body-secondary">5 000</small>
        </div>
      </div>
    </div>
    
  </div><br><br><br>

  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="a1.jpg" class="card-img-top" alt="a1">
        <div class="card-footer">
          <small class="text-body-secondary">7 000F CFA</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="a2.jpg" class="card-img-top" alt="a2">
        <div class="card-footer">
          <small class="text-body-secondary">9 000</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="a3.jpg" class="card-img-top" alt="a3">
        <div class="card-footer">
          <small class="text-body-secondary">5 000</small>
        </div>
      </div>
    </div>
  </div><br><br><br>



  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="b2.jpg" class="card-img-top" alt="b2">
        <div class="card-footer">
          <small class="text-body-secondary">9 000</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="b3.jpg" class="card-img-top" alt="b3">
        <div class="card-footer">
          <small class="text-body-secondary">5 000</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="b4.jpg" class="card-img-top" alt="b4">
        <div class="card-footer">
          <small class="text-body-secondary">5 000</small>
        </div>
      </div>
    </div>
  </div><br><br><br> -->


  <!-- <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card" style="background: transparent;">
          <div>
            <img src="./c1.jpg" class="card-img-top" alt="Fissure in Sandstone" />
          </div>
          <div class="card-body">
            <h5 class="card-title">3 000F CFA</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="background: transparent;">
          <img src="./c2.jpg" class="card-img-top" alt="Fissure in Sandstone" />
          <div class="card-body">
            <h5 class="card-title">4 500F CFA</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="background: transparent;">
          <img src="./c3.jpg" class="card-img-top" alt="Fissure in Sandstone" />
          <div class="card-body">
            <h5 class="card-title">4 000F CFA</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="background: transparent;">
          <img src="./c4.jpg" class="card-img-top" alt="Fissure in Sandstone" />
          <div class="card-body">
            <h5 class="card-title">6 000F CFA</h5>
          </div>
        </div>
      </div>
    </div><br><br><br><br>

    <div class="row">
      <div class="col-md-3">
        <div class="card" style="background: transparent;">
          <img src="./b1.jpg" class="card-img-top" alt="Fissure in Sandstone" />
          <div class="card-body">
            <h5 class="card-title">7 000F CFA</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="background: transparent;">
          <img src="./b2.jpg" class="card-img-top" alt="Fissure in Sandstone" />
          <div class="card-body">
            <h5 class="card-title">3 000F CFA</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="background: transparent;">
          <img src="./b3.jpg" class="card-img-top" alt="Fissure in Sandstone" />
          <div class="card-body">
            <h5 class="card-title">6 000F CFA</h5>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card" style="background: transparent;">
          <img src="./b4.jpg" class="card-img-top" alt="Fissure in Sandstone" />
          <div class="card-body">
            <h5 class="card-title">5 000F CFA</h5>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  @endsection