<?php
// models/Usuario.php

class Usuario
{
    private PDO $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function buscarPorEmail(string $email): ?array
    {
        $sql = "SELECT * FROM usuarios WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        return $usuario ?: null;
    }

    public function crear(array $data): int
    {
        $sql = "INSERT INTO usuarios (nombre, email, password, telefono, tipo_usuario, cv_url)
                VALUES (:nombre, :email, :password, :telefono, :tipo_usuario, :cv_url)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':nombre',       $data['nombre'],       PDO::PARAM_STR);
        $stmt->bindValue(':email',        $data['email'],        PDO::PARAM_STR);
        $stmt->bindValue(':password',     $data['password'],     PDO::PARAM_STR);
        $stmt->bindValue(':telefono',     $data['telefono'],     PDO::PARAM_STR);
        $stmt->bindValue(':tipo_usuario', $data['tipo_usuario'], PDO::PARAM_STR);
        $stmt->bindValue(':cv_url',       $data['cv_url'],       PDO::PARAM_STR);

        $stmt->execute();
        return (int)$this->conn->lastInsertId();
    }

    public function buscarPorId(int $id): ?array
    {
        $sql = "SELECT * FROM usuarios WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        return $usuario ?: null;
    }

    public function actualizarPerfil(int $id, array $data): bool
    {
        $sql = "UPDATE usuarios
                SET nombre = :nombre,
                    telefono = :telefono,
                    cv_url = :cv_url
                WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':nombre',   $data['nombre'],   PDO::PARAM_STR);
        $stmt->bindValue(':telefono', $data['telefono'], PDO::PARAM_STR);
        $stmt->bindValue(':cv_url',   $data['cv_url'],   PDO::PARAM_STR);
        $stmt->bindValue(':id',       $id,               PDO::PARAM_INT);
        return $stmt->execute();
    }
}
