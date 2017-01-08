<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $titulo or 'HANSENAPP'}}</title>
  <meta name="author" description="Jardel Belisario">
  
  <link href="{{url('site/css/estilo.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,700,300,500" rel="stylesheet" type="text/css">
  <link href="{{url('site/css/style.css')}}" rel="stylesheet">
  <link href="{{url('font-awesome.min.css')}}" rel="stylesheet">

</head>
<body>

  <div class="hp-content">
    <div class="hp-content-block">
        <h1 class="hp-h1">Bem vindo(a) ao Projeto</h1>
        <h1 class="hp-h1">
           <span class="hp-titulo-hansenapp">
              <span class="hp-titulo-hansen hp-h1">Hansen</span><span class="titulo-app">App</span>
          </span></h1>
    </div>
    <div class="hp-content-block-ul hp-flex_text hp-text-slider">
      <ul class="hp-slides">
          <li>Hanseníase tem Cura!!</li>
          <li>Aplicativo de auxílio a profissionais da saúde no controle à Hanseníase.</li>
      </ul>
    </div> 
    <div class="hp-content-block-link">
     
      <a href="#" class="hp-content-block-a" data-toggle="modal" data-target="#myModalHanseniase">O que é Hanseníse?</a>
      <a href="#" class="hp-content-block-a" data-toggle="modal" data-target="#myModalCausa">O que Causa?</a>
      <a href="#" class="hp-content-block-a" data-toggle="modal" data-target="#myModalSintomas">Quais os Sintomas?</a>
      <a href="#" class="hp-content-block-a" data-toggle="modal" data-target="#myModalTratamento">Qual o Tratamento?</a>
      <a href="#" class="hp-content-block-a" data-toggle="modal" data-target="#myModalPrevencao">Como Prevenir?</a>
       <a href="#" class="hp-content-block-a" data-toggle="modal" data-target="#myModalSobre">Sobre o projeto!</a>
     </div>
      
      @include('site.modais.sobre')
      @include('site.modais.hanseniase')
      @include('site.modais.causa')
      @include('site.modais.sintomas')
      @include('site.modais.tratamento')
      @include('site.modais.prevencao')

     <p class="hp-feito-por">Desenvolvido por: Jardel Belisário</p>
  </div>
  <div class="fullscreen-bg">
      <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
          
          <source src="{{url('site/video/Smartphone2.mp4')}}" type="video/mp4">
          
      </video>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{url('site/js/bootstrap.min.js')}}"></script>

  <script src="{{url('site/js/jquery.localScroll.min.js')}}"></script>
  <script src="{{url('site/js/jquery.nav.js')}}"></script>
  <script src="{{url('site/js/owl.carousel.js')}}"></script>
  <script src="{{url('site/js/jquery.magnific-popup.js')}}"></script>
  <script src="{{url('site/js/jquery.parallax.js')}}"></script>
  <script src="{{url('site/js/jquery.flexslider-min.js')}}"></script>
  <script src="{{url('site/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{url('site/js/matchMedia.js')}}"></script>
  <script src="{{url('site/js/script.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
  <script src="{{url('site/js/wow.js')}}"></script>
  <script src="{{url('site/js/easing.js')}}"></script>

  <script>
      $(function(){

      //seleciona o elemento video pelo ID "video"
      var video = document.getElementById("hp-video");

      //Verifica se o navegador possui suporte para dar play no video
      video.addEventListener( "canplay", function() {
      //Chama o método play
      video.play();
      });

  });

  </script>
</body>
</html>