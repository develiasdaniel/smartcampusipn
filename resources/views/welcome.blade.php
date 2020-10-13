<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Creative - Start Bootstrap Theme</title>


  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="vendor/bootstrap/css/creative.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template -->
  <link href="vendor/bootstrap/css/landing-page.css" rel="stylesheet">
  
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" >
    <div class="collapse navbar-collapse" id="">
        <img src="img/logocic.png">
    </div>
    <div class="container">      
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Smart Campus</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#records">Antecedentes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#architecture">Arquitectura</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#justification">Justificación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#goals">Objetivos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#modules">Módulos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
          </li>
        </ul>
        &nbsp; &nbsp; &nbsp;
        <ul class="navbar-nav">
          @if(Route::has('login'))  
                @auth
                    <li class="nav-item">
                        <a class="btn btn-small btn-primary" href="{{ url('/home') }}">Home</a>
                    </li>  
                @else
                    <li class="nav-item">
                        <a class="btn btn-small btn-primary" href="{{ route('login') }}">Sign In</a>
                    </li>
                    &nbsp; &nbsp;
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn btn-small btn-primary" href="{{ route('register') }}">Sign Up</a>
                        </li>
                    @endif
                @endauth
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Bienvenido al Campus Inteligente IPN Zacatenco</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">“Smart University: Es un modelo de  
                      universidad que mejora
          la calidad de vida haciendo uso intensivo, global, eficiente y
          sostenible de las TI para interconectar todos los actores y
          servicios en beneficio de toda la comunidad”
          </p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#records">Continua leyendo</a>
        </div>
      </div>
    </div>
  </header>

  <!-- records Section -->
  <section class="page-section bg-dark" id="records">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Antecedentes</h2>
          <hr class="divider light my-4">
          <p class="text-white">El  Instituto Politécnico Nacional  
              cuenta  con infraestructura similar 
              a las de  cualquier urbe: cuenta  con 
              calles, accesos peatonales  y viales, 
              estacionamientos, edificios,  
              luminarias, infraestructura de  
              comunicaciones, gestión de  aguas 
              y residuos, centro  médico, 
              instalaciones deportivas, 
              cafeterías, jardines, y actualmente 
              enfrenta  los mismos  retos y 
              necesidades que las universidades 
              y ciudades  modernas</p>
          <hr class="divider light my-4">
          <p class="text-white">Es  por eso que desde el  Instituto 
              Politécnico Nacional  entendemos  
              que es  necesario apostar por un  
              proyecto  de  innovación  hacia las 
              universidades del futuro, que sirva 
              tanto para  el  propio  Instituto como  
              para  llevarlo  a la  CDMX  o cualquier 
              otra  ciudad</p>
        </div>
      </div>
    </div>
  </section>

  <!-- architecture Section -->
  <section class="page-section" id="architecture">
    <div class="container">
      <h2 class="text-center mt-0">Arquitectura de una Ciudad Inteligente</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <img src="img/cielo.svg" class="svg-arquitecture">
            <h3 class="h4 mb-2">Capa de Aplicación</h3>
            <p class="text-muted mb-0">Aplicaciones con información en tiempo real de condiciones ambientales y de contaminanción, movilidad inteligente</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <img src="img/base-de-datos.svg" class="svg-arquitecture">
            <h3 class="h4 mb-2">Capa de datos</h3>
            <p class="text-muted mb-0">Base de datos de información urbana con información geoespacial, información de la población, fusión de datos.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <img src="img/comunicaciones.svg" class="svg-arquitecture">
            <h3 class="h4 mb-2">Capa de conectividad</h3>
            <p class="text-muted mb-0">A través de infraestructura TIC de la ciudad de México: hotspot, WiFi instalados en espacios públicos, Microondas, etc.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <img src="img/circulo.svg" class="svg-arquitecture">
            <h3 class="h4 mb-2">Capa de sensado de Infraestructura urbana</h3>
            <p class="text-muted mb-0">Sistema embebido de monitoreo instalado en autobuses y/o espacios públicos</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/cic2.png">
            <img class="img-fluid portfolio-size" src="img/portfolio/cic2.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Sistema embebido
              </div>
              <div class="project-name">
                Sensores para recopicaión de datos
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/cuadro_cic.jpg">
            <img class="img-fluid portfolio-size" src="img/portfolio/cuadro_cic.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Capa de conectividad
              </div>
              <div class="project-name">
                hospot WiFi, Microondas
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/pcic.jpg">
            <img class="img-fluid portfolio-size" src="img/portfolio/pcic.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Decisiones inteligentes
              </div>
              <div class="project-name">
                Estadísticas y análisis,fusión de datos
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/cic2.png">
            <img class="img-fluid portfolio-size" src="img/portfolio/cic2.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Sistema embebido
              </div>
              <div class="project-name">
                Sensores para recopicaión de datos
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/cuadro_cic.jpg">
            <img class="img-fluid portfolio-size" src="img/portfolio/cuadro_cic.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Capa de conectividad
              </div>
              <div class="project-name">
                hospot WiFi, Microondas
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/pcic.jpg">
            <img class="img-fluid portfolio-size" src="img/portfolio/pcic.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Decisiones inteligentes
              </div>
              <div class="project-name">
                Estadísticas y análisis,fusión de datos
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- justification section -->
  <section class="page-section bg-dark text-white" id="justification">
    <div class="container text-center">
      <h2 class="mb-4">¿Por qué se necesita?</h2>
      <p>Aplicar  las características “Smart” al  Campus  permite asegurar  
          un  mejor funcionamiento  tanto académico,  operativo y 
          principalmente  orientado a la  mejora  de  calidad de  vida  de  la  
          comunidad politécnica.  Coadyuva  al  desarrollo  de  políticas centradas en: IT-educación, IT-infraestructura, IT-economía,  ITgobernanza</p>
      <p>El desarrollo  de  las actividades de  investigación y docencia  de  
          la  propuesta permitirán  ahondar en  la  medición  y evaluación  
          de  las características citadas y la  creación  de  una “maqueta  de  
          ciudad  inteligente”, capaz de  ser transferida llave en  mano  
          para  su  empleo  y aprovechamiento en  otros ámbitos,  en  
          beneficio de  los ciudadanos.         
      </p>
    </div>
  </section>

  
  <!-- goals section -->
  <section class="testimonials bg-light text-center" id="goals">
    <div class="container">
      <h2 class="text-center mt-0">Objetivos del Campus Inteligente</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/goals1.jpg" alt="">
            </div>
            <h3>Primero</h3>
            <p class="lead mb-0">Contar con un  espacio suficiente  para  establecer  una maqueta 
              donde se  implementen y evalúen,  en  circunstancias  reales, 
              nuevas  tecnologías   dirigidas a la  creación  de  una ciudad  
              inteligente.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/goals2.jpg" alt="">
            </div>
            <h3>Segundo</h3>
            <p class="lead mb-0">Utilizar la  infraestructura instalada y los procesos  de  evaluación para  apoyar  la  formación de  nuevos  ingenieros  especializados  en  la  materia,  así como  la  investigación y desarrollo  de  nuevas  
            soluciones  tecnológicas. </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/goals3.jpg" alt="">
            </div>
            <h3>Tercero</h3>
            <p class="lead mb-0">El  proyecto  esta  enfocado  a ofrecer servicios a la  comunidad que realiza sus tareas  cotidianas  en  el  campus  académico del IPN.   Estos  servicios podrían extenderse  a las zonas aledañas  al  campus. </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modules Showcases -->
  <section class="showcase" id="modules">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/seguridadfisica.png');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Seguridad física de las personas y sus bienes</h2>
          <p class="lead mb-0">
            <li class="lead mb-0">
              Poste de emergencia/botón de  pánico (personas enfermas, en  crisis)
            </li>
            <li class="lead mb-0">
              Protección  civil, (fugas  de  gases)
            </li>
            <li class="lead mb-0">
              Monitoreo de edificios/ espectaculares (sismos)
            </li>
            <li class="lead mb-0">
              Sendero seguro
            </li>
            <li class="lead mb-0">
              Vigilancia  de  motos y bicicletas
            </li>
            <li class="lead mb-0">
              Reconocimiento facial
            </li>
            <li class="lead mb-0">
              Reconocimiento  de placas
            </li>
            <li class="lead mb-0">
              Drones  para atención  de emergencias
            </li>
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/monitoreo-calidad-de-aire.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Medio ambiente </h2>
          <p class="lead mb-0">
            <li class="lead mb-0">
              CALIDAD DEL AIRE  
              UPIBI/ESIQIE/COV/
              ALERGENOS.
            </li>
            <li class="lead mb-0">
              RUIDO (SENSORES 
              UBICADOS  EN  ZONAS 
              ALEDAÑAS  AL  
              CAMPUS)
            </li>
            <li class="lead mb-0">
              CALIDAD DEL AGUA  
              (MEDICIÓN DE  LOS 
              PARÁMETROS  
              RELACIONADOS).
            </li>
            <li class="lead mb-0">
              PLÁSTICOS 
              (REDUCCIÓN  O 
              ELIMINACIÓN DE  
              USO).
            </li>
            <li class="lead mb-0">
              USO DE  ENERGÍAS  
              LIMPIAS (CELDAS 
              SOLARES U OTROS 
              MEDIOS  DE  
              GENERACIÓN  Y 
              ALMACENAMIENTO)
            </li>
            <li class="lead mb-0">
              FUSIÓN  DE  DATOS DE  
              SENSORES  (RED  
              LOCAL Y RAMA)
            </li>
            <li class="lead mb-0">
              SENSORES, APPS, (ITENVIRONMENT  
              AWARE,  
              CROWDSOURCING).   
            </li>
            <li class="lead mb-0">
              HUELLA  DE  
              CARBONO 
              (INCORPORADA  AL  
              CERTIFICADO DE  
              ESTUDIOS).
            </li>
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/solar.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Energía </h2>
          <p class="lead mb-0">
            <li class="lead mb-0">
              Smart grid
            </li>
            <li class="lead mb-0">
              Gestión de  la energía
            </li>
            <li class="lead mb-0">
              Estaciones  de  
              carga para  
              teléfonos,  
              scooters, 
              bicicletas, autos 
              eléctricos  
              (electrolinerías).
            </li>
            <li class="lead mb-0">
              Reciclado de baterías.
            </li>
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Movilidad sostenible </h2>
          <p class="lead mb-0">
            <li class="lead mb-0">
              Gestión eficiente del 
              traslado  de  personas, del 
              transporte  y la  ubicación 
              de  unidades. 
            </li>
            <li class="lead mb-0">
              Mejorar la  planificación y 
              eficiencia  de  los medios  de  
              transporte  públicos  
              (Trolebús inteligente,  
              horarios, ocupación,  rutas)
            </li>
            <li class="lead mb-0">
              Reducir la  congestión  y 
              frustración de  la  
              comunidad (car  sharing,  
              uso de  bicicletas  y motos 
              eléctricas, control de  
              acceso  y tiempos de  
              recorrido,  empleo  de  
              sensores  en  unidades  
              móviles)
            </li>
            <li class="lead mb-0">
              Optimizar las plazas  de  
              aparcamiento  y su  gestión 
              (estacionamiento  
              inteligente)
            </li>
            <li class="lead mb-0">
              Conexión  vehículo  a vehículo  (V2V)
            </li>
            <li class="lead mb-0">
              Contribución  de  la  
              comunidad a la  generación  
              de  datos de  movilidad (uso  
              de  apps  para  recolección 
              de  datos,  medición  de  
              impactos, p.e.  reducción 
              de  la  huella  de  carbono)
            </li>
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Servicios Escolares</h2>
          <p class="lead mb-0">
            <li class="lead mb-0">
              Location  based services
            </li>
            <li class="lead mb-0">
              Informe de  trámites
            </li>
            <li class="lead mb-0">
              Cursos  de  educación 
              continua  para  
              egresados
            </li>
            <li class="lead mb-0">
              Seguimiento de egresados. 
    
            </li>
            <li class="lead mb-0">
              Incorporación del 
              impacto de  la  huella  de  
              carbono en  el  
              certificado de  estudios  
              (profesional  atento  al  
              cuidado del medio 
              ambiente).
            </li>
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-4.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Analytics y Comunicación Inteligente </h2>
          <p class="lead mb-0">
            <li class="lead mb-0">
              Análisis  de  datos 
              (Analytics)
            </li>
            <li class="lead mb-0">
              Generación  de  
              información y alertas 
              oportunas
            </li>
            <li class="lead mb-0">
              Estrategias Pro 
              conciencia  social/
              ambiental 
              (participación  en  
              brigadas)
            </li>
            <li class="lead mb-0">
              Socialización de  
              información del 
              campus  inteligente
            </li>
            <li class="lead mb-0">
              Redes sociales
            </li>
            <li class="lead mb-0">
              Reportes  de  usuarios
            </li>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">Equipo Interdisciplinario</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
            <h5>Miguel  Sánchez</h5>
            <p class="font-weight-light mb-0">ESIME Zacatenco </p>
            <p class="font-weight-light mb-0">Módulo  1.  Ambiental</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
            <h5>Ricardo Mota </h5>
            <p class="font-weight-light mb-0">CEC Allende </p>
            <p class="font-weight-light mb-0">Módulo  2.  Energía </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
            <h5>Federico  Felipe</h5>
            <p class="font-weight-light mb-0">ESIME Zacatenco </p>
            <p class="font-weight-light mb-0">Módulo  3.  Movilidad <br><br><br></p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
            <h5>Amadeo  Argüelles </h5>
            <p class="font-weight-light mb-0">CIC </p>
            <p class="font-weight-light mb-0">Módulo  5.  Analítica y Comunicación  Inteligente </p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
            <h5>Ciro  Martínez</h5>
            <p class="font-weight-light mb-0">CITEDI </p>
            <p class="font-weight-light mb-0">Módulo  4.  Seguridad Física</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Contactanos!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Llámenos o envíenos un correo electrónico y nos pondremos en contacto con usted lo antes posible</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+52 (951) 275-71-67</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:contact@yourwebsite.com">smartcampus@cic.ipn.mx</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer-color py-5">
    <div class="container">
      <div class="small text-center text-white"> &copy; Centro de Investigación en Computación. Todos los derechos reservados.
      </div>
      <div class="small text-center text-white">
      Av. Juan de Dios Bátiz, Esq. Miguel Othón de Mendizábal | Col. Nueva Industrial Vallejo, Gustavo A. Madero | C.P. 07738 | Ciudad de México</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="vendor/bootstrap/js/creative.min.js"></script>

</body>

</html>
