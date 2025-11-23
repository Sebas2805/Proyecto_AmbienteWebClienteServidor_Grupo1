<?php

class PerfilController
{
    private PDO $conn;
    private Usuario $usuarioModel;
    private Postulacion $postulacionModel;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
        $this->usuarioModel = new Usuario($conn);
        $this->postulacionModel = new Postulacion($conn);
    }

    public function index(): void
    {
        if (!isset($_SESSION['usuario_id'])) {
            header('Location: index.php?route=login');
            exit;
        }

        $usuarioId = (int)$_SESSION['usuario_id'];

        // Si viene un POST, es una actualización del perfil
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->actualizarPerfil($usuarioId);
            return; // actualizarPerfil redirige
        }

        // GET: mostrar perfil
        $usuario       = $this->usuarioModel->buscarPorId($usuarioId);
        $postulaciones = $this->postulacionModel->obtenerPorUsuario($usuarioId);

        if (!$usuario) {
            $_SESSION['perfil_error'] = 'No se encontró la información del usuario.';
        }

        // Estas variables quedan disponibles en layout y perfil.php
        $page = 'perfil';
        require __DIR__ . '/../views/layout.php';
    }

    private function actualizarPerfil(int $usuarioId): void
    {
        $nombre   = trim($_POST['nombre']   ?? '');
        $telefono = trim($_POST['telefono'] ?? '');
        $cv_url   = trim($_POST['cv_url']   ?? '');

        if ($nombre === '') {
            $_SESSION['perfil_error'] = 'El nombre no puede estar vacío.';
            header('Location: index.php?route=perfil');
            exit;
        }

        $data = [
            'nombre'   => $nombre,
            'telefono' => $telefono,
            'cv_url'   => $cv_url,
        ];

        $ok = $this->usuarioModel->actualizarPerfil($usuarioId, $data);

        if ($ok) {
            // Actualizar nombre en sesión
            $_SESSION['usuario_nombre'] = $nombre;
            $_SESSION['perfil_success'] = 'Perfil actualizado correctamente.';
        } else {
            $_SESSION['perfil_error'] = 'Ocurrió un error al actualizar el perfil.';
        }

        header('Location: index.php?route=perfil');
        exit;
    }
}