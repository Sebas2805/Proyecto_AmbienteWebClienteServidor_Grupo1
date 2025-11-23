<?php ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Noticias — Bolsa Juvenil</title>
    <meta name="description" content="Noticias y novedades sobre empleo juvenil, talleres y oportunidades laborales en Costa Rica.">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
  </head>
  
  <body>
    <!-- Navbar -->
    <nav id="mainNav" class="navbar navbar-expand-lg bg-white sticky-top shadow-sm">
      <div class="container py-2">
        <a class="navbar-brand fw-bold text-primary" href="#">
          <i class="bi bi-briefcase-fill me-2"></i>Bolsa <span class="text-dark">Juvenil</span>
        </a>      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain" aria-controls="navMain" aria-expanded="false" aria-label="Alternar navegación">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMain">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="index.php">Principal</a></li>
            <li class="nav-item"><a class="nav-link" href="#ofertas">Ofertas</a></li>
            <li class="nav-item"><a class="nav-link" href="#categorias">Categorías</a></li>
            <li class="nav-item"><a class="nav-link" href="#como-funciona">Cómo funciona</a></li>
            <li class="nav-item"><a class="nav-link active" href="noticias.php">Noticias</a></li>
            <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
          </ul>

          <div class="d-flex ms-lg-3 gap-2">
            <a href="iniciarSesion.php" class="btn btn-outline-primary">Iniciar sesión</a>
            <a href="registrarse.php" class="btn btn-primary">Crear cuenta</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header id="hero" class="py-5 bg-light">
      <div class="container">
        <div class="text-center">
          <h1 class="display-6 fw-bold mb-3">Noticias y Actualizaciones</h1>
          <p class="lead text-secondary mb-4">Mantente al día con las últimas novedades sobre empleo juvenil, talleres y oportunidades laborales en Costa Rica.</p>
        </div>
      </div>
    </header>

    <!-- Sección de noticias -->
    <section class="container my-5">
      <div class="row g-4">
        <!-- Noticia 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100 rounded-4">
            <img src="img/noticia1.jpg" class="card-img-top rounded-top-4" alt="Noticia 1">
            <div class="card-body">
              <h5 class="card-title fw-bold">Nueva plataforma para jóvenes</h5>
              <p class="text-secondary small mb-2"><i class="bi bi-calendar3 me-1"></i>06 Nov 2025</p>
              <p class="card-text">Se lanza una página para conectar jóvenes con empresas y promover la inclusión digital en el país.</p>
              <a href="verNoticia.php?id=1" class="btn btn-outline-primary w-100 mt-2">Leer más</a>
            </div>
          </div>
        </div>

        <!-- Noticia 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100 rounded-4">
            <img src="img/noticia2.jpg" class="card-img-top rounded-top-4" alt="Noticia 2">
            <div class="card-body">
              <h5 class="card-title fw-bold">Taller gratuito de currículum</h5>
              <p class="text-secondary small mb-2"><i class="bi bi-calendar3 me-1"></i>05 Nov 2025</p>
              <p class="card-text">Participa en nuestro taller gratuito y aprende a crear un currículum digital profesional.</p>
              <a href="verNoticia.php?id=2" class="btn btn-outline-primary w-100 mt-2">Leer más</a>
            </div>
          </div>
        </div>

        <!-- Noticia 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="card border-0 shadow-sm h-100 rounded-4">
            <img src="img/noticia3.jpg" class="card-img-top rounded-top-4" alt="Noticia 3">
            <div class="card-body">
              <h5 class="card-title fw-bold">Empresas buscan talento joven</h5>
              <p class="text-secondary small mb-2"><i class="bi bi-calendar3 me-1"></i>02 Nov 2025</p>
              <p class="card-text">Más de 30 empresas se unen al programa para contratar jóvenes sin experiencia previa.</p>
              <a href="verNoticia.php?id=3" class="btn btn-outline-primary w-100 mt-2">Leer más</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer id="contacto" class="py-5 bg-white">
      <div class="container">
        <div class="row g-4">
          <div class="col-md-4">
            <a class="navbar-brand fw-bold text-primary" href="#"><i class="bi bi-briefcase-fill me-2"></i>Bolsa <span class="text-dark">Juvenil</span></a>
            <p class="small text-muted mt-2">Conectamos talento joven con empresas que apuestan por el futuro.</p>
          </div>
          <div class="col-6 col-md-4">
            <h5 class="h6">Enlaces</h5>
            <ul class="list-unstyled small">
              <li><a href="#ofertas" class="link-secondary text-decoration-none">Ofertas</a></li>
              <li><a href="#categorias" class="link-secondary text-decoration-none">Categorías</a></li>
              <li><a href="#como-funciona" class="link-secondary text-decoration-none">Cómo funciona</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-4">
            <h5 class="h6">Contacto</h5>
            <ul class="list-unstyled small text-muted">
              <li><i class="bi bi-envelope me-2"></i> contacto@bolsajuvenil.cr</li>
              <li><i class="bi bi-geo-alt me-2"></i> San José, Costa Rica</li>
            </ul>
          </div>
        </div>
        <div class="border-top pt-3 mt-3 small text-muted">© Bolsa Juvenil</div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
