<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content='width=device-width, user-scalable=0' />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index, follow" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css" />
    <!--<link rel="stylesheet" href="assets/css/audio.css" />-->
    <link rel="stylesheet" href="assets/css/style.css" />
    <style>
      section.background {
        background-image: url('assets/image/fundo-desk.webp');
      }
      @media only screen and (min-width:320px) and (max-width:768px) {
        section.background {
          background-image: url('assets/image/fundo-mob.webp');
        }
        section.carousel {
          background-image: url('assets/image/fundo-carousel-mob.webp') !important;
        }
      }
      section.carousel {
        background-image: url('assets/image/fundo.webp');
      }
      section#elite {
        background-image: url('assets/image/fundo-carousel.webp');
      }
    </style>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="#"><img src='assets/image/logo.webp' height="65" alt='logo' /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <svg xmlns="http://www.w3.org/2000/svg" fill='#FFF' width="24" height="24" viewBox="0 0 24 24"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/></svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item home">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#programs">Programas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#team">Equipe</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#anuncio">Elite</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#eventos">Eventos</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <section class='background'>
      <div class="container">
        <div class='row'>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <p class='h3'>Nova Rádio Elite</p>
            <h1>Energia Positiva No Ar</h1>
            <p class='h5'>É da boa energia que pulsamos. É com ela que iremos inspirar cada vez mais nossos ouvintes.</p>
            <a href='' class='btn-gradient'>Ouvir agora</a>
          </div>
          <div class="audio-live">
            <div class="bootstrap one d-flex">
              <div class='live'>
                <div class='control d-flex'>
                  <div class='circleGreen'></div> 
                  <p class='txt'>Ao vivo:</p>
                </div>  
                <p class='h2'><strong>Roberto massa - Leilão de gado</strong></p>
              </div>
              <img src="assets/image/line-height.webp" alt="line vertical" class='line-vertical' />
            </div>
            <div class='control-mob'>
              <div class='control-play'>
                <div class='play-pause'>
                  <img id="podcast-play" src='assets/image/play.webp' alt='play icon' class='play icon' />
                  <img id="pause" src='assets/image/pause.webp' alt='play icon' class='pause icon' />
                </div>
              </div>
              <!--<div class="progress bootstrap two">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>-->
              <div class='audioTag relative'>
                <div class='absolute time'>
                  <span>14:00</span><span>15:00</span>
                </div>
              <input type="range" min="0" max="100" value="25" class="estilo" id="valor">
              </div>
            </div>
          </div>
            
        </div>
      </div>
    </section>
    <section id='programs'>
      <div class='container'>
        <div class="row flex-column">
          <div class='title'>
            <div class='titleInt'>
              <div class="control d-flex">
                <h3 class='blue-green'>Programação <span class='red'>Díaria</span></h3>
                <div class='circles-animate d-flex justify-content-around align-items-center'>
                  <div class="red one"></div>
                  <div class="red two"></div>
                  <div class="red three"></div>
                </div>
              </div>
              <p class='h5'>Fique por dentro dos novidades que a elite tem para os proximos dias</p>
            </div>
          </div>
          <div class='programs-week'>
            <div class='days-week dw'>
              <p class='h5'>Segunda</p>
              <p class='h5'>Terça</p>
              <p class='h5'>Quarta</p>
              <p class='h5'>Quinta</p>
              <p class='h5'>Sexta</p>
              <p class='h5'>Sábado</p>
              <p class='h5'>Domingo</p>
            </div>
            <div class='days-week-mob dw'>
              <div class='dayInt one'>
                <p class='h5'>Segunda</p>
                <p class='h5'>Terça</p>
                <p class='h5'>Quarta</p>
                <p class='h5'>Quinta</p>
              </div>
              <div class='dayInt'>
                <p class='h5'>Sexta</p>
                <p class='h5'>Sábado</p>
                <p class='h5'>Domingo</p>
              </div>
            </div>
            <div class='col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex'>
              <div class='col-sm-6 col-md-6 col-lg-6 one'>
                <div class='programsInt'>
                  <div class="aoVivo one"><p>Ao vivo</p></div>
                  <div class='d-flex hour'>
                    <div class='hourInt'>
                      <p class='h5'>12:00</p>
                      <p class='line'></p>
                      <p class='h5'>14:00</p>
                    </div>
                  </div>
                  <div class='d-flex onDuty'>
                    <div class='img'>
                      <img src="assets/image/image 31.webp" alt="imagem radialista" />
                    </div>
                    <div class='control'>
                      <div class='name'>
                        <p class='h4'><strong>Plantão de notícias</strong></p>
                        <p class='h6 red'>Adriano leal</p>
                      </div>
                      <div class='social d-flex'>
                        <p class='compartilhe'>Compartilhe:</p>
                        <div class='socialInt d-flex'>
                          <a href='https://www.facebook.com/'>
                            <img src='assets/image/facebook.webp' alt='icon facebook' />
                          </a>
                          <a href="https://twitter.com/">
                            <img src='assets/image/twitter.webp' alt='icon twitter' />
                          </a>
                          <a href="https://www.instagram.com/">
                            <img src='assets/image/instagram.webp' alt='icon instagram' />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class='col-sm-6 col-md-6 col-lg-6 two'>
                <div class='programsInt'>
                  <div class="aoVivo two"><p>Ao vivo</p></div>
                  <div class='d-flex hour'>
                    <div class='hourInt'>
                      <p class='h5'>12:00</p>
                      <p class='line'></p>
                      <p class='h5'>14:00</p>
                    </div>
                  </div>
                  <div class='d-flex onDuty'>
                    <div class='img'>
                      <img src="assets/image/image 31.webp" alt="imagem radialista" />
                    </div>
                    <div class='control'>
                      <div class='name'>
                        <p class='h4'><strong>Plantão de notícias</strong></p>
                        <p class='h6 red'>Adriano leal</p>
                      </div>
                      <div class='social d-flex'>
                        <p class='compartilhe'>Compartilhe:</p>
                        <div class='socialInt d-flex'>
                          <a href='https://www.facebook.com/'>
                            <img src='assets/image/facebook.webp' alt='icon facebook' />
                          </a>
                          <a href="https://twitter.com/">
                            <img src='assets/image/twitter.webp' alt='icon twitter' />
                          </a>
                          <a href="https://www.instagram.com/">
                            <img src='assets/image/instagram.webp' alt='icon instagram' />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class='col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex'>
              <div class='col-sm-6 col-md-6 col-lg-6 one'>
                <div class='programsInt'>
                  <div class="aoVivo three"><p>Ao vivo</p></div>
                  <div class='d-flex hour'>
                    <div class='hourInt'>
                      <p class='h5'>12:00</p>
                      <p class='line'></p>
                      <p class='h5'>14:00</p>
                    </div>
                  </div>
                  <div class='d-flex onDuty'>
                    <div class='img'>
                      <img src="assets/image/image 31.webp" alt="imagem radialista" />
                    </div>
                    <div class='control'>
                      <div class='name'>
                        <p class='h4'><strong>Plantão de notícias</strong></p>
                        <p class='h6 red'>Adriano leal</p>
                      </div>
                      <div class='social d-flex two'>
                        <p class='compartilhe'>Compartilhe:</p>
                        <div class='socialInt d-flex'>
                          <a href='https://www.facebook.com/'>
                            <img src='assets/image/facebook.webp' alt='icon facebook' />
                          </a>
                          <a href="https://twitter.com/">
                            <img src='assets/image/twitter.webp' alt='icon twitter' />
                          </a>
                          <a href="https://www.instagram.com/">
                            <img src='assets/image/instagram.webp' alt='icon instagram' />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class='col-sm-6 col-md-6 col-lg-6 two'>
                <div class='programsInt'>
                  <div class="aoVivo four"><p>Ao vivo</p></div>
                  <div class='d-flex hour'>
                    <div class='hourInt'>
                      <p class='h5'>12:00</p>
                      <p class='line'></p>
                      <p class='h5'>14:00</p>
                    </div>
                  </div>
                  <div class='d-flex onDuty'>
                    <div class='img'>
                      <img src="assets/image/image 31.webp" alt="imagem radialista" />
                    </div>
                    <div class='control'>
                      <div class='name'>
                        <p class='h4'><strong>Plantão de notícias</strong></p>
                        <p class='h6 red'>Adriano leal</p>
                      </div>
                      <div class='social d-flex'>
                        <p class='compartilhe'>Compartilhe:</p>
                        <div class='socialInt d-flex'>
                          <a href='https://www.facebook.com/'>
                            <img src='assets/image/facebook.webp' alt='icon facebook' />
                          </a>
                          <a href="https://twitter.com/">
                            <img src='assets/image/twitter.webp' alt='icon twitter' />
                          </a>
                          <a href="https://www.instagram.com/">
                            <img src='assets/image/instagram.webp' alt='icon instagram' />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class='button d-flex w-100'>
              <a href='#' class='btn-white red'>Programação completa <div class='arrow-right back-red'><img src='assets/image/arrow-right.webp' alt='arrow right white' /></div></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id='elite'>
      <img src='assets/image/conheca+.webp' alt="conheça mais background" id='conhecaMais' />
      <div class='container'>
        <div class='row'>
          <div class='col-sm-6 col-md-6 col-lg-6'>
            <div id="elite_history" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#elite_history" data-slide-to="0" class="active"></li>
                <li data-target="#elite_history" data-slide-to="1"></li>
                <li data-target="#elite_history" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/image/carousel.webp" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/image/carousel2.webp" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/image/carousel3.webp" alt="Third slide">
                </div>
              </div>
              <div class='controls'>
                <a class="carousel-control-prev" href="#elite_history" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#elite_history" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
          <div class='col-sm-6 col-md-6 col-lg-6 texto'>
            <img src="assets/image/line-cut.webp" alt="" class='line_cut'/>
            <h3>Conheça mais sobre como tudo começou! <img src="assets/image/line.webp" alt="" class='line'/></h3>
            <p class='txt'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla odio tellus, massa vulputate netus. Eu magna est cras volutpat donec mattis.</p>
            <p class="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla odio tellus, massa vulputate netus. Eu magna est cras volutpat donec mattis.</p>
            <a class='btn-transparent' href='#'>Leia mais</a>
          </div>
        </div>
      </div>
      <img src="assets/image/logo.webp" class='eliteLogo' alt="elite logo" />
    </section>
    <section id="team">
      <div class='container'>
        <div class='title d-flex flex-column'>
          <div class="control d-flex">
            <h2 class='blue-green'><span class='red'>Conheça</span> o nosso time</h2>
            <div class='circles-animate d-flex justify-content-around align-items-center'>
              <div class="red one"></div>
              <div class="red two"></div>
              <div class="red three"></div>
            </div>
          </div>
          <p class='h5'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla odio tellus, massa vulputate netus. Eu magna est</p>
        </div>
        <div class='row'>
          <div class='col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex edit'>
            <div class='col-sm-3 col-md-3'>
              <img src="assets/image/image 31.webp" class='imgTeam' alt="imagem de integrante da equipe" />
              <div class='nameTeam'>
                <p class='h6 red'>Jair cristo</p>
                <p class='function'>Locutor</p>
              </div>
            </div>
            <div class='col-sm-3 col-md-3'>
              <img src="assets/image/image 31.webp" class='imgTeam' alt="imagem de integrante da equipe" />
              <div class='nameTeam'>
                <p class='h6 red'>Jair cristo</p>
                <p class='function'>Locutor</p>
              </div>
            </div>
            <div class='col-sm-3 col-md-3'>
              <img src="assets/image/image 31.webp" class='imgTeam' alt="imagem de integrante da equipe" />
              <div class='nameTeam'>
                <p class='h6 red'>Jair cristo</p>
                <p class='function'>Locutor</p>
              </div>
            </div>
            <div class='col-sm-3 col-md-3'>
              <img src="assets/image/image 31.webp" class='imgTeam' alt="imagem de integrante da equipe" />
              <div class='nameTeam'>
                <p class='h6 red'>Jair cristo</p>
                <p class='function'>Locutor</p>
              </div>
            </div>  
          </div>
          <div class='col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex edit'>
            <div class='col-sm-3 col-md-3'>
              <img src="assets/image/image 31.webp" class='imgTeam' alt="imagem de integrante da equipe" />
              <div class='nameTeam'>
                <p class='h6 red'>Jair cristo</p>
                <p class='function'>Locutor</p>
              </div>
            </div>
            <div class='col-sm-3 col-md-3'>
              <img src="assets/image/image 31.webp" class='imgTeam' alt="imagem de integrante da equipe" />
              <div class='nameTeam'>
                <p class='h6 red'>Jair cristo</p>
                <p class='function'>Locutor</p>
              </div>
            </div>
            <div class='col-sm-3 col-md-3'>
              <img src="assets/image/image 31.webp" class='imgTeam' alt="imagem de integrante da equipe" />
              <div class='nameTeam'>
                <p class='h6 red'>Jair cristo</p>
                <p class='function'>Locutor</p>
              </div>
            </div>
            <div class='col-sm-3 col-md-3'>
              <img src="assets/image/image 31.webp" class='imgTeam' alt="imagem de integrante da equipe" />
              <div class='nameTeam'>
                <p class='h6 red'>Jair cristo</p>
                <p class='function'>Locutor</p>
              </div>
            </div>  
        </div>
        </div>
      </div>
    </section>
    <section class='carousel'>
      <div class='container'>
        <div class='title d-flex justify-content-center align-items-center'>
          <p class='h3'>Conheça o nossa estrutura!</p>
        </div>
        <div class='row'>
          <div class='col-sm-10 col-md-10 col-lg-10'>
            <ul id="vertical">
              <li data-thumb="assets/image/slider/cS-1.jpg">
                <img src="assets/image/slider/cS-1.jpg" />
              </li>
              <li data-thumb="assets/image/slider/cS-2.jpg">
                <img src="assets/image/slider/cS-2.jpg" />
              </li>
              <li data-thumb="assets/image/slider/cS-3.jpg">
                <img src="assets/image/slider/cS-3.jpg" />
              </li>
              <li data-thumb="assets/image/slider/cS-4.jpg">
                <img src="assets/image/slider/cS-4.jpg" />
              </li>
              <li data-thumb="assets/image/slider/cS-5.jpg">
                <img src="assets/image/slider/cS-5.jpg" />
              </li>
              <li data-thumb="assets/image/slider/cS-6.jpg">
                <img src="assets/image/slider/cS-6.jpg" />
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="anuncio" class="anuncio">
      <img src="assets/image/lateral-left.webp" alt="imagem lado esquerdo" class='image-left' />
      <img src="assets/image/lateral-right.webp" alt="imagem lado direito" class='image-right' />
      <div class='container'>
        <div class="title">
          <img src='assets/image/line-red.webp' alt="line red" class="lineRed one" />
          <div class="control d-flex">
            <p class='h2 red'>Motivos para anunciar com a gente!</p>
            <div class='circles-animate d-flex justify-content-around align-items-center'>
              <div class="red one"></div>
              <div class="red two"></div>
              <div class="red three"></div>
            </div>
          </div>
          <img src='assets/image/line-red.webp' alt="line red" class="lineRed two" />
        </div>
        <div class='row'>
          <div class='col-sm-5 col-md-5 col-lg-5'>
            <h4 class='red'>Nossa <span class='blue-green'>abrangência:</span></h4>
            <div class='control_numb one'>
              <p class='txt red'>Sudoeste do <strong>Paraná</strong></p>
              <div class='numbers'>
                <div class='numbersInt one back-blue'>
                  <p class='h1 back-blue'>46</p>
                  <p class='txt'>Municípios</p>
                </div>
                <div class='numbersInt two back-green'>
                  <p class='h1 back-green'>727,161</p>
                  <p class='txt'>habitantes</p>
                </div>
              </div>
            </div>
            <div class='control_numb two'>
              <p class='txt red'>Oeste do <strong>Santa Catarina</strong></p>
              <div class='numbers'>
                <div class='numbersInt one back-blue'>
                  <p class='h1 back-blue'>19</p>
                  <p class='txt'>Municípios</p>
                </div>
                <div class='numbersInt two back-green'>
                  <p class='h1 back-green'>277,068</p>
                  <p class='txt'>habitantes</p>
                </div>
              </div>
            </div>
            <p class='red d-flex'>
              <img src='assets/image/half-circle.webp' class='half-circle' alt='half circle img' />
              <strong>Potencia de <span class='blue-green'>15.8kw</span></strong>
            </p>
          </div>
          <div class='col-sm-7 col-md-7 col-lg-7'>
            <img src='assets/image/map.webp' alt='mapa' class='map' />
          </div>
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex">
            <img src="assets/image/grafico-desk.webp" alt="graphic imagem" class="w-100" id="grafico" />
          </div>
        </div>
      </div>
    </section>
    <section id="eventos" class='eventos'>
      <div class='container'>
        <div class='title'>
          <div class="control d-flex">
            <p class='h2 red'><strong>Elite</strong> <span class='blue-green'>Eventos</span></p>
            <div class='circles-animate d-flex justify-content-around align-items-center'>
              <div class="red one"></div>
              <div class="red two"></div>
              <div class="red three"></div>
            </div>
          </div>
          <p class='h5'>Acompanhe os principais eventos de Pato Branco e Região</p>
        </div>
        <div class='event-week d-flex justify-content-around ew'>
          <p class='red'>Segunda</p>
          <p class='red'>Terça</p>
          <p class='red'>Quarta</p>
          <p class='red'>Quinta</p>
          <p class='red'>Sexta</p>
          <p class='red'>Sábado</p>
          <p class='red'>Domingo</p>
        </div>
        <div class='event-week-mob d-flex justify-content-around ew'>
          <div class='eventInt '>
            <p class='red'>Segunda</p>
            <p class='red'>Terça</p>
            <p class='red'>Quarta</p>
            <p class='red'>Quinta</p>
          </div>
          <div class='eventInt'>
            <p class='red'>Sexta</p>
            <p class='red'>Sábado</p>
            <p class='red'>Domingo</p>
          </div>
        </div>
        <div class='row flex-column'>
          <div class='control d-flex'>
            <div class='col-sm-6 col-md-6 col-lg-6' id="one" style="background-image: url('assets/image/eventos2.webp');">
              <p class='back-red event'>
                <span class='h2'><strong>09:00 - 14:00</strong></span>
              </p>
              <div class='centralizar'>
                <p class='h2 event-name'><strong>Rodizio de carnes</strong></p>
                <div class='line-grey'></div>
                <p class='h2 hour'><strong>09:00 - 14:00</strong></p>
                <p class='txt_none'>Lorem ipsum dolor sit amet, consectetur adipiscing eum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-6 col-lg-6' id="two" style="background-image: url('assets/image/eventos1.webp');">
              <p class='back-red event'>
                <span class='h2'><strong>09:00 - 14:00</strong></span>
              </p>
              <div class='centralizar'>
                <p class='h2 event-name'><strong>Festival Gastronomico</strong></p>
                <div class='line-grey'></div>
                <p class='h2 hour'><strong>10:00 - 18:00</strong></p>
                <p class='txt_none'>Lorem ipsum dolor sit amet, consectetur adipiscing eum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>
          <div class='control d-flex'>
            <div class='col-sm-6 col-md-6 col-lg-6' id="three" style="background-image: url('assets/image/eventos3.webp');">
              <p class='back-red event'>
                <span class='h2'><strong>09:00 - 14:00</strong></span>
              </p>
              <div class='centralizar'>
                <p class='h2 event-name'><strong>Show ao vivo</strong></p>
                <div class='line-grey'></div>
                <p class='h2 hour'><strong>19:00 - 22:00</strong></p>
                <p class='txt_none'>Lorem ipsum dolor sit amet, consectetur adipiscing eum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class='col-sm-6 col-md-6 col-lg-6' id="four" style="background-image: url('assets/image/eventos.webp');">
              <p class='back-red event'>
                <span class='h2'><strong>09:00 - 14:00</strong></span>
              </p>
              <div class='centralizar'>
                <p class='h2 event-name'><strong>Inauguração</strong></p>
                <div class='line-grey'></div>
                <p class='h2 hour'><strong>11:00 - 12:00</strong></p>
                <p class='txt_none'>Lorem ipsum dolor sit amet, consectetur adipiscing eum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class='container-fluid justify-content-center'>
        <div class='row'>
          <div class='col-sm-5 col-md-5 col-lg-5 col-xl-5'>
            <img src="assets/image/logo.webp" alt="logo rodape" class="logo-rodape" />
            <p class="txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo purus amet odio non at dapibus eu. Nullam non nunc adipiscing vel, nam egestas fermentum tristique elementum. </p>
            <div class='social-footer d-flex'>
              <a href='https://www.facebook.com/' class='facebook-footer'>
                <img src="assets/image/facebook-white.webp" alt="facebook icon" />
              </a>
              <a href="https://twitter.com/" class='twitter-footer'>
                <img src="assets/image/twitter-white.webp" alt="twitter icon" />
              </a>
              <a href="https://www.instagram.com/" class='instagram-footer'>
                <img src="assets/image/instagram-white.webp" alt="instagram icon" />
              </a>
            </div>
          </div>
          <div class='col-sm-7 col-md-7 col-lg-7 col-xl-7 d-flex' style="background-image: url('assets/image/footer-fundo.webp');">
            <div class="col-sm-3 col-md-3 d-flex flex-column align-items-start explore">
              <div class='mic d-flex relative'>
                <img src="assets/image/mic_red.webp" alt="mic icon" class="mic-icon" />
                <p class='h5'><strong>Expore mais</strong></p>
              </div>
              <a href="#">
                <img src='assets/image/arrow-right.webp' class='arrow-footer' alt="" />
                Escute Ao vivo
              </a>
              <a href="#">
                <img src='assets/image/arrow-right.webp' class='arrow-footer' alt="" />
                Programação
              </a>
              <a href="#">
                <img src='assets/image/arrow-right.webp' class='arrow-footer' alt="" />
                Nosso time
              </a>
              <a href="#">
                <img src='assets/image/arrow-right.webp' class='arrow-footer' alt="" />
                Anuncie aqui
              </a>
              <a href="#">
                <img src='assets/image/arrow-right.webp' class='arrow-footer' alt="" />
                Eventos
              </a>
            </div>
            <div class="col-sm-3 col-md-3 d-flex flex-column align-items-start">
              <div class='mic d-flex relative'>
                <img src="assets/image/mic_red.webp" alt="mic icon" class="mic-icon" />
                <p class='h5'><strong>Sobe a Elite Fm</strong></p>
              </div>
              <p class='txt two'>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo purus amet odio non at dapibus eu.’’</p>
              <a href="#">
                <img src='assets/image/arrow-right.webp' class='arrow-footer' alt="" />
                Ler mais
              </a>
            </div>
            <div class="col-sm-3 col-md-3 d-flex flex-column align-items-start">
              <div class='mic d-flex relative'>
                <img src="assets/image/mic_red.webp" alt="mic icon" class="mic-icon" />
                <p class='h5'><strong>Contatos</strong></p>
              </div>
              <a href="#">
                <img src='assets/image/local-white.webp' class='local-footer' alt="" />
                Pato Branco - PR, 85501-140
              </a>
              <a href="tel:554635246768">
                <img src='assets/image/phone-white.webp' class='phone-footer' alt="" />
                (46) 3524-6768
              </a>
              <a href="mailto:Elitefm@gmail.com">
                <img src='assets/image/email.webp' class='email-footer' alt="" />
                Elitefm@gmail.com
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>