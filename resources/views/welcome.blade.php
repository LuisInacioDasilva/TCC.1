<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Papertown Art</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;1,300;1,500&display=swap" rel="stylesheet">
    </head>

    
    <body class="antialiased">
    <div id="preloader">
    <div class="inner">
    <img class="gif" src="img/1491.gif" alt="loading">
    </div>
    </div>
    <div class="firework"></div>

<div class="firework">
</div>
<div class="firework">
    
</div>
<div class="imagem-logo-welcome"> 
  <img src="img/Logo-big.png" alt="">

  
</div>

<h1 class="titulo-paper" style="color:white; margin:100px 0; font-family:"> <div class="flip_letters">
   <span style="--flip:1">P</span>
   <span style="--flip:2">a</span>
   <span style="--flip:3">p</span>
   <span style="--flip:4">e</span>
   <span style="--flip:5">r</span>
   <span style="--flip:6"> </span>
   <span style="--flip:6">T</span>
   <span style="--flip:7">o</span>
   <span style="--flip:8">w</span>
   <span style="--flip:9">n</span>
   <span style="--flip:10"> </span>
   <span style="--flip:11">A</span>
   <span style="--flip:12">r</span>
   <span style="--flip:13">t</span>
  </div>
  
</h1>
  <h3 class="h3-paper">
    Canecas Personalizadas! 
  </h3>

  <div class="entre-welcome">
<div>
  <a href="{{ route('login')}}">Entre</a>
</div>
<p>ou</p>
<div>
  <a href="{{ route('register') }}">Cadastre-se</a>
</div>
</div>

</body>



<style>
  .entre-welcome div a, .entre-welcome p{
    text-decoration:none;
    color:black;
    font-family:"Poppins";
    font-weight: bold ;
    font-size:1.5rem;

  }

  .entre-welcome div{
    margin:0 5px;
    font-family:"Poppins";
    font-weight: bold ;
    font-size:1.5rem;
  }
  .entre-welcome{
    margin:25px auto;
    align-items:center;
    display:flex;
    animation:  entre-welcome  5s forwards;
  }
  @keyframes entre-welcome  {
  0% {
    opacity: 0;
    transform: translate3d(0px, 90px, 0);
  }
  80% {
    opacity: 0;
    transform: translate3d(0px, 90px, 0);
  }
  100% {
    opacity: 1;
    transform: translate3d(0, 0px, 0);
  }}
  .imagem-logo-welcome img{
    animation: surgir-img 1s forwards;
    margin:25px auto;
    width: 200px;
  }
    .antialiased{
      display:flex;
        background: white;
        font-family:"Nunito";
        overflow: hidden !important;
        flex-direction:column;
        align-items:center;
    }
     .flip_letters {
    position: relative;
    text-align:center:  
  }
  .h3-paper{
    margin-top:50PX;
    font-size: 2rem;
    font-family:"Poppins";
    font-weight: bold ;
    animation: surgir-h2 4s forwards;
  }
  .titulo-paper{
    margin:0 auto !important;
    animation: surgir 3s forwards;

  }
  .flip_letters span {
    font-size: 5rem;
    position: relative;
    display: inline-block;
    color: pink;
    font-weight: bold ;
    animation: flip 3s infinite;
    animation-delay: calc(.2s * var(--flip));
  }
  @keyframes surgir  {
  0% {
    opacity: 0;
    transform: translate3d(80px, 0px, 0);
  }
  40% {
    opacity: 0;
    transform: translate3d(80px, 0px, 0);
  }
  100% {
    opacity: 1;
    transform: translate3d(0, 0px, 0);
  }}
  @keyframes surgir-h2  {
  0% {
    opacity: 0;
    transform: translate3d(-80px, 0px, 0);
  }
  60% {
    opacity: 0;
    transform: translate3d(-80px, 0px, 0);
  }
  100% {
    opacity: 1;
    transform: translate3d(0, 0px, 0);
  }
}
@keyframes surgir-img  {
  from {
    opacity: 1;
    transform: translate3d(60px, 0px, 0);
  }
  to {
    opacity: 1;
    transform: translate3d(0, 0px, 0);
  }
}

  @keyframes flip {
    0%{
      transform: translate3d(0, 0px, 0);
    }
    50% {
      transform: translate3d(0, 20px, 0);
    }
    100%{
      transform: translate3d(0, 0px, 0);
    }
  }
    body {
  background: 
    linear-gradient(#0007, #0000),
    #123;
  margin: 0;
  height: 100vh;
  overflow: hidden;
}

@keyframes firework {
  0% { transform: translate(var(--x), var(--initialY)); width: var(--initialSize); opacity: 1; }
  50% { width: 0.5vmin; opacity: 1; }
  100% { width: var(--finalSize); opacity: 0; }
}

/* @keyframes fireworkPseudo {
  0% { transform: translate(-50%, -50%); width: var(--initialSize); opacity: 1; }
  50% { width: 0.5vmin; opacity: 1; }
  100% { width: var(--finalSize); opacity: 0; }
}
 */
.firework,
.firework::before,
.firework::after
{
  --initialSize: 0.5vmin;
  --finalSize: 45vmin;
  --particleSize: 1vmin;
  --color1: pink;
  --color2:rgb(40, 251, 184);
  --color3: grey;
  --color4: #ff4661;
  --color5: gold;
  --color6:#1332f9;
  --y: -30vmin;
  --x: -50%;
  --initialY: 60vmin;
  content: "";
  animation: firework 2s infinite;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, var(--y));
  width: var(--initialSize);
  aspect-ratio: 1;
  background: 
    
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 0% 0%,
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 100% 0%,
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 100% 100%,
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 0% 100%,
    
    
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 50% 0%,
    radial-gradient(circle, var(--color2) var(--particleSize), #0000 0) 100% 50%,
    radial-gradient(circle, var(--color3) var(--particleSize), #0000 0) 50% 100%,
    radial-gradient(circle, var(--color4) var(--particleSize), #0000 0) 0% 50%,
    
    /* bottom right */
    radial-gradient(circle, var(--color5) var(--particleSize), #0000 0) 80% 90%,
    radial-gradient(circle, var(--color6) var(--particleSize), #0000 0) 95% 90%,
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 90% 70%,
    radial-gradient(circle, var(--color2) var(--particleSize), #0000 0) 100% 60%,
    radial-gradient(circle, var(--color3) var(--particleSize), #0000 0) 55% 80%,
    radial-gradient(circle, var(--color4) var(--particleSize), #0000 0) 70% 77%,
    
    /* bottom left */
    radial-gradient(circle, var(--color5) var(--particleSize), #0000 0) 22% 90%,
    radial-gradient(circle, var(--color6) var(--particleSize), #0000 0) 45% 90%,
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 33% 70%,
    radial-gradient(circle, var(--color2) var(--particleSize), #0000 0) 10% 60%,
    radial-gradient(circle, var(--color3) var(--particleSize), #0000 0) 31% 80%,
    radial-gradient(circle, var(--color4) var(--particleSize), #0000 0) 28% 77%,
    radial-gradient(circle, var(--color5) var(--particleSize), #0000 0) 13% 72%,
    
    /* top left */
    radial-gradient(circle, var(--color6) var(--particleSize), #0000 0) 80% 10%,
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 95% 14%,
    radial-gradient(circle, var(--color2) var(--particleSize), #0000 0) 90% 23%,
    radial-gradient(circle, var(--color3) var(--particleSize), #0000 0) 100% 43%,
    radial-gradient(circle, var(--color4) var(--particleSize), #0000 0) 85% 27%,
    radial-gradient(circle, var(--color5) var(--particleSize), #0000 0) 77% 37%,
    radial-gradient(circle, var(--color6) var(--particleSize), #0000 0) 60% 7%,
    
    /* top right */
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 22% 14%,
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 45% 20%,
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 33% 34%,
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 10% 29%,
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 31% 37%,
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 28% 7%,
    radial-gradient(circle, var(--color1) var(--particleSize), #0000 0) 13% 42%
    ;
  background-size: var(--initialSize) var(--initialSize);
  background-repeat: no-repeat;
}

.firework::before {
  --x: -50%;
  --y: -50%;
  --initialY: -50%;
/*   transform: translate(-20vmin, -2vmin) rotate(40deg) scale(1.3) rotateY(40deg); */
  transform: translate(-50%, -50%) rotate(40deg) scale(1.3) rotateY(40deg);
/*   animation: fireworkPseudo 2s infinite; */
}

.firework::after {
  --x: -50%;
  --y: -50%;
  --initialY: -50%;
/*   transform: translate(44vmin, -50%) rotate(170deg) scale(1.15) rotateY(-30deg); */
  transform: translate(-50%, -50%) rotate(170deg) scale(1.15) rotateY(-30deg);
/*   animation: fireworkPseudo 2s infinite; */
}

.firework:nth-child(2) {
  --x: 30vmin;
}

.firework:nth-child(2),
.firework:nth-child(2)::before,
.firework:nth-child(2)::after {
  --color1: pink;
  --color2: violet;
  --color3: fuchsia;
  --color4: orchid;
  --color5: plum;
  --color6: lavender;  
  --finalSize: 40vmin;
  left: 30%;
  top: 60%;
  animation-delay: -0.25s;
}

.firework:nth-child(3) {
  --x: -30vmin;
  --y: -50vmin;
}

.firework:nth-child(3),
.firework:nth-child(3)::before,
.firework:nth-child(3)::after {
  --color1: cyan;
  --color2: lightcyan;
  --color3: lightblue;
  --color4: PaleTurquoise;
  --color5: SkyBlue;
  --color6: lavender;
  --finalSize: 35vmin;
  left: 70%;
  top: 60%;
  animation-delay: -0.4s;
}


</style>

    </body>
    <script src="js/slide.js"></script>
    <script src="js/preloader.js"></script>
    
</html>
