<?php

class Postulacion
{
    private PDO $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function crear(array $data): bool
    {
        $sql = "INSERT INTO Postulaciones
        (nombre, apellido1, apellido2, edad, correo, cedula, cv, comentario, oferta_id)
        VALUES (:nombre, :apellido1, :apellido2, :edad, :correo, :cedula, :cv, :comentario, :oferta_id)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ":nombre"     => $data["nombre"],
            ":apellido1"  => $data["apellido1"],
            ":apellido2"  => $data["apellido2"],
            ":edad"       => $data["edad"],
            ":correo"     => $data["correo"],
            ":cedula"     => $data["cedula"],
            ":cv"         => $data["cv"],
            ":comentario" => $data["comentario"],
            ":oferta_id"  => $data["oferta_id"]
        ]);
    }
}