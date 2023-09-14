@extends('layouts.app')
    
@section('content')
  <div style=" margin-left: 350px;">
    <p>
    <h1><strong>Boutique</strong></h1>
    </p>
  </div>
  <div style="margin-top: 10px; margin-left: 200px;">
    <p>
    <h3><strong>Sacs</strong></h3>
    </p>
  </div>
  <!-- <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="sac1 - Copie.jpg" class="card-img-top" alt="sac1">
        <div class="card-footer">
          <small class="text-body-secondary">7 000F CFA</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="sac2.jpg" class="card-img-top" alt="sac2">
        <div class="card-footer">
          <small class="text-body-secondary">9 000</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="ac3 - Copie.jpg" class="card-img-top" alt="ac3">
        <div class="card-footer">
          <small class="text-body-secondary">5 000</small>
        </div>
      </div>
    </div>
  </div><br><br><br>


  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="sac5.jpg" class="card-img-top" alt="sac5">
        <div class="card-footer">
          <small class="text-body-secondary">3 000F CFA</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="sac6 - Copie.jpg" class="card-img-top" alt="sac6">
        <div class="card-footer">
          <small class="text-body-secondary">2 000</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="sac7 - Copie.jpg" class="card-img-top" alt="sac7">
        
        <div class="card-footer">
          <small class="text-body-secondary">5 000</small>
        </div>
      </div>
    </div>
  </div>

 -->

  <div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card" style="background: transparent;">
                <div>
                    <img src="{{URL::to('/')}}/img/sac1 - Copie.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                </div>
                <div class="card-body">
                    <h5 class="card-title">10 000F CFA</h5>
                    <p>sac en pagne traditionnel Gourounsi</p>
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
                <img src="{{URL::to('/')}}/img/sac2.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">17 500F CFA</h5>
                    <p>sac en pagne traditionnel Mossi</p>
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
                <img src="{{URL::to('/')}}/img/ac3 - Copie.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">10 000F CFA</h5>
                    <p>sac en pagne traditionnel Dagara</p>
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
                <img src="{{URL::to('/')}}/img/ac4 - Copie.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">16 000F CFA</h5>
                    <p>sac en pagne traditionnel Boaba</p>
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
                <img src="{{URL::to('/')}}/img/sac5.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">10 000F CFA</h5>
                    <p>portefeille en pagne traditionnel dafi</p>
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
                <img src="{{URL::to('/')}}/img/sac6 - Copie.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">12 000F CFA</h5>
                    <p>portfeille en pagne traditionnel goin</p>
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
                <img src="{{URL::to('/')}}/img/sac7 - Copie.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">6 000F CFA</h5>
                    <p>portfeille en pagne traditionnel goin</p>
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
                <img src="{{URL::to('/')}}/img/ac3 - Copie.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">5 000F CFA</h5>
                    <p> sac en pagne traditionnel Dagara</p>
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