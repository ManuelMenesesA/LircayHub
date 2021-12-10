<?php include("pages/connection.php");
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Lircayhub</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="./assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="assets/vendors/aos/dist/aos.css/aos.css" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />

    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
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
    <div class="container-scroller">
      <div class="main-panel">
        <!-- partial:partials/_navbar.html -->
        <header id="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="navbar-top">
                <div class="d-flex justify-content-between align-items-center">
                  <ul class="navbar-top-left-menu">
                    <li class="nav-item">
                      <a href="pages/index-inner.html" class="nav-link">Advertise</a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/aboutus.html" class="nav-link">About</a>
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
                      ><img src="assets/images/logo.svg" alt=""
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
                        <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
                            <li>
                                <button class="navbar-close">
                                    <i class="mdi mdi-close"></i>
                                </button>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/elecciones.php">Elecciones 2021</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/clima.php">Cambio Climatico</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/deporte.php">Clasificatorias Qatar 2022</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/energia.php">Energias Renovables</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/ciencia.php">Ciencia de datos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/cine.php">U. Cinematografico</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages/temas.php">Temas por Usuarios</a>
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

        <!-- Noticias -->
        <div class="flash-news-banner">
          <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
            <!--    <span class="badge badge-dark mr-3">Flash news</span>
                <p class="mb-0">
                  Lorem Ipsum has been the industry's standard dummy text ever
                  since the 1500s.
                </p>
              </div>
              <div class="d-flex">
                <span class="mr-3 text-danger">Wed, March 4, 2020</span>
                <span class="text-danger">30°C,London</span>
              </div>-->
            </div>
          </div>
        </div>
        <div class="content-wrapper">
          <div class="container">
           <!--  <div class="row" data-aos="fade-up">
              <div class="col-xl-8 stretch-card grid-margin">
                <div class="position-relative">
                 <img
                    src="assets/images/dashboard/banner.jpg"
                    alt="banner"
                    class="img-fluid"
                  />
                  <div class="banner-content">
                    <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                      global news
                    </div>
                    <h1 class="mb-0">GLOBAL PANDEMIC</h1>
                    <h1 class="mb-2">
                      Coronavirus Outbreak LIVE Updates: ICSE, CBSE Exams
                      Postponed, 168 Trains
                    </h1>
                    <div class="fs-12">
                      <span class="mr-2">Photo </span>10 Minutes ago
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 stretch-card grid-margin">
                <div class="card bg-dark text-white">
                  <div class="card-body">
                    <h2>Latest news</h2>

                    <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                      <div class="pr-3">
                        <h5>Virus Kills Member Of Advising Iran’s Supreme</h5>
                        <div class="fs-12">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                      <div class="rotate-img">
                        <img
                          src="assets/images/dashboard/home_1.jpg"
                          alt="thumb"
                          class="img-fluid img-lg"/>
                      </div>
                    </div>

                    <div
                      class="d-flex border-bottom-blue pb-4 pt-4 align-items-center justify-content-between">
                      <div class="pr-3">
                        <h5>Virus Kills Member Of Advising Iran’s Supreme</h5>
                        <div class="fs-12">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                      <div class="rotate-img">
                        <img
                          src="assets/images/dashboard/home_2.jpg"
                          alt="thumb"
                          class="img-fluid img-lg"
                        />
                      </div>
                    </div>

                    <div
                      class="d-flex pt-4 align-items-center justify-content-between"
                    >
                      <div class="pr-3">
                        <h5>Virus Kills Member Of Advising Iran’s Supreme</h5>
                        <div class="fs-12">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </div>
                      </div>
                      <div class="rotate-img">
                        <img
                          src="assets/images/dashboard/home_3.jpg"
                          alt="thumb"
                          class="img-fluid img-lg"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->
            <div class="row" data-aos="fade-up">
              <div class="col-lg-3 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h2>Category</h2>
                    <ul class="vertical-menu">
                      <li><a href="pages/elecciones.php">Elecciones</a></li>
                      <li><a href="pages/clima.php">Cambio Climatico</a></li>
                      <li><a href="pages/deporte.php">Clasificatorias 22</a></li>
                      <li><a href="pages/energia.php">Energia</a></li>
                      <li><a href="pages/ciencia.php">Ciencia de datos</a></li>
                      <li><a href="pages/cine.php">U. Cinematografico</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-9 stretch-card grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                        <h1>Publicaciones General</h1>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin">
                          <?php
                          $query = "SELECT * FROM informacion ORDER BY fecha";
                          $result= mysqli_query($conn, $query);

                           while($row = mysqli_fetch_assoc($result)) { ?>

                        <h2 class="mb-2 font-weight-600">
                          <a href="<?php  echo $row['contenido']; ?>" class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name"><?php  echo $row['titulo']; ?></span></a>
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2">Fecha de publicacion </span><?php echo $row['fecha']; ?>
                        </div>
                        <p class="mb-0">
                          <?php echo $row['descripcion']; ?>
                        </p>
                        <br>
                        <?php } ?>
                      </div>
                    </div>
                          </div>
                        </div>
                      </div>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-sm-5">
                  <img src="assets/images/logo.svg" class="footer-logo" alt="" />
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
                              src="assets/images/dashboard/home_1.jpg"
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
                              src="assets/images/dashboard/home_2.jpg"
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
                              src="assets/images/dashboard/home_3.jpg"
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
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="./assets/js/demo.js"></script>
    <script src="./assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
