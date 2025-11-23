<?php
// models/Postulacion.php

class Postulacion
{
    private PDO $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function obtenerPorUsuario(int $usuarioId): array
    {
        $sql = "SELECT 
                  p.id,
                  p.estado,
                  p.fecha_postulacion,
                  p.carta_presentacion,
                  o.titulo AS titulo_oferta,
                  e.nombre AS empresa_nombre
                FROM postulaciones p
                INNER JOIN ofertas_empleo o ON p.oferta_id = o.id
                INNER JOIN empresas e ON o.empresa_id = e.id
                WHERE p.usuario_id = :usuario_id
                ORDER BY p.fecha_postulacion DESC";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':usuario_id', $usuarioId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC) ?: [];
    }
}