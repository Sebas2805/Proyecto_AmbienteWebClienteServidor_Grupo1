<?php
$categorias = [
  [
    'nombre' => 'Tecnología e Informática',
    'descripcion' => 'Desarrollo web, soporte técnico, QA, analista de datos y más.',
    'icono' => 'bi-laptop',
    'color' => 'primary'
  ],
  [
    'nombre' => 'Marketing y Comunicación',
    'descripcion' => 'Redes sociales, diseño gráfico, redacción y campañas digitales.',
    'icono' => 'bi-megaphone',
    'color' => 'success'
  ],
  [
    'nombre' => 'Administración y Finanzas',
    'descripcion' => 'Asistente contable, recepción, control de inventario, facturación.',
    'icono' => 'bi-bar-chart',
    'color' => 'info'
  ],
  [
    'nombre' => 'Atención al Cliente',
    'descripcion' => 'Call center, soporte, ventas y servicio postventa.',
    'icono' => 'bi-chat-dots',
    'color' => 'warning'
  ],
  [
    'nombre' => 'Educación y Tutorías',
    'descripcion' => 'Asistente de clases, tutorías particulares, apoyo académico.',
    'icono' => 'bi-book',
    'color' => 'danger'
  ],
  [
    'nombre' => 'Producción y Logística',
    'descripcion' => 'Ayudante general, bodega, distribución, control de inventario.',
    'icono' => 'bi-box-seam',
    'color' => 'secondary'
  ],
  [
    'nombre' => 'Ventas y Comercio',
    'descripcion' => 'Atención en tiendas, asesor de ventas, cajero, promotor.',
    'icono' => 'bi-bag-check',
    'color' => 'primary'
  ],
  [
    'nombre' => 'Salud y Bienestar',
    'descripcion' => 'Asistente de farmacia, apoyo en clínica, atención al paciente.',
    'icono' => 'bi-heart-pulse',
    'color' => 'success'
  ],
  [
    'nombre' => 'Turismo y Hotelería',
    'descripcion' => 'Recepción, guía turística, mesero, atención al huésped.',
    'icono' => 'bi-suitcase-lg',
    'color' => 'info'
  ],
  [
    'nombre' => 'Diseño y Arte',
    'descripcion' => 'Diseño gráfico, ilustración, edición de video, fotografía.',
    'icono' => 'bi-brush',
    'color' => 'warning'
  ],
  [
    'nombre' => 'Construcción y Mantenimiento',
    'descripcion' => 'Asistente de obra, ayudante técnico, mantenimiento general.',
    'icono' => 'bi-tools',
    'color' => 'danger'
  ],
  [
    'nombre' => 'Medio Ambiente y Agricultura',
    'descripcion' => 'Reforestación, viveros, gestión ambiental, agricultura urbana.',
    'icono' => 'bi-tree',
    'color' => 'success'
  ],
];
?>
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

    <!-- CSS-->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <!-- Navbar (hover solo aquí) -->
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
            <li class="nav-item"><a class="nav-link" href="#ofertas">Ofertas</a></li>
            <li class="nav-item"><a class="nav-link" href="categoria.php">Categorías</a></li>
            <li class="nav-item"><a class="nav-link" href="postularce.php">Postularme</a></li>
            <li class="nav-item"><a class="nav-link" href="#como-funciona">Cómo funciona</a></li>
            <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
          </ul>
          <div class="d-flex ms-lg-3 gap-2">
            <a href="#" class="btn btn-outline-primary">Iniciar sesión</a>
            <a href="#" class="btn btn-primary">Crear cuenta</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Encabezado -->
    <header class="py-5 bg-light">
      <div class="container text-center">
        <h1 class="display-6 fw-bold mb-3">Explora categorías laborales</h1>
        <p class="lead text-secondary">Encuentra oportunidades según tu área de interés o estudios.</p>
      </div>
    </header>

    <!-- Sección de categorías -->
    <section id="categorias" class="py-5">
      <div class="container">
        <div class="row g-4">
          <?php foreach ($categorias as $cat): ?>
            <div class="col-12 col-md-6 col-xl-4">
              <div class="card h-100 border-0 shadow-sm rounded-4 p-3">
                <div class="d-flex align-items-start">
                  <div class="badge bg-<?= $cat['color'] ?>-subtle text-<?= $cat['color'] ?> p-3 rounded-3 me-3">
                    <i class="bi <?= $cat['icono'] ?> fs-4"></i>
                  </div>
                  <div>
                    <h3 class="h6 mb-1"><?= htmlspecialchars($cat['nombre']) ?></h3>
                    <p class="small text-muted mb-2"><?= htmlspecialchars($cat['descripcion']) ?></p>
                    <a href="#" class="btn btn-sm btn-outline-<?= $cat['color'] ?>">Ver empleos</a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- CTA inferior -->
    <section class="py-5 bg-primary text-white">
      <div class="container text-center">
        <h2 class="h4 mb-2">¿No sabes por dónde empezar?</h2>
        <p class="mb-4 opacity-75">Crea tu perfil y te ayudaremos a encontrar categorías que se adapten a ti.</p>
        <a href="#" class="btn btn-light btn-lg text-primary fw-semibold"><i class="bi bi-person-plus me-2"></i>Crear mi perfil</a>
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
        <div class="border-top pt-3 mt-3 small text-muted">© <?php echo date('Y'); ?> Bolsa Juvenil</div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>