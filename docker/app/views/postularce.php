<div class="container py-5">

    <header id="hero" class="py-4">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <h1 class="display-5 fw-bold lh-1 mb-3">
                    Postúlate para dar paso a tu nueva oportunidad <span class="text-primary">laboral</span>
                </h1>
                <p class="lead text-secondary">
                    En este apartado podrás rellenar los campos correspondientes para así dar inicio a tu proceso de postulación.
                </p>
            </div>

            <div class="col-lg-5">
                <div class="card p-4 p-lg-5 h-100 border-0 shadow-sm rounded-4">
                    <h2 class="h4 mb-3"><i class="bi bi-award text-primary me-2"></i>¿Por dónde empiezo?</h2>
                    <ul class="list-unstyled small mb-0">
                        <li><i class="bi bi-dot text-primary me-2"></i>Registra tus datos.</li>
                        <li><i class="bi bi-dot text-primary me-2"></i>Sube tu CV (PDF).</li>
                        <li><i class="bi bi-dot text-primary me-2"></i>Revisa que todo documento sea vigente.</li>
                        <li><i class="bi bi-dot text-primary me-2"></i>Aplica con un clic.</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <section class="my-5">
        <h4>Rellena los campos con la información correspondiente</h4>

        <form class="p-4 bg-white rounded shadow-sm mt-4"
      action="index.php?route=guardar_postulacion"
      method="POST"
      enctype="multipart/form-data">

    <!-- ID de la oferta -->
   
    <input type="hidden" name="oferta_id" value="<?= $idOferta ?>">

    <div class="row g-3 mb-3">
        <div class="col-md-3">
            <input type="text" name="Nombre" class="form-control" placeholder="Nombre">
        </div>
        <div class="col-md-3">
            <input type="text" name="Apellido1" class="form-control" placeholder="Primer Apellido">
        </div>
        <div class="col-md-3">
            <input type="text" name="Apellido2" class="form-control" placeholder="Segundo Apellido">
        </div>
        <div class="col-md-3">
            <input type="date" name="edad" class="form-control">
        </div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col-md-6">
            <input type="email" name="Correo" class="form-control" required placeholder="Correo electrónico">
        </div>

        <div class="col-md-6">
            <input type="number" name="Cedula" class="form-control" placeholder="Cédula">
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="cv">Subir archivo</label>
            <input type="file" class="form-control" id="cv" name="cv">
        </div>
    </div>

    <div class="mb-3">
        <textarea name="Comentario" rows="6" class="form-control"
                  placeholder="Cuéntenos por qué desea postularse"></textarea>
    </div>

    <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" required>
        <label class="form-check-label">Acepto los términos y condiciones</label>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Enviar postulación</button>

</form>

</form>

