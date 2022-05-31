<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;1,300;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <title>PaperTown Art</title>
</head>
<body class="body-home">

<div id="preloader">
    <div class="inner">
       <div class="bolas">
           <img src="img/1491.gif" alt="">
       </div>
    </div>
</div>

@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
         <div class="background">
        <img class="vetor1" src="img/Vector1.png" alt="detalhe">
        <img class="vetor2" src="img/Vector2.png" alt="detalhe">
        <img class="bolinhasRosa" src="img/BolinhasRosa.png" alt="detalhe">
        <img class="bolinhasVerde" src="img/BolinhasVerde.png" alt="detalhe">
        <img class="circleRosa" src="img/circleRosa.png" alt="detalhe">
        <img class="circleVerde" src="img/CircleVerde.png" alt="detalhe">
    </div>

    <div class="container-home">

<!-- <div class="redes-sociais">
   <a href=""> <img src="img/instagram.svg" alt="Instagram"></a>
   <a href=""> <img src="img/facebook.svg" alt="Facebook"></a>
   <a href=""> <img src="img/tik-tok.svg" alt="Tik Tok"></a>
</div> -->


<div class="texto1">
<h1>PaperTown Art</h1>
<h2>LINDAS CANECAS PERSONALIZADAS<span class="titulo-span">!</span></h2>
<h3>A Paper Town Art é uma loja de canecas personalizadas e relacionada ao mundo geek.
Acreditamos na magia dos presentes personalizados que com um toque de carinho e cuidado se tornam únicos e ainda mais especiais, assim como nossos clientes. 
</h3>
</div>

<section class="slide">
    <img class="foto" src="img/caneca1.jpeg" alt="caneca1">
    <img class="foto" src="img/caneca2.jpeg" alt="caneca2">
    <img class="foto" src="img/caneca3.jpeg" alt="caneca3">
    <img class="foto" src="img/caneca4.jpeg" alt="caneca4">
</section>

</div>

<div class="sobre-voce">

    <div class="imagem-artista">
    </div>
    <h3>Texto sobre a artista</h3>  
    
</div>

<div class="galeria">
    <div class="texto-galeria">
        <h2>De uma olhada nas nossas canecas, qualquer estilo por apenas <span class="spanh2" >R$49,90!</span></h2>
        <a class="link-personalizar" href="/teste">Personalize a sua</a>
    </div>
    <ul  class="fotos">
        <li><img src="img/caneca5.jpg" alt="caneca5"></li>
        <li><img src="img/caneca5.jpg" alt="caneca5"></li>
        <li><img src="img/caneca5.jpg" alt="caneca5"></li>
        <li><img src="img/caneca5.jpg" alt="caneca5"></li>
        <li><img src="img/caneca5.jpg" alt="caneca5"></li>
        <li><img src="img/caneca5.jpg" alt="caneca5"></li>
        <li><img src="img/caneca5.jpg" alt="caneca5"></li>
        <li><img src="img/caneca5.jpg" alt="caneca5"></li>
   </ul>
 
</div>

<div id="sobrenos">
        <input type="radio" class="slide-controller" name="slide" checked />
        <input type="radio" class="slide-controller" name="slide" />

    <div class="sobrenos-container slide-show" >

        <ul class="slides-list">

        <li class="papertown-sobrenos slides">
        
            <div class="titulo-sobrenos">
                <h2 class="logo-titulo-sobrenos">PaperTown Art <img src="img/logo.png" alt=""></h2>
                <h3>Sobre a empresa</h3>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero voluptate incidunt quam. Fugiat expedita dignissimos deleniti dolor in qui voluptas perferendis velit cupiditate incidunt sunt ut quae, consequuntur sed! Neque!</p>
            </div>

            <div class="cards">

                <div class="missao card-sobrenos">
                    <h2>Missão</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, enim. Aut reprehenderit
                             </p>
                </div>

                <div class="visao card-sobrenos">
                    
                        <h2>Visão</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, enim. Aut reprehenderit
                             </p>
                     </div>

                <div class="valores card-sobrenos">
                        <h2>Valores</h2>
                         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium, enim. Aut reprehenderit
                                 </p>
                    </div>
            </div> 

        </li>

        <li class="teles-da-sobrenos slides">

            <img src="img/logo.png" alt="">
        </li>
        </ul>

        
    </div>
    
</div>
<div id="contato">

    

</div>

<footer class="footer-login">
    <div class="footer-login-container">

                <p>Teles.DA</p>
            <div class="teles-da">      
                <a href="">
                <img src="img/instagram.svg" alt="Instagram">
                </a>
                <a href="">
                <img src="img/web.svg" alt="Web">
                </a>
                <a href="">
                <img src="img/email.svg" alt="Email">
                </a>
            </div>
            


        <div class="icones-apresentacao">
    <a href="https://www.flaticon.com/br/icones-gratis/instagram" target="_blank" title="instagram ícones">Instagram ícones criados por Freepik - Flaticon</a>
    <a href="https://www.flaticon.com/br/icones-gratis/whatsapp" target="_blank" title="whatsapp ícones">Whatsapp ícones criados por Freepik - Flaticon</a>
    <a href="https://www.flaticon.com/br/icones-gratis/facebook" target="_blank" title="facebook ícones">Facebook ícones criados por Freepik - Flaticon</a>  
    <a href="https://www.flaticon.com/br/icones-gratis/tiktok" target="_blank" title="tiktok ícones">Tiktok ícones criados por Freepik - Flaticon</a>  
    <a href="https://www.flaticon.com/br/icones-gratis/o-email" target="_blank" title="o email ícones">O email ícones criados por Freepik - Flaticon</a>
    <a href="https://www.flaticon.com/br/icones-gratis/pagina-da-web" title="página da web ícones">Página da web ícones criados por Freepik - Flaticon</a>
        </div>
    </div>
</footer>


<script src="//code.jivosite.com/widget/zQUHoE4g54" async></script>
@endsection
<script src="js/preloader.js"></script>
</body> 
</html>
