<?php
// Simulación de datos, deberian de venir de la BD mas adelante
$infoTrabajos = [
  [
    'title' => 'Desarrollador/a Junior PHP',
    'company' => 'TechNova',
    'location' => 'San José, CR (Híbrido)',
    'type' => 'Tiempo completo',
    'salary' => 550000,
    'tags' => ['PHP', 'MySQL', 'Git'],
  ],
  [
    'title' => 'Asistente de Marketing Digital',
    'company' => 'BlueWave',
    'location' => 'Heredia, CR (Presencial)',
    'type' => 'Medio tiempo',
    'salary' => 350000,
    'tags' => ['Redes Sociales', 'Canva', 'Copywriting'],
  ],
  [
    'title' => 'Soporte Técnico Nivel 1',
    'company' => 'CloudBridge',
    'location' => 'Remoto — LatAm',
    'type' => 'Temporal',
    'salary' => 400000,
    'tags' => ['Helpdesk', 'Windows', 'Ticketing'],
  ],
  [
    'title' => 'Auxiliar Contable',
    'company' => 'Fin&Co',
    'location' => 'Alajuela, CR',
    'type' => 'Tiempo completo',
    'salary' => 500000,
    'tags' => ['Excel', 'Contabilidad', 'Facturación'],
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

    <!-- CSS personalizado (solo por ID) -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <!-- Navbar (hover solo aquí) -->
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
            <li class="nav-item"><a class="nav-link" href="#ofertas">Ofertas</a></li>
            <li class="nav-item"><a class="nav-link" href="#categorias">Categorías</a></li>
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

    <!-- Hero -->
    <header id="hero" class="py-5 py-lg-6">
      <div class="container">
        <div class="row align-items-center g-4">
          <div class="col-lg-7">
            <h1 class="display-5 fw-bold lh-1 mb-3">Encuentra oportunidades <span class="text-primary">reales</span> para jóvenes</h1>
            <span class="badge bg-primary-subtle text-primary mb-3">Tu primera experiencia laboral</span>
            <p class="lead text-secondary">Prácticas, medio tiempo y empleos junior en empresas confiables y reconocidas.</p>
          </div>
          <div class="col-lg-5">
            <div class="card p-4 p-lg-5 h-100 border-0 shadow-sm rounded-4">
              <h2 class="h4 mb-3"><i class="bi bi-award text-primary me-2"></i>¿Por dónde empiezo?</h2>
              <ul class="list-unstyled small mb-0">
                <li class="d-flex align-items-start mb-2"><i class="bi bi-dot text-primary me-2"></i> Crea tu perfil con tu objetivo profesional.</li>
                <li class="d-flex align-items-start mb-2"><i class="bi bi-dot text-primary me-2"></i> Sube tu CV (PDF) y elige áreas de interés.</li>
                <li class="d-flex align-items-start mb-2"><i class="bi bi-dot text-primary me-2"></i> Revisa las vacantes disponibles.</li>
                <li class="d-flex align-items-start"><i class="bi bi-dot text-primary me-2"></i> Aplica con un clic y da seguimiento a tus postulaciones.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Ofertas destacadas -->
    <section id="ofertas" class="py-5">
      <div class="container mb-6">
        <div class="d-flex align-items-end justify-content-between mb-3">
          <div>
            <h2 class="h3 mb-1">Ofertas destacadas</h2>
            <p class="text-muted mb-0">Vacantes pensadas para perfiles junior y estudiantes.</p>
          </div>
          <a href="#" class="btn btn-outline-primary">Ver todas</a>
        </div>

        <div class="row g-3 g-lg-4">
          <?php foreach ($infoTrabajos as $trabajo): ?>
            <div class="col-12 col-md-6 col-xl-3">
              <article class="card h-100 border-0 shadow-sm rounded-4">
                <div class="card-body d-flex flex-column p-3">
                  <header class="mb-2">
                    <h3 class="h6 mb-1 text-truncate" title="<?= htmlspecialchars($trabajo['title']) ?>">
                      <a href="#" class="link-dark text-decoration-none"><?= htmlspecialchars($trabajo['title']) ?></a>
                    </h3>
                    <div class="small text-muted"><?= htmlspecialchars($trabajo['company']) ?> · <?= htmlspecialchars($trabajo['location']) ?></div>
                  </header>
                  <div class="mt-auto">
                    <div class="d-flex flex-wrap gap-2 my-2">
                      <?php foreach ($trabajo['tags'] as $tag): ?>
                        <span class="badge text-bg-light border"><?= htmlspecialchars($tag) ?></span>
                      <?php endforeach; ?>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <span class="small text-muted"><i class="bi bi-clock me-1"></i><?= htmlspecialchars($trabajo['type']) ?></span>
                      <strong class="text-primary"><?= number_format($trabajo['salary'], 0, ',', '.') ?></strong>
                    </div>
                    <div class="d-grid mt-3">
                      <a href="#" class="btn btn-primary"><i class="bi bi-send me-2"></i>Postular</a>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- Cómo funciona -->
    <section id="como-funciona" class="py-5">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-lg-6">
            <h2 class="h3">¿Cómo funciona?</h2>
            <p class="text-secondary">Diseñado para que encuentres rápido: crea tu perfil, sigue empresas y aplica en un clic.</p>
            <div class="row g-3">
              <div class="col-12">
                <div class="d-flex gap-3 align-items-start">
                  <div class="badge bg-primary-subtle text-primary p-3 rounded-3"><i class="bi bi-person-badge"></i></div>
                  <div>
                    <h3 class="h6 mb-1">1. Crea tu perfil</h3>
                    <p class="small text-muted mb-0">Resume, habilidades, disponibilidad y metas.</p>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="d-flex gap-3 align-items-start">
                  <div class="badge bg-primary-subtle text-primary p-3 rounded-3"><i class="bi bi-bell"></i></div>
                  <div>
                    <h3 class="h6 mb-1">2. Activa alertas</h3>
                    <p class="small text-muted mb-0">Recibe notificaciones cuando surjan vacantes ideales.</p>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="d-flex gap-3 align-items-start">
                  <div class="badge bg-primary-subtle text-primary p-3 rounded-3"><i class="bi bi-send"></i></div>
                  <div>
                    <h3 class="h6 mb-1">3. Postula y sigue tu proceso</h3>
                    <p class="small text-muted mb-0">Te mostramos el estado de cada postulación.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card rounded-4 overflow-hidden border-0 shadow-sm">
              <img src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?q=80&w=1200&auto=format&fit=crop" class="w-100" alt="Jóvenes trabajando en equipo" loading="lazy">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Cintillo de logos -->
    <section id="logoStrip" class="py-4 border-top border-bottom bg-white">
      <div class="container">
        <h2 class="h3 mb-5">Empresas que confían en Bolsa Juvenil</h2>
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-4 gap-lg-5">
          <img src="img/cromo.png" alt="Empresa A" class="img-fluid" width="60" height="40">
          <img src="img/microsoft.png" alt="Empresa B" class="img-fluid" width="60" height="40">
          <img src="img/3m.png" alt="Empresa C" class="img-fluid" width="60" height="40">
          <img src="img/citi.png" alt="Empresa D" class="img-fluid" width="60" height="40">
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="py-5 bg-primary text-white">
      <div class="container">
        <div class="row align-items-center g-3">
          <div class="col-lg-8">
            <h2 class="h3 mb-1">Crea tu perfil gratis</h2>
            <p class="mb-0 opacity-75">Miles de jóvenes ya están encontrando oportunidades. Súmate hoy.</p>
          </div>
          <div class="col-lg-4 d-grid d-lg-flex justify-content-lg-end">
            <a href="#" class="btn btn-light btn-lg text-primary fw-semibold"><i class="bi bi-person-plus me-2"></i>Registrarme</a>
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
        <div class="border-top pt-3 mt-3 small text-muted">© <?php echo date('Y'); ?> Bolsa Juvenil</div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
