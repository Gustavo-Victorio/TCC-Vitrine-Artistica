@extends('layout.tela')

@section('conteudo2')

<div style="text-align: center;">
<img class="perfil" src="img/artistas/pablo_picasso.jpg">
</div>

<div>
<p class="titulo">Pablo Picasso</p>
</div>

<div>
<p class="subtitulo">Pintor e Escultor</p>
</div>

<div class="container2">
<p class="descricao">
TEXTO DESSA DESCRIÇÃO CONTERÁ UMA BREVE DESCRIÇÃO DA CARREIRA ARTÍSTICA DO ARTISTA E DE SUAS OBRAS<BR>
Pablo Ruiz Picasso (Málaga, 25 de outubro de 1881 – Mougins, 8 de abril de 1973) foi um pintor espanhol, escultor, ceramista, cenógrafo, poeta e dramaturgo que passou a maior parte da sua vida na França. É conhecido como o co-fundador do cubismo — ao lado de Georges Braque —, inventor da escultura construída, o inventor da colagem e pela variedade de estilos que ajudou a desenvolver e explorar. Dentre as suas obras mais famosas estão os quadros cubistas As Meninas D’Avignon (1907) e Guernica (1937), uma pintura do bombardeio alemão de Guernica durante a Guerra Civil Espanhola.
</p>
</div>

<p style="margin-bottom:60px"></p>

<div class="container2">
    <h1 class="galeria">Galeria</h1>
</div>

<p style="margin-bottom:40px"></p>
<div style="background-color:#171717;" class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div style="background-color:#171717;" class="mySlides">
  <img src="img/obras/obra-picasso-1.jpg" style="width:100%; height:700px;">
</div>

<div style="background-color:#171717;" class="mySlides">
  <img src="img/obras/obra-picasso-2.jpg" style="width:100%; height:700px;">
</div>

<div style="background-color:#171717;" class="mySlides">
  <img src="img/obras/obra-picasso-3.jpg" style="width:100%; height:700px;">
</div>

<div style="background-color:#171717;" class="mySlides">
  <img src="img/obras/obr-picasso-4.jpg" style="width:100%; height:700px;">
</div>
<p style="margin-bottom:80px"></p>

</div>


<script>
  let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<style>
    h1{
        color:white;
        font-size:50px;
        text-align: center;
    }
    .perfil{
        border-radius: 100%;
        width: 50%;
        height: 400px;
        margin-top: 30px;
        margin-bottom: 10px;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    .titulo{
        color:white;
        text-align: center;
        font-size:40px;
        width: 100%;
        margin-bottom: 0;
    }
    .subtitulo{
        color:white;
        text-align: center;
        font-size:30px;
        width: 100%;
        margin-top:0;
    }
    .descricao{
        color:white;
        text-align: center;
        width: 100%;
        font-size: 20px;
    }
    .container2{
        background-color:#171717;
        border-radius: 5px;
        width:100%;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}
</style>

@endsection