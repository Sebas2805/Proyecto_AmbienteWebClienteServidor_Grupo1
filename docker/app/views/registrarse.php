<?php

$register_error = $_SESSION['register_error'] ?? null;
$register_success = $_SESSION['register_success'] ?? null;
unset($_SESSION['register_error'], $_SESSION['register_success']);
?>

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


                        <?php if ($register_error): ?>
                            <div class="alert alert-danger"><?= htmlspecialchars($register_error) ?></div>
                        <?php endif; ?>

                        <?php if ($register_success): ?>
                            <div class="alert alert-success"><?= htmlspecialchars($register_success) ?></div>
                        <?php endif; ?>

                        <form action="index.php?route=register" method="post" novalidate>
                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control form-control-lg" id="nombre" name="nombre"
                                        placeholder="Nombre" required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="apellidos" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control form-control-lg" id="apellidos"
                                        name="apellidos" placeholder="Apellido" required>
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Correo electrónico</label>
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
                                    <label for="telefono" class="form-label">Teléfono (opcional)</label>
                                    <input type="tel" class="form-control form-control-lg" id="telefono" name="telefono"
                                        placeholder="+506 8888 8888">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="ubicacion" class="form-label">Ubicación</label>
                                    <input type="text" class="form-control form-control-lg" id="ubicacion"
                                        name="ubicacion" placeholder="San José, CR">
                                </div>
                            </div>


                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">Crear cuenta</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

</main>