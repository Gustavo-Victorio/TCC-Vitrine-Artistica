{{-- extender o arquivo de layout app.blade.php que esta na pasta resources/layout --}}
@extends('layout.app')

@section('conteudo')
    {{--aqui vai o texto  que eu pretendo modificar --}}
     
    <h1 class="mt-3 mx-3" style="color:#23ab1a; text-align:center;font-size:60px">Artistas</h1>
    <div class="d-flex justify-content-evenly mt-5">


    <div class="card" style="width: 25%;margin-left: 5px;border-color:green;">
        <img class="card-img-top" src="img/artistas/auguste_rodin.jpg" alt="Auguste Rodin" style="height: 20.875rem;">
        <div class="card-body" style="background-color:#2e2e2e">
          <h5 class="card-title" style="color:white;">Auguste Rodin</h5>
          <h6 class="card-title" style="color:white;">Escultura</h6>
          <h6 class="card-title" style="color:white;">Esculturas em Gesso; Esculturas em Bronze</h6>
          <p class="card-text" style="color:white;">François-Auguste-René Rodin, mais conhecido como Auguste Rodin, foi um escultor francês.</p>
          <a href="rodin" style="background-color:#23ab1a;border-color:green;" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ir a Página do Artista</a>
        </div>
      </div>


      <div class="card" style="width: 25%;margin-left: 5px;border-color:green">
        <img class="card-img-top" src="img/artistas/pablo_picasso.jpg" alt="Pablo Picasso" style="height: 20.875rem;">
        <div class="card-body" style="background-color:#2e2e2e">
          <h5 class="card-title" style="color:white;">Pablo Picasso</h5>
          <h6 class="card-title" style="color:white;">Pintura e Escultura</h6>
          <h6 class="card-title" style="color:white;">Pintura em Telas; Escultura em Gesso</h6>
          <p class="card-text" style="color:white;">Pablo Ruiz Picasso foi um pintor espanhol, escultor, ceramista, cenógrafo, poeta e dramaturgo.</p>
          <a href="picasso" style="background-color:#23ab1a;border-color:green;" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ir a Página do Artista</a>
        </div>
      </div>


      <div class="card" style="width: 25%;margin-left: 5px;border-color:green">
        <img class="card-img-top" src="img/artistas/tarsila-amaral.jpg" alt="Tarsíla do Amaral" style="height: 20.875rem;">
        <div class="card-body" style="background-color:#2e2e2e">
          <h5 class="card-title" style="color:white;">Tarsíla do Amaral</h5>
          <h6 class="card-title" style="color:white;">Pintura</h6>
          <h6 class="card-title" style="color:white;">Pintura em Telas</h6>
          <p class="card-text" style="color:white;">Tarsila de Aguiar do Amaral foi uma pintora, desenhista e tradutora brasileira. </p>
          <a href="tarsila" style="background-color:#23ab1a;border-color:green;" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ir a Página do Artista</a>
        </div>
      </div>


      <div class="card" style="width: 25%;margin-left: 5px;border-color:green">
        <img class="card-img-top" src="img/artistas/candido-portinari.jpg" alt="Cândido Portinari" style="height: 20.875rem; ">
        <div class="card-body" style="background-color:#2e2e2e">
          <h5 class="card-title" style="color:white;">Cândido Portinari</h5>
          <h6 class="card-title" style="color:white;">Pintura</h6>
          <h6 class="card-title" style="color:white;">Pintura em Telas</h6>
          <p class="card-text" style="color:white;">Candido Portinari foi um importante artista plástico brasileiro da fase modernista.</p>
          <a href="candido" style="background-color:#23ab1a;border-color:green;" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ir a Página do Artista</a>
        </div>
      </div>

    </div>

    <div class="d-flex justify-content-evenly mt-5">


<div class="card" style="width: 18rem;border-color:green;">
    <img class="card-img-top" src="img/artistas/auguste_rodin.jpg" alt="Auguste Rodin" style="height: 20.875rem;">
    <div class="card-body" style="background-color:#2e2e2e">
      <h5 class="card-title" style="color:white;">Auguste Rodin</h5>
      <p class="card-text" style="color:white;">François-Auguste-René Rodin, mais conhecido como Auguste Rodin, foi um escultor francês.</p>
      <a href="rodin" style="background-color:#23ab1a;border-color:green;" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ir a Página do Artista</a>
    </div>
  </div>


  <div class="card" style="width: 18rem;border-color:green">
    <img class="card-img-top" src="img/artistas/pablo_picasso.jpg" alt="Pablo Picasso" style="height: 20.875rem;">
    <div class="card-body" style="background-color:#2e2e2e">
      <h5 class="card-title" style="color:white;">Pablo Picasso</h5>
      <p class="card-text" style="color:white;">Pablo Ruiz Picasso foi um pintor espanhol, escultor, ceramista, cenógrafo, poeta e dramaturgo.</p>
      <a href="picasso" style="background-color:#23ab1a;border-color:green;" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ir a Página do Artista</a>
    </div>
  </div>


  <div class="card" style="width: 18rem;border-color:green">
    <img class="card-img-top" src="img/artistas/tarsila-amaral.jpg" alt="Tarsíla do Amaral" style="height: 20.875rem;">
    <div class="card-body" style="background-color:#2e2e2e">
      <h5 class="card-title" style="color:white;">Tarsíla do Amaral</h5>
      <p class="card-text" style="color:white;">Tarsila de Aguiar do Amaral foi uma pintora, desenhista e tradutora brasileira. </p>
      <a href="tarsila" style="background-color:#23ab1a;border-color:green;" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ir a Página do Artista</a>
    </div>
  </div>


  <div class="card" style="width: 18rem;border-color:green">
    <img class="card-img-top" src="img/artistas/candido-portinari.jpg" alt="Cândido Portinari" style="height: 20.875rem; ">
    <div class="card-body" style="background-color:#2e2e2e">
      <h5 class="card-title" style="color:white;">Cândido Portinari</h5>
      <p class="card-text" style="color:white;">Candido Portinari foi um importante artista plástico brasileiro da fase modernista.</p>
      <a href="candido" style="background-color:#23ab1a;border-color:green;" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ir a Página do Artista</a>
    </div>
  </div>

</div>

    <br>
    </body>
@endsection
