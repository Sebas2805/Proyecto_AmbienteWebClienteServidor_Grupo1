<?php ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bolsa Juvenil — Encuentra tu primer trabajo</title>
    <meta name="description" content="Bolsa de empleo juvenil. Encuentra tu primera experiencia laboral o prácticas en tecnología, soporte, marketing y más.">

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
        <a class="navbar-brand fw-bold text-primary" href="index.php">
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
            <li class="nav-item"><a class="nav-link" href="postularce.php">Postularme</a></li>
            <li class="nav-item"><a class="nav-link" href="#como-funciona">Cómo funciona</a></li>
            <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
          </ul>

          <div class="d-flex ms-lg-3 gap-2">
            <a href="iniciarSesion.php" class="btn btn-outline-primary">Iniciar sesión</a>
            <a href="registrarse.php" class="btn btn-primary">Crear cuenta</a>
          </div>
        </div>
      </div>
    </nav>

    <header id="hero" class="py-5 py-lg-6">
      <div class="container">
        <div class="row align-items-center g-4">
          <div class="col-lg-7">
            <h1 class="display-5 fw-bold lh-1 mb-3">
              Postúlate para dar paso a tu nueva oportunidad <span class="text-primary">laboral</span>
            </h1>
            <p class="lead text-secondary">
              En este apartado podrás rellenar los campos correspondientes para así dar inicio a tu proceso de postulación y selección por parte de las empresas que están pidiendo por ti.
            </p>
          </div>
          <div class="col-lg-5">
            <div class="card p-4 p-lg-5 h-100 border-0 shadow-sm rounded-4">
              <h2 class="h4 mb-3"><i class="bi bi-award text-primary me-2"></i>¿Por dónde empiezo?</h2>
              <ul class="list-unstyled small mb-0">
                <li class="mb-2"><i class="bi bi-dot text-primary me-2"></i>Registra tus datos.</li>
                <li class="mb-2"><i class="bi bi-dot text-primary me-2"></i>Sube tu CV (PDF) y elige áreas de interés.</li>
                <li class="mb-2"><i class="bi bi-dot text-primary me-2"></i>Revisa que todo documento sea vigente.</li>
                <li><i class="bi bi-dot text-primary me-2"></i>Aplica con un clic y guarda tu información para futuras postulaciones.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="container my-5">
      <h4>Rellena los campos con la información correspondiente</h4>

      <form class="p-4 bg-white rounded shadow-sm mt-4">

        <div class="row g-3 mb-3">
          <div class="col-md-3">
            <input type="text" name="Nombre" class="form-control" placeholder="Nombre">
          </div>
          <div class="col-md-3">
            <input type="text" name="Apellido1" class="form-control" placeholder="Primer Apellido">
          </div>
          <div class="col-md-3">
            <input type="text" name="Apellido2" class="form-control" placeholder="Segundo Apellido">
          </div>
          <div class="col-md-3">
            <input type="date" name="edad" class="form-control" placeholder="Fecha de nacimiento">
          </div>
        </div>
        <div class="row g-3 mb-3">
          <div class="col-md-6">
            <input type="email" name="Correo" class="form-control" required placeholder="Correo electrónico">
          </div>
          <div class="col-md-6">
            <input type="number" name="Cedula" class="form-control" placeholder="Cédula de identidad">
          </div>
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">subir archivo</label>
            <input type="file" class="form-control" id="inputGroupFile01">
            </div>
        </div>

        <div class="mb-3">
          <textarea name="Comentario" rows="6" class="form-control" placeholder="Cuéntenos por qué desea postularse con nosotros"></textarea>
        </div>

        <div class="form-check mb-2">
          <input class="form-check-input" type="checkbox" id="checkDefault">
          <label class="form-check-label" for="checkDefault">
            Acepto los términos y condiciones
          </label>
        </div>

        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" id="checkChecked" checked>
          <label class="form-check-label" for="checkChecked">
            Estoy de acuerdo con dar mi información a esta página
          </label>
        </div>

      </form>
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