<?php include_once 'views/template/header-principal.php' ?>
<h2 style="text-align: center; margin-top: 80px;">Reservación</h2>

<div class="container mt-4">
    <form action="" method="post" style="max-width: 600px; margin: 0 auto; margin-top: 20px; margin-bottom: 40px; border: 2px solid rgba(235, 204, 110, 0.5); border-radius: 10px; padding: 20px;">
        <p class="text-black" style="color: black !important;"><b>Los datos con (*) son obligatorios.</b></p>


        <div class="form-group">
            <label for="nombre">Nombre *</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe tus nombres" required>
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos *</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escribe tu apellido paterno y materno" required>
        </div>

        <div class="form-group">
            <label for="correo">Correo *</label>
            <input type="email" class="form-control" id="correo" name="correo" placeholder="correo@gmail.com" required>
        </div>

        <div class="col-lg-3">
            <div class="mb-3">
                <label for="habitacion" class="form-label">Tipo de Habitacion *</label>
                <select>
                    <option value="" disabled selected>Habitacion</option>
                    <option value="habitacion-simple">Habitación Simple</option>
                    <option value="habitacion-doble">Habitación Doble</option>
                    <option value="habitacion-con-terraza">Habitación con Terraza</option>
                </select>

            </div>
        </div>

        <div class="form-group">
            <label for="fecha">Fecha de llegada:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
            <div id="mensaje-error" style="color: red;"></div>
        </div>

        <div class="form-group">
            <label for="fecha">Fecha de salida:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
            <div id="mensaje-error" style="color: red;"></div>
        </div>

        <input type="hidden" name="estado" value="Pendiente">
        <input type="hidden" name="oculto" value="1">
        <button type="reset" class="btn btn-warning" style="margin-top: 10px;">Limpiar</button>
        <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Enviar</button>
    </form>
</div>
<?php include_once 'views/template/footer-principal.php'; ?>
</body>

</html>