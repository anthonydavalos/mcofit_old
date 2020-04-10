<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php wp_head(); ?>

    <title>Mcofit | Management of Information Technology</title>
  </head>
  <body>
    <!-- Menú -->
    <nav class="navbar navbar-expand-lg navbar-white bg-white">
      <div class="container">
        <a class="navbar-brand text-dark" href="#">Mcofit</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="#">Features</a>
            <a class="nav-item nav-link" href="#">Pricing</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Hero -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1>Haga crecer su negocio con Mcofit</h1>
            <h2>La transformación digital está cambiando los negocios, migramos tu infraestructura a la Nube.</h2>
            <div>
              <a href="#about" class="btn-get-started">Contactanos</a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="<?php echo get_template_directory_uri() . '/images/hero-img.png';?>" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php wp_footer(); ?>
  </body>
</html>