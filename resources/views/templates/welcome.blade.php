@extends('layout.app')

@section('conteudo')
    <div  style="background-color:#2e2e2e">

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="estilos/estilo.css">
        <title></title>

      <div>
        <label id="texto" style="color:#f55047;font-style: italic;font-family:Brush Script MT;font-size:60px">Catálogo Artístico Digital de Jardim MS</label>
        <img id="image" src="img/jardim.png" alt="Imagem de Fundo" />
      </div>

      <div style="margin-top:20px; background-color:#1a1a1a;border-radius:60px;">
        <p style="color:#48c3c7;text-align:center;font-size:60px;width:100%;margin-bottom:20px;">Categorias</p>
    </div>
    <div>
        <a href="estilos"><img class="estilos" src="img/icons/notas-musicais.png"></a>
        <a href="estilos"><img class="estilos" src="img/icons/quadro.png"></a>
        <a href="estilos"><img class="estilos" src="img/icons/artesanato.png"></a>
        <a href="estilos"><img class="estilos" src="img/icons/danca.png"></a>
        <a href="estilos"><img class="estilos" src="img/icons/escultura.png"></a>
        <a href="estilos"><img class="estilos" src="img/icons/fotografia.png"></a>
</div>


        <div class="container3">
    <p style="color:#48c3c7;text-align:center;font-size:60px;width:100%;margin-bottom:50px">Nossos Artistas</p>
        </div>

<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides">
  <img src="img/artistas/tarsila-amaral.jpg" style="width:100%; height:700px;">
</div>

<div class="mySlides">
  <img src="img/artistas/candido-portinari.jpg" style="width:100%; height:700px;">
</div>

<div class="mySlides">
  <img src="img/artistas/pablo_picasso.jpg" style="width:100%; height:700px;">
</div>

<div class="mySlides">
  <img src="img/artistas/auguste_rodin.jpg" style="width:100%; height:700px;">
</div>

</div>
<br>


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

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color:#2e2e2e;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

#image {
  width: 100%;
  height: 300px;
}

#texto {
  position: absolute;
  color: white;
  font-size: 32px;
  width: 100%;
  text-align: center;
}

.container3{
  background-color:#171717;
  width:100%;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  border-radius:60px;
}

.categorias{
  width: 200px;
  height: 200px;
}

.estilos{
  width:100%; width:125px; height:125px;margin-bottom:60px;margin-left:80px 
}
</style>

@endsection