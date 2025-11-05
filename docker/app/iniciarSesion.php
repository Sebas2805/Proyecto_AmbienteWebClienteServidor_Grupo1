<?php ?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar sesión — Bolsa Juvenil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>


    <!-- Navbar (igual que index) -->
    <nav id="mainNav" class="navbar navbar-expand-lg bg-white sticky-top shadow-sm">
        <div class="container py-2">
            <a class="navbar-brand fw-bold text-primary" href="/index.php">
                <i class="bi bi-briefcase-fill me-2"></i>Bolsa <span class="text-dark">Juvenil</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="/index.php#ofertas">Ofertas</a></li>
                    <li class="nav-item"><a class="nav-link" href="/index.php#categorias">Categorías</a></li>
                    <li class="nav-item"><a class="nav-link" href="/index.php#como-funciona">Cómo funciona</a></li>
                    <li class="nav-item"><a class="nav-link" href="/index.php#contacto">Contacto</a></li>
                </ul>
                <div class="d-flex ms-lg-3 gap-2">
                    <a href="/iniciarSesion.php" class="btn btn-outline-primary">Iniciar sesión</a>
                    <a href="/registrarse.php" class="btn btn-primary">Crear cuenta</a>
                </div>
            </div>
        </div>
    </nav>


    <!-- Auth wrapper -->
    <main id="auth" class="d-flex align-items-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-5">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-4 p-lg-5">
                            <h1 class="h4 mb-3">Iniciar sesión</h1>


                            <form action="#" method="post" novalidate>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo electrónico</label>
                                    <input type="email" class="form-control form-control-lg" id="email" name="email"
                                        placeholder="tuCorreo@ejemplo.com" required>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="password" class="form-label mb-0">Contraseña</label>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" id="password"
                                        name="password" placeholder="••••••••" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
                                </div>
                            </form>


                            <div class="text-center mt-4 small">
                                ¿No tienes cuenta? <a href="/registrarse.php">Crea una aquí</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Footer (igual que index) -->
    <footer id="contacto" class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <a class="navbar-brand fw-bold text-primary" href="/index.php"><i
                            class="bi bi-briefcase-fill me-2"></i>Bolsa <span class="text-dark">Juvenil</span></a>
                    <p class="small text-muted mt-2">Conectamos talento joven con empresas que apuestan por el futuro.
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <h5 class="h6">Enlaces</h5>
                    <ul class="list-unstyled small">
                        <li><a href="/index.php#ofertas" class="link-secondary text-decoration-none">Ofertas</a></li>
                        <li><a href="/index.php#categorias" class="link-secondary text-decoration-none">Categorías</a>
                        </li>
                        <li><a href="/index.php#como-funciona" class="link-secondary text-decoration-none">Cómo
                                funciona</a></li>
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