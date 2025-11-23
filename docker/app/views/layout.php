<?php
// views/layout.php
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bolsa Juvenil</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>

    <!-- Navbar -->
    <nav id="mainNav" class="navbar navbar-expand-lg bg-white sticky-top shadow-sm">
        <div class="container py-2">
            <a class="navbar-brand fw-bold text-primary" href="index.php?route=home">
                <i class="bi bi-briefcase-fill me-2"></i>Bolsa <span class="text-dark">Juvenil</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php?route=home#ofertas">Ofertas</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?route=home#categorias">Categorías</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?route=home#como-funciona">Cómo funciona</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="index.php?route=home#contacto">Contacto</a></li>
                </ul>
                <!-- Botones de log in, registro y perfil dinamicos -->
                <div class="d-flex ms-lg-3 gap-2">

                    <?php if (!isset($_SESSION['usuario_id'])): ?>

                        <!-- Usuario NO logueado -->
                        <a href="index.php?route=login" class="btn btn-outline-primary">Iniciar sesión</a>
                        <a href="index.php?route=register" class="btn btn-primary">Crear cuenta</a>

                    <?php else: ?>

                        <!-- Usuario logueado -->
                        <a href="index.php?route=perfil" class="btn btn-outline-primary d-flex align-items-center">
                            <i class="bi bi-person-circle me-2"></i>
                            <?= htmlspecialchars($_SESSION['usuario_nombre']) ?>
                        </a>

                        <a href="index.php?route=logout" class="btn btn-danger">
                            <i class="bi bi-box-arrow-right me-1"></i> Salir
                        </a>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido especifico de cada vista -->
    <main>
        <?php
        $viewFile = __DIR__ . '/' . $page . '.php';
        if (file_exists($viewFile)) {
            include $viewFile;
        } else {
            echo "<div class=\"container py-5\"><p>Vista no encontrada: " . htmlspecialchars($page) . "</p></div>";
        }
        ?>
    </main>

    <!-- Footer -->
    <footer id="contacto" class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <a class="navbar-brand fw-bold text-primary" href="index.php?route=home">
                        <i class="bi bi-briefcase-fill me-2"></i>Bolsa <span class="text-dark">Juvenil</span>
                    </a>
                    <p class="small text-muted mt-2">Conectamos talento joven con empresas que apuestan por el futuro.
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <h5 class="h6">Enlaces</h5>
                    <ul class="list-unstyled small">
                        <li><a href="index.php?route=home#ofertas"
                                class="link-secondary text-decoration-none">Ofertas</a></li>
                        <li><a href="index.php?route=home#categorias"
                                class="link-secondary text-decoration-none">Categorías</a></li>
                        <li><a href="index.php?route=home#como-funciona"
                                class="link-secondary text-decoration-none">Cómo funciona</a></li>
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
            <div class="border-top pt-3 mt-3 small text-muted">© <?= date('Y') ?> Bolsa Juvenil</div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>