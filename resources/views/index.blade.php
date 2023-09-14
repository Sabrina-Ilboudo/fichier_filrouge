
  @extends('layouts.app')
    
@section('content')
<div class="container" >
    <div style="margin-left: 350px;">
        <p>
        <h1><strong>Accueil</strong></h1>
        </p>
    </div>
    <div class="row" >
        <div class="col-md-7">
            <h1 class="text">BIENVENUE
                A <br> BURKINA <br>DESIGN</h1>
                <div style="font-size: 15px">
            <p class="text"><em>BURKINA_DESIGN est une marque burkinabé de pagnes,
                    de sacs, et de chaussures
                    fabriquées sur-mesure par des femmes Burkinabé, de façon artisanale à partir
                    de tissus-pagnes africains faso Dan Fani et Koko dona.<em>
                        Le tissu traditionnel désigne l’héritage légué
                        par les ancêtres, il s’agit de l’identité d’un peuple.<br>Dans
                        les tribus africaines, chaque ethnie disposait de son pagne traditionnel,
                        c’est à travers ces tissus que la distinction pouvait se faire entre les
                        différentes ethnies.<br>
                    </em></em></p>
                </div>
        </div>
        <div class="col-md-5" style="margin-top: 100px;">
            <!-- Deuxième colonne pour l'inscription et l'enregistrement -->
            <div class="row">
                <img src="{{URL::to('/')}}/img/port.jpg" alt="port">
            </div>
            <!--fin-->
        </div>
    </div>
</div>
@endsection
    
     {{-- @extends('navbar')

 
    @section('titre')
    index
    @endsection
    @section('contenu') --}}
{{-- @endsection --}}