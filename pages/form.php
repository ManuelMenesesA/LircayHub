<?php

include("connection.php");
include("save.php");
?>

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Lircayhub</title>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href=".././assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../assets/vendors/aos/dist/aos.css/aos.css" />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <!-- endinject -->
  </head>

  <body>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SNF0NJ0BN4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SNF0NJ0BN4');
</script>
<!-- fin google Analytics-->

    <?
    date_default_timezone_set('America/Santiago');
    $fecha_actual=date("y-m-d h:i:s");
    ?>
    <div class="container-scroller">
      <div class="main-panel">
        <!-- partial:../partials/_navbar.html -->
        <header id="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="navbar-top">
                <div class="d-flex justify-content-between align-items-center">
                  <ul class="navbar-top-left-menu">
                    <li class="nav-item">
                      <a href="./index-inner.html" class="nav-link">Advertise</a>
                    </li>
                    <li class="nav-item">
                      <a href="./aboutus.html" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Events</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Write for Us</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">In the Press</a>
                    </li>
                  </ul>
                  <ul class="navbar-top-right-menu">
                    <li class="nav-item">
                      <a href="#" class="nav-link"><i class="mdi mdi-magnify"></i></a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Sign in</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a class="navbar-brand" href="#"
                      ><img src="../assets/images/logo.svg" alt=""
                    /></a>
                  </div>
                  <div>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                      class="navbar-collapse justify-content-center collapse"
                      id="navbarSupportedContent"
                    >
                      <ul
                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                      >
                        <li>
                          <button class="navbar-close">
                            <i class="mdi mdi-close"></i>
                          </button>
                        </li>
                            <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="elecciones.php">Elecciones 2021</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="clima.php">Cambio Climatico</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="deporte.php">Clasificatorias Qatar 2022</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="energia.php">Energias Renovables</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ciencia.php">Ciencia de datos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cine.php">U. Cinematografico</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="temas.php">Temas por Usuarios</a>
                            </li>
                      </ul>
                    </div>
                  </div>
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </header>

        <!-- partial -->
        <div class="flash-news-banner">
          <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">

              </div>
            </div>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="container">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <h1 class="font-weight-600 mb-4">
                        Añadir contenido
                      </h1>
                    </div>
                  </div>

                    <div class="row">
                      <div class="col-lg-8">
                        <div class="row">
                          <form action="save.php" method="POST">
                            <select class="custom-select" name="tema">
                              <option selected>Seleccione tema</option>
                              <option value="1">Elecciones 2021</option>
                              <option value="2">Clasificatorias Qatar 2022</option>
                              <option value="3">Cambio climatico</option>
                              <option value="4">Energía renovable</option>
                              <option value="5">Ciencia de datos </option>
                              <option value="6">Universo cinematografico</option>
                            </select>

                              <div class="form-group">
                                <label for="exampleFormControlInput1">Titulo</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="titulo">
                              </div>
                            
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descripcion</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Contenido</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="contenido"></textarea>
                              </div>
                              <div class="form-group">
                                    <label for="exampleFormControlTextarea1" ><input type="datetime" name="fecha" value="<?=$fecha_actual?>"></input></label><br>
                              </div>

                            <input type="submit" value="enviar" name="enviar"> </input>
                          </form>
                          
                      <div class="col-lg-4">


                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:../partials/_footer.html -->
        <footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-sm-5">
                  <img src="../assets/images/logo.svg" class="footer-logo" alt="" />
                  <h5 class="font-weight-normal mt-4 mb-5">
                    Newspaper is your news, entertainment, music fashion website. We
                    provide you with the latest breaking news and videos straight from
                    the entertainment industry.
                  </h5>
                  <ul class="social-media mb-3">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <h3 class="font-weight-bold mb-3">RECENT POSTS</h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="footer-border-bottom pb-2">
                        <div class="row">
                          <div class="col-3">
                            <img
                              src="../assets/images/dashboard/home_1.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="col-9">
                            <h5 class="font-weight-600">
                              Cotton import from USA to soar was American traders
                              predict
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="footer-border-bottom pb-2 pt-2">
                        <div class="row">
                          <div class="col-3">
                            <img
                              src="../assets/images/dashboard/home_2.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="col-9">
                            <h5 class="font-weight-600">
                              Cotton import from USA to soar was American traders
                              predict
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div>
                        <div class="row">
                          <div class="col-3">
                            <img
                              src="../assets/images/dashboard/home_3.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="col-9">
                            <h5 class="font-weight-600 mb-3">
                              Cotton import from USA to soar was American traders
                              predict
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <h3 class="font-weight-bold mb-3">CATEGORIES</h3>
                  <div class="footer-border-bottom pb-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Magazine</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Business</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Sports</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Arts</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Politics</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="d-sm-flex justify-content-between align-items-center">
                    <div class="fs-14 font-weight-600">
                      © 2020 @ <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white"> BootstrapDash</a>. All rights reserved.
                    </div>
                    <div class="fs-14 font-weight-600">
                      Handcrafted by <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">BootstrapDash</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    
    <script src="../assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="../assets/js/demo.js"></script>
    <script src="../assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
