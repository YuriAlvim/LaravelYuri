<!doctype html>
<html lang="pt-br" class="h-100">
  <head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>MarbleCats | Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">

    <link rel="shortcut icon" href="{{ asset('img/Marblecats_logo2nobg') }}">

    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/marblecss.css') }}">
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    
  <div class="cover-container2 d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0" ></h3>
      <nav class="nav nav-masthead justify-content-center ">
        <a class="nav-link active" href="jogos.html">Jogos</a>
        <a class="nav-link active" href="novidades.html">Novidades</a>
        <a class="nav-link active" aria-current="page" href="index.html"><img src="img/MarbleCats_logo2nobg.png" alt="Logo da MarbleCats" id="logo"></a>
        <a class="nav-link active" href="equipe.html">Equipe</a>
        <a class="nav-link active" href="contato.html">Contato</a>
      </nav>
    </div>
  </header>

  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="carousel slide" id="carousel-205714" data-ride="carousel" data-interval="8000" data-pause="false" >
            <ol class="carousel-indicators">
              <li data-slide-to="0" data-target="#carousel-205714" class="active">
              </li>
              <li data-slide-to="1" data-target="#carousel-205714">
              </li>
              <li data-slide-to="2" data-target="#carousel-205714">
              </li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" alt="Carousel Bootstrap First" src="img/susuadventurebanner.png" />
                <div class="carousel-caption">
                  <h4 class="sombra">
                    Susu Adventure!
                  </h4>
                  <p class="sombra">
                   Confira já nosso mais novo jogo!
                  </p>
                  <p>
                    <a class="btn btn-large" href="jogos.html">Ler mais</a>
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" alt="Carousel Bootstrap Second" src="img/novidadesbanner.png" />
                <div class="carousel-caption">
                  <h4 class="sombra">
                    Temos novidades!
                  </h4>
                  <p class="sombra">
                    Vá à aba de novidades para saber tudo que aconteceu recentemente em nossa empresa
                  </p>
                  <p>
                    <a class="btn btn-large" href="novidades.html">Ler mais</a>
                  </p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" alt="Carousel Bootstrap Third" src="img/albionoffline.png" />
                <div class="carousel-caption">
                  <h4 class="sombra">
                    MMORPG... mas sem o MMO
                  </h4>
                  <p class="sombra">
                    Acompanhe o desenvonvimento deste projeto de pertinho :3
                  </p>
                  <p>
                    <a class="btn btn-large" href="#">Ler mais</a>
                  </p>
                </div>
              </div>
            </div> <a class="carousel-control-prev" href="#carousel-205714" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Voltar</span></a> <a class="carousel-control-next" href="#carousel-205714" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Avançar</span></a>
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

    <h4 class="subtitulo">Novidades</h4>

    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron card card-block bg-dark shadow-lg">
          <h2 class="sombra">
            Lançamento Recente!
          </h2>
          <p class="sombra">
            Conheça o mais novo jogo a ser lançado pela nossa empresa. <br> Confira mais notícias na aba de novidades!
          </p>
          <p>
            <a class="btn btn-large" href="#">Ler mais</a>
          </p>
        </div>
      </div>
    </div>

    <h4 class="subtitulo2">Jogos</h4>

    <div class="row caixas">
      <div class="col">
        <a href="jogos.html" class="cardi">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
          style="background-image: url('img/Aceitas2.png'); background-position: center; background-size: cover; ">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold sombra">Demo Albion Offline</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em">
                  <use xlink:href="#geo-fill" />
                </svg>
                <small>Preço: Grátis</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em">
                  <use xlink:href="#calendar3" />
                </svg>
                <small>Gênero: RPG mundo aberto</small>
              </li>
            </ul>
          </div>
        </div>
        </a>
      </div>
    
      <div class="col">
        <a href="jogos.html" class="cardi">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
            style="background-image: url('img/susuadventure.png'); background-position: center;  background-size: cover;">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              
              <ul class="d-flex list-unstyled mt-auto">
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em">
                    <use xlink:href="#geo-fill" />
                  </svg>
                  <small class="sombra">Preço: R$15,00</small>
                </li>
                <li class="d-flex align-items-center">
                  <svg class="bi me-2" width="1em" height="1em">
                    <use xlink:href="#calendar3" />
                  </svg>
                  <small class="sombra">Gênero: Aventura, RPG</small>
                </li>
              </ul>
            </div>
          </div>
        </a>
      </div>
      
    </div>
  </main>
  

  <footer class="mt-auto text-white-50">
    <p>Trabalho de TDS - SOP - Yuri / Gulherme / Yasmin / Gabryel</p>
  </footer>
</div>


    
  </body>
</html>