{{-- extender o arquivo de layout app.blade.php que esta na pasta resources/layout --}}
@extends('layout.app')

@section('conteudo')
    {{--aqui vai o texto  que eu pretendo modificar --}}


    <div>
        <h1 class=estilos_titulo>Estilos de Arte</h1>
</div>

<div class="quadroregiao">
    <h1 class="regiao" style="margin-top:0"> A Arte da Região<h1>
<div>
    <p style="color:black;font-size:20px">Jardim é um dos 79 munícipios de Mato Grosso do Sul, localizada no complexo da Serra da Bodoquena, vizinha de Guia Lopes da Laguna e Bonito, a cidade acaba se tornando um ponto turístico por si só.
A cultura da cidade é rica e com várias inspirações, conheça o que a cidade pode te oferecer de acordo com sua preferência. </p>
</div>
</div>


<div class="secao">
    <img class="iconelado" src="img/icons/artesanato.png">
    <p style="display:inline-block;vertical-align:top;" class="titulo2">Artesanato</p>
    </div>
<div>
    <p class="opcoes">Costura; Confecção em Panos; Confecção em Papelaria; Confecção em Madeiras;</p> 
</div>


<div class="secao">
    <img class="iconelado" src="img/icons/danca.png"> 
    <p style="display:inline-block;vertical-align:top;" class="titulo2">Dança</p>
</div>
<div>
    <p class="opcoes">Escolas de Dança; Dançarinos;</p> 
</div>

<div class="secao">
    <img class="iconelado" src="img/icons/escultura.png">
    <p style="display:inline-block;vertical-align:top;" class="titulo2">Escultura</p>
    </div>
<div>
    <p class="opcoes">Escultura em Madeira; Escultura em Gesso; Escultura em Osso</p> 
</div>

<div class="secao">
    <img class="iconelado" src="img/icons/fotografia.png"> 
    <p style="display:inline-block;vertical-align:top;" class="titulo2">Fotografia</p>
</div>
<div>
    <p class="opcoes">Fotos de Estúdio; PhotoBooks; Ensaios; Gravações;</p> 
</div>

<div class="secao">
    <img class="iconelado" src="img/icons/notas-musicais.png"> 
    <p style="display:inline-block;vertical-align:top;" class="titulo2">Música</p>
    </div>
<div>
    <p class="opcoes">Bandas; Apresentações; Canotres;</p> 
</div>

<div class="secao">
    <img class="iconelado" src="img/icons/quadro.png"> 
    <p style="display:inline-block;vertical-align:top;" class="titulo2">Pintura</p>
    </div>
<div>
    <p class="opcoes">Pintura em Tela; Pintura em Ovos; Pintura em Madeira; Pintura em Panos; Pintura em Telhas;</p> 
</div>

<div class="secao">
    <img class="iconelado" src="img/icons/teatro.png"> 
    <p style="display:inline-block;vertical-align:top;" class="titulo2">Teatro</p>
</div>
<div>
    <p class="opcoes">Apresentações; Escolas de Tetaro; Encenações;</p> 
</div>

<p style="margin-bottom:60px"></p>

<style>
.estilos_titulo{
    color:#23ab1a; 
    text-align:center;
    font-size:60px

}
.regiao{
    font-size: 50 px;
color: black;
text-align: left;
}
.quadroregiao{
background-color: white;
margin-bottom: 60px;
}
span{
    margin-left: 25px;
}
.iconelado{
width: 80px;
height: 80px;
}
.titulo2{
    font-size: 60px;
    color:#f55047;
}
.opcoes{
    font-size: 20px;
    color: white;
}
.secao{
    background-color:#171717;
  width:100%;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  border-radius:20px;
}
</style>

@endsection
