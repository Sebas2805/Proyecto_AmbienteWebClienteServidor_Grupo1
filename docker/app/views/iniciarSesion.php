<?php

$login_error = $_SESSION['login_error'] ?? null;
$old_email = $_SESSION['old_email'] ?? '';
unset($_SESSION['login_error'], $_SESSION['old_email']);
?>

<!-- Auth wrapper -->
<main id="auth" class="d-flex align-items-center py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-5">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-4 p-lg-5">
                        <h1 class="h4 mb-3">Iniciar sesión</h1>


                        <form action="index.php?route=login" method="post" novalidate>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email"
                                    placeholder="tu@correo.com" value="<?= htmlspecialchars($old_email) ?>" required>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label for="password" class="form-label mb-0">Contraseña</label>
                                    <a href="#" class="small">¿Olvidaste tu contraseña?</a>
                                </div>
                                <input type="password" class="form-control form-control-lg" id="password"
                                    name="password" placeholder="••••••••" required>
                            </div>

                            <div class="d-grid mt-4">
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