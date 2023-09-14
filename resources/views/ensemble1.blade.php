@extends('layouts.app')
    
@section('content')
  <div style="margin-left: 350px;">
    <p>
    <h1><strong>Boutique</strong></h1>
    </p>
  </div>
  <div style="margin-top: 10px; margin-left: 200px;">
    <p>
    <h3><strong>Catégorie 1</strong></h3>
    </p>
  </div>
  <div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card" style="background: transparent;">
                <div>
                    <img src="{{URL::to('/')}}/img/i1.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">10 000F CFA</h5>
                    <p>Ensemble en pagne melodie</p>
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
        <div class="col-md-3">
            <div class="card" style="background: transparent;">
                <img src="{{URL::to('/')}}/img/r8.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">17 500F CFA</h5>
                    <p>Ensemble en pagne Jacquelina</p>
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
        <div class="col-md-3">
            <div class="card" style="background: transparent;">
                <img src="{{URL::to('/')}}/img/i3.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">10 000F CFA</h5>
                    <p>Ensemble en pagne Sofia wax </p>
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
        <div class="col-md-3">
            <div class="card" style="background: transparent;">
                <img src="{{URL::to('/')}}/img/k5.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">16 000F CFA</h5>
                    <p>Ensemble en pagne Juliana wax</p>
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
    </div><br><br><br><br>

    <div class="row">
        <div class="col-md-3">
            <div class="card" style="background: transparent;">
                <img src="{{URL::to('/')}}/img/k1.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">10 000F CFA</h5>
                    <p>Ensemble en pagne Maka </p>
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
        <div class="col-md-3">
            <div class="card" style="background: transparent;">
                <img src="{{URL::to('/')}}/img/k2.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">12 000F CFA</h5>
                    <p>Ensemble en pagne akassi</p>
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
        <div class="col-md-3">
            <div class="card" style="background: transparent;">
                <img src="{{URL::to('/')}}/img/k3.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">6 000F CFA</h5>
                    <p>Ensemble en pagne Kernel</p>
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
        <div class="col-md-3">
            <div class="card" style="background: transparent;">
                <img src="{{URL::to('/')}}/img/k4.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">5 000F CFA</h5>
                    <p>Ensemble en pagne akpi  </p>
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
    </div>
</div>
@endsection