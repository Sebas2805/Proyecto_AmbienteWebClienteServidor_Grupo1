<?php ?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear cuenta — Bolsa Juvenil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>


    <!-- Navbar -->
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


    <!-- Formulario de registro -->
    <main id="auth" class="d-flex align-items-center py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-7 col-xl-6">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-4 p-lg-5">
                            <h1 class="h4 mb-3">Crear cuenta</h1>
                            <p class="text-secondary mb-4">Regístrate para postular a ofertas de trabajo.
                            </p>


                            <form action="#" method="post" novalidate>
                                <div class="row g-3">
                                    <div class="col-12 col-md-6">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control form-control-lg" id="nombre"
                                            name="nombre" placeholder="Tu nombre" required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="apellidos" class="form-label">Apellidos</label>
                                        <input type="text" class="form-control form-control-lg" id="apellidos"
                                            name="apellidos" placeholder="Tus apellidos" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control form-control-lg" id="email" name="email"
                                            placeholder="tu@correo.com" required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control form-control-lg" id="password"
                                            name="password" placeholder="••••••••" required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="confirm" class="form-label">Confirmar contraseña</label>
                                        <input type="password" class="form-control form-control-lg" id="confirm"
                                            name="confirm" placeholder="••••••••" required>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="telefono" class="form-label">Telefono</label>
                                        <input type="tel" class="form-control form-control-lg" id="telefono"
                                            name="telefono" placeholder="+506 8888 8888">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="ubicacion" class="form-label">Ubicación</label>
                                        <input type="text" class="form-control form-control-lg" id="ubicacion"
                                            name="ubicacion" placeholder="San José, CR">
                                    </div>
                                    <div class="col-12">
                                        <label for="area" class="form-label">Área de interés</label>
                                        <select id="area" name="area" class="form-select form-select-lg">
                                            <option value="">Selecciona un área</option>
                                            <option>IT</option>
                                            <option>Soporte / Helpdesk</option>
                                            <option>Marketing</option>
                                            <option>Finanzas / Contabilidad</option>
                                            <option>Ventas</option>
                                            <option>Prácticas Profesionales</option>
                                        </select>
                                    </div>
                                </div>
                                <br>    
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg">Crear cuenta</button>
                                </div>
                            </form>

                            

                        </div>
                    </div>
                </div>
                
    </main>

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

</html>