@extends('layouts.app')
    
@section('content')
  <div style="margin-top: 50px;">
    <div style="margin-top: 170px; margin-left: 350px;">
      <p>
      <h1><strong>Contact</strong></h1>
      </p>
    </div>
  </div>
  <div>
    <div class="container">
      <div class="row" style="display: flex; ">
      </div>
      <div class="row" style="display: flex; ">
        <div>
          <img src="{{URL::to('/')}}/img/email.jpg" alt="email" width="35px" height="35px"> : burkinadesign@gmail.com
        </div>
      </div><br><br>

      <div class="row" style="display: flex; ">
        <div>
          <img src="{{URL::to('/')}}/img/call.jpeg" alt="call" width="35px" height="35px"> : +22669679649/+22664583250
        </div>
      </div><br><br>

      <div class="row" style="display: flex; ">
        <div>
          <img src="{{URL::to('/')}}/img/face.jpeg" alt="face" width="45px" height="45px"> : Burkina Design
        </div>
      </div><br><br>


      <div>
        <a href="https://telegramme.org/dl/64583250">
          <button type="button" class="btn btn-outline-primary">
            <img src="{{URL::to('/')}}/img/telegramme.jpeg" alt="telegramme" width="45px" height="45px">
            Telegramme
            "click-to-chat"
          </button>
        </a>
      </div><br><br>

      <a href="https://wa.me/69679649">
        <button type="button" class="btn btn-outline-success">
          <img src="{{URL::to('/')}}/img/whatapp.jpeg" alt="whatapp" width="45px" height="45px">
          Whatapp
          "click-to-chat"
        </button>
      </a>
    </div>
  </div>
  <div>
    <p>
      <h2><p><em>
        livraisons possible/ expédition partout dans le monde.
        A BURKINA_DESIGN, vous etes Satisfait ou rembourser.
        Veiller nous contacter pour plus d'information et créer
         un compte pour bénéficier de toutes nos création et nouveauté.</p><br>
        <p style="text-align: center">BURKINA_DESIGN, la qualité a votre portée...</p>
        </em></h2>
    </p>
  </div>



  </div>
  @endsection