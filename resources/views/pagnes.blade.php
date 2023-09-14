@extends('layouts.app')
    
@section('content')
    <div style=" margin-left: 350px;">
        <p>
        <h1><strong>Boutique</strong></h1>
        </p>
    </div>
    <div style="margin-top: 10px; margin-left: 200px;">
        <p>
        <h3><strong>Pagnes</strong></h3>
        </p>
    </div>

    <!-- <div class="container">
        <div class="container" style="display: flex; margin-top: 30px;">
            <a href="sacs.html"></a>
            <div class="row" style="height: 150px; width: 150px;">
                <img src="pagen22.jpeg" alt="pagen22">
                10 000F CFA
            </div>
            </a>
            <div class="row" style="height: 165px;width: 150px;margin-left: 50px;">
                <img src="pagne10a175 - Copie.jpg" alt="pagne10a175">
                17 500F CFA
            </div>
            <div class="row" style="height: 150px;width: 150px;margin-left: 50px;">
                <img src="pagne11a10 - Copie.jpg" alt="pagne11a10">
                10 000F CFA
            </div>
            <div class="row" style="height: 150px;width: 150px; margin-left: 50px;">
                <img src="pagne12a10 - Copie.jpg" alt="pagne12a10">
                10 000F CFA
            </div>
            <div class="row" style="height: 150px;width: 150px; margin-left: 50px;">
                <img src="pagne5 - Copie.jpeg" alt="pagne5">
                10 000F CFA
            </div>
        </div>

        <div class="container" style="display: flex; margin-top: 100px;">
            <div class="row" style="height: 190px; width: 150px;">
                <img src="doda5 - Copie.jpeg" alt="doda5">
                12 000F CFA
            </div>
            <div class="row" style="height: 220px;width: 150px;margin-left: 50px;">
                <img src="doda4 - Copie.jpeg" alt="doda4">
                16 000F CFA
            </div>
            <div class="row" style="height: 190px;width: 150px;margin-left: 50px;">
                <img src="doda6 - Copie.jpeg" alt="doda6">
                18 000F CFA
            </div>
            <div class="row" style="height: 100px;width: 150px; margin-left: 50px;">
                <img src="dona3 - Copie.jpg" alt="dona3">
                16 000F CFA
            </div>
            <div class="row" style="height: 180px;width: 150px; margin-left: 50px;">
                <img src="dona2 - Copie.jpeg" alt="dona2">
                10 000F CFA
            </div>
        </div>
    </div> -->


    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="background: transparent;">
                    <div>
                        <img src="{{URL::to('/')}}/img/pagne11a10 - Copie.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">10 000F CFA</h5>
                        <p>Pagne traditionnel Faso Dan Fani Mossi </p>
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
                    <img src="{{URL::to('/')}}/img/pagne10a175 - Copie.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">17 500F CFA</h5>
                        <p>Pagne traditionnel Faso Dan Fani pour les Samo </p>
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
                    <img src="{{URL::to('/')}}/img/pagne5 - Copie.jpeg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">10 000F CFA</h5>
                        <p>Pagne traditionnel Faso Dan Fani Boaba</p>
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
                    <img src="{{URL::to('/')}}/img/pagne9a16 - Copie.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">16 000F CFA</h5>
                        <p>Pagne traditionnel Faso Dan Fani pour Bissa </p>
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
                    <img src="{{URL::to('/')}}/img/pagne16.jpeg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">10 000F CFA</h5>
                        <p>Pagne traditionnel Faso Dan Fani Peulh</p>
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
                    <img src="{{URL::to('/')}}/img/pagne19.jpeg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">12 000F CFA</h5>
                        <p>Pagne traditionnel Faso Dan Fani Gourounsi </p>
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
                    <img src="{{URL::to('/')}}/img/doda6 - Copie - Copie.jpeg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">6 000F CFA</h5>
                        <p>Pagne traditionnel koko dona pour Dafi </p>
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
                    <img src="{{URL::to('/')}}/img/doda5 - Copie.jpeg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">5 000F CFA</h5>
                        <p>Pagne traditionnel Koko Dona pour Goin </p>
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