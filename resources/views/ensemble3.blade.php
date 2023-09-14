@extends('layouts.app')
    
@section('content')
  <div style="margin-left: 350px;">
    <p>
    <h1><strong>Boutique</strong></h1>
    </p>
  </div>
  <div style="margin-top: 10px; margin-left: 200px;">
    <p>
    <h3><strong>Catégorie 3</strong></h3>
    </p>
  </div>
  <!-- <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="f1.jpg" class="card-img-top" alt="f1">
        <div class="card-footer">
          <small class="text-body-secondary">10 000F CFA</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="f2.jpg" class="card-img-top" alt="f2">
        <div class="card-footer">
          <small class="text-body-secondary">9 000</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="f3.jpg" class="card-img-top" alt="f3">
        <div class="card-footer">
          <small class="text-body-secondary">8 000</small>
        </div>
      </div>
    </div>
  </div><br><br><br>


  <div class="row row-cols-1 row-cols-md-3 g-4"> -->
    <!-- <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="d1.jpg" class="card-img-top" alt="d1">
        <div class="card-footer">
          <small class="text-body-secondary">13 500F CFA</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="d2.jpg" class="card-img-top" alt="d2">
        <div class="card-footer">
          <small class="text-body-secondary">12 000</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100" style="background-color: transparent;">
        <img src="d3.jpg" class="card-img-top" alt="d3">
        
        <div class="card-footer">
          <small class="text-body-secondary">7 000</small>
        </div>
      </div>
    </div>
  </div> -->


  <div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card" style="background: transparent;">
                <div>
                
                    <img src="{{URL::to('/')}}/img/r3.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                 
                </div>
                <div class="card-body">
                    <h5 class="card-title">10 000F CFA</h5>
                    <p>Cerah </p>
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
              <a href="./ensemble2.html">
                <img src="{{URL::to('/')}}/img/5 - Copie - Copie.jpg" class="card-img-top" alt="Fissure in Sandstone" />
              </a>
                <div class="card-body">
                    <h5 class="card-title">17 500F CFA</h5>
                    <p>Pagne traditionnel koko  </p>
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
              <a href="ensemble3.html">
                <img src="{{URL::to('/')}}/img/r6.jpg" class="card-img-top" alt="Fissure in Sandstone" />
              </a>
                <div class="card-body">
                    <h5 class="card-title">10 000F CFA</h5>
                    <p>un sac de maasai kente avec  </p>
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
              <a href="ensemble4.html">
                <img src="{{URL::to('/')}}/img/s4.jpg" class="card-img-top" alt="Fissure in Sandstone" />
              </a>
                <div class="card-body">
                    <h5 class="card-title">16 000F CFA</h5>
                    <p>Pagne traditionnel koko </p>
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
             
                <img src="{{URL::to('/')}}/img/s5.jpg" class="card-img-top" alt="Fissure in Sandstone" />
             
                <div class="card-body">
                    <h5 class="card-title">10 000F CFA</h5>
                    <p>un sac de maasai kente avec une sandale assortie et blesser </p>
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
             
                <img src="{{URL::to('/')}}/img/s6.jpg" class="card-img-top" alt="Fissure in Sandstone" />
            
                <div class="card-body">
                    <h5 class="card-title">12 000F CFA</h5>
                    <p>un sac de maasai kente avec une sandale assortie et blesser </p>
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
              
                <img src="{{URL::to('/')}}/img/s7.jpg" class="card-img-top" alt="Fissure in Sandstone" />
             
                <div class="card-body">
                    <h5 class="card-title">6 000F CFA</h5>
                    <p>Panick kambuya avec un portfeille panick kambuya</p>
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
             
                <img src="{{URL::to('/')}}/img/s8.jpg" class="card-img-top" alt="Fissure in Sandstone" />
           
                <div class="card-body">
                    <h5 class="card-title">5 000F CFA</h5>
                    <p>un sac de maasai kente avec une sandale assortie et blesser </p>
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