<?php

class PostulacionController
{
    private Postulacion $model;

    public function __construct(Postulacion $model)
    {
        $this->model = $model;
    }

    public function formulario($oferta_id)
{
    $page = "postularce";
    $idOferta = $oferta_id;   // ← USAR EL VALOR CORRECTO

    include "./views/layout.php";
}

     public function guardar()
    {
        // Verificar que la oferta es válida
        if (empty($_POST["oferta_id"]) || $_POST["oferta_id"] == 0) {
            die("ERROR: No se recibió una oferta válida.");
        }
        // Guardar archivo CV
        $cv = null;
        if (!empty($_FILES["cv"]["name"])) {

            if (!is_dir("uploads")) mkdir("uploads");

            $cv = time() . "_" . basename($_FILES["cv"]["name"]);
            move_uploaded_file($_FILES["cv"]["tmp_name"], "uploads/" . $cv);
        }

         $data = [
            "nombre"     => $_POST["Nombre"],
            "apellido1"  => $_POST["Apellido1"],
            "apellido2"  => $_POST["Apellido2"],
            "edad"       => $_POST["edad"],
            "correo"     => $_POST["Correo"],
            "cedula"     => $_POST["Cedula"],
            "cv"         => $cv,
            "comentario" => $_POST["Comentario"],
            "oferta_id"  => $_POST["oferta_id"]
        ];

        // Guardar en BD
        $this->model->crear($data);

        header("Location: index.php?route=postulacion_exitosa");
        exit;
    }
}