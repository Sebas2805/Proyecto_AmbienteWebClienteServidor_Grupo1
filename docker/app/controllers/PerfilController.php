
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