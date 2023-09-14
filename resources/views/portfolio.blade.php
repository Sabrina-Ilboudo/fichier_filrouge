@extends('layouts.app')
    
@section('content')
  <div>
    <div style=" margin-left: 350px;">
      <p>
      <h1><strong>Portfolio</strong></h1>
      </p>
    </div><br><br><br><br><br><br><br><br>
    <div class="container" style="margin-top: -100px; display: flex;">
      <div class="row">
        <div class="col-md-6" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
          “Je suis une jeune africaine d’origine Burkinabé,
          qui depuis toute jeune rêve d’apporter une touche
          particulière au monde vestimentaire à travers les chaussure,
          sacs, et bien d'autre chose.
          De par mon éducation, mes efforts et la détermination de mon
          équipe, nous avons pu faire une place à Burkina Design. Cette
          initiative permet à la fois de valoriser la qualité du pagne tissé
          africain notamment Burkinabè et de faire travailler plusieurs personnes
          par la fabrication de chaussures, de sacs, de collier et bien d'autre chose.
          Merci pour vos soutiens multiformes qui permettent
          aujourd’hui à de nombreuses artisanes et artisans
          de vivre de leur art!”
        </div>

        <div class="col-md-6">
          <img src="{{URL::to('/')}}/img/photo.jpg" alt="photo" height="230px" >
        </div>
      </div>
    </div>
  </div><br><br><br><br><br><br><br><br><br>

  @endsection