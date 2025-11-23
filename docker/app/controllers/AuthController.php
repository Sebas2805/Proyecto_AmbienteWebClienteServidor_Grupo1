<?php
// controllers/AuthController.php

class AuthController
{
    private PDO $conn;
    private Usuario $usuarioModel;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
        $this->usuarioModel = new Usuario($conn);
    }

    public function showLogin(): void
    {
        $page = 'iniciarSesion';
        require __DIR__ . '/../views/layout.php';
    }

    public function showRegistro(): void
    {
        $page = 'registrarse';
        require __DIR__ . '/../views/layout.php';
    }

    public function login(): void
    {
        $email    = trim($_POST['email']    ?? '');
        $password = trim($_POST['password'] ?? '');

        if ($email === '' || $password === '') {
            $_SESSION['login_error'] = 'Debes ingresar correo y contraseña.';
            $_SESSION['old_email']   = $email;
            header('Location: index.php?route=login');
            exit;
        }

        $usuario = $this->usuarioModel->buscarPorEmail($email);
        if (!$usuario || !password_verify($password, $usuario['password'])) {
            $_SESSION['login_error'] = 'Credenciales inválidas.';
            $_SESSION['old_email']   = $email;
            header('Location: index.php?route=login');
            exit;
        }

        // Login correcto
        $_SESSION['usuario_id']     = $usuario['id'];
        $_SESSION['usuario_nombre'] = $usuario['nombre'];
        $_SESSION['tipo_usuario']   = $usuario['tipo_usuario'];

        header('Location: index.php?route=home');
        exit;
    }

    public function register(): void
    {
        $nombre    = trim($_POST['nombre']    ?? '');
        $apellidos = trim($_POST['apellidos'] ?? '');
        $email     = trim($_POST['email']     ?? '');
        $password  = trim($_POST['password']  ?? '');
        $confirm   = trim($_POST['confirm']   ?? '');
        $telefono  = trim($_POST['telefono']  ?? '');

        // Validaciones básicas
        if ($nombre === '' || $apellidos === '' || $email === '' || $password === '' || $confirm === '') {
            $_SESSION['register_error'] = 'Todos los campos obligatorios deben estar completos.';
            header('Location: index.php?route=register');
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['register_error'] = 'El correo electrónico no es válido.';
            header('Location: index.php?route=register');
            exit;
        }

        if ($password !== $confirm) {
            $_SESSION['register_error'] = 'Las contraseñas no coinciden.';
            header('Location: index.php?route=register');
            exit;
        }

        // Verificar si el correo ya existe
        if ($this->usuarioModel->buscarPorEmail($email)) {
            $_SESSION['register_error'] = 'Ya existe un usuario registrado con ese correo.';
            header('Location: index.php?route=register');
            exit;
        }

        // Crear usuario
        $data = [
            'nombre'       => $nombre . ' ' . $apellidos,
            'email'        => $email,
            'password'     => password_hash($password, PASSWORD_DEFAULT),
            'telefono'     => $telefono,
            'tipo_usuario' => 'EMPLEADO',
            'cv_url'       => '',  // por ahora vacío
        ];

        $nuevoId = $this->usuarioModel->crear($data);

        // O bien loguearlo directamente, o solo mostrar mensaje.
        $_SESSION['usuario_id']     = $nuevoId;
        $_SESSION['usuario_nombre'] = $data['nombre'];
        $_SESSION['tipo_usuario']   = $data['tipo_usuario'];

        $_SESSION['register_success'] = 'Registro completado correctamente. ¡Bienvenido!';

        header('Location: index.php?route=home');
        exit;
    }
}