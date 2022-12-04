@extends('layout.app')

@section('conteudo')

    {{--aqui vai o texto  que eu pretendo modificar --}}
    <div  style="background-color:#2e2e2e">
<div class="div2">
    <h1 class="h1xx">Sobre o Site</h1>
</div>
<p style="width:100%">
O site é a ideia de TCC (Trabalho de Conclusão de Curso) para o curso integrado de Técnico em Informática 
    do Instituto Federal de Mato Grosso do Sul Campus Jardim dos alunos Gustavo e Josiel.<br>
    

<div class="div2">
<h1 class="h1xx">Por que?</h1>
</div>
<p style="width:100%">
A resposta para essa pergunta é simples! Existem lindas e maravilhosas artes e artistas espalhados para todo o Brasil, 
    nossa cultura é rica e esbelta, mas vale saber explorá-la de forma certa, temos vários turistas pela região, mas pouca vitrine.
    Se eu um turista venho a cidade e quero uma arte ou artesanato de recordação mas não tenho um portal de fácil acesso eu acabo saindo de mãos vazias.<br>
    Foi pensando nessa falta de visibilidade e numa valorização da cultura da região que o site foi construído. Atender a artistas da região de Jardim-MS


<div class="div2">
   <h1 class="h1xx" >Agradecimentos</h1> 
</div> 
<p style="width:100%">
Agradeçemos a todos os artistas que disponibilizaram um pouco do seu tempo para responder nosso questionários e especialemnte aos que apoiaram o projeto e 
    liberaram o uso de sua imagem no site, esse site foi feito para vocês mostrarem a todos a cultura e obras que vocês fazem mas não tem a verdadeira visibilidade.
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<style>
.div2{
        background-color:#1a1a1a;
        border-radius: 10px;
        width:100%;
        height:80px
}

.h1xx{
text-align: center;
}

h1{
    text-align:center;
    font-size: 60 px;
    width: 100%;
    margin-bottom: 20px;
    color:#48c3c7;
}

p{
    color:white;
    text-align:center;
    width: 100%;
}
</style>

@endsection
