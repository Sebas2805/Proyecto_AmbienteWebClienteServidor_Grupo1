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

    <!-- Como funciona -->
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

    <!-- Empresas que confian en Bolsa Juvenil -->
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

    <!-- Seccion Crear perfil -->
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