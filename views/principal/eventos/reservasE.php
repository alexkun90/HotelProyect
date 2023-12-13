<?php include_once 'views/template/header-principal.php'; ?>
<link rel="stylesheet" href="./css/reservasE.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/principal/css/index.css">

<body>
    <div class="card" style=" width:100%; background-color: rgba(235, 204, 110, 0.5);">
        <h5 class="card-header">Mostrar Calendario</h5>
        <div class="card-body">
            <h5 class="card-title">Calendario</h5>
            <p class="card-text">Ingresa al calendario para ver disponibilidad de fechas para ver en que fechas puedes reservar tu evento especial.
                En Hotel La Avenida,te invitamos a dar el primer paso hacia la realización de tus celebraciones más especiales.
                Ya sea una boda de ensueño, una fiesta vibrante o una reunión empresarial exitosa,
                nuestro equipo está aquí para convertir tus ideas en experiencias memorables.</p>
            <a href="<?php echo RUTA_PRINCIPAL . 'FullCalendar'; ?>" class="btn btn-primary">Calendario</a>
        </div>
    </div>
    <h2 style="text-align: center; margin-top: 80px;">Formulario de Reservación</h2>

    <div class="container mt-4">
        <form action="" method="post" style="max-width: 600px; margin: 0 auto; margin-top: 20px; margin-bottom: 40px; border: 2px solid rgba(235, 204, 110, 0.5); border-radius: 10px; padding: 20px;">

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tu nombre" required>
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escribe tus apellidos" required>
            </div>

            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="correo@gmail.com" required>
            </div>

            <div class="form-group">
                <label for="fecha">Fecha del evento</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
                <div id="mensaje-error" style="color: red;"></div>
            </div>

            <input type="hidden" name="estado" value="Pendiente">
            <input type="hidden" name="oculto" value="1">
            <button type="reset" class="btn btn-warning" style="margin-top: 10px;">Limpiar</button>
            <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-vue@2.21.2/dist/bootstrap-vue.js"></script>
    <?php include_once 'views/template/footer-principal.php' ?>
</body>

</html>