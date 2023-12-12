<?php include_once 'views/template/header-principal.php' ?>
<section class="contactenos-container">
    <h2 class="text-center" id="contactenos-title"><?php echo $data['title']; ?></h2>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su nombre aquí">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
        <input type="text" name="phone_number" class="form-control" id="exampleFormControlInput1" placeholder="XXXX-XXXX">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message"></textarea>
    </div>
    <div class="col-lg-12 col-md-12" id="btnsubmit">
        <button type="submit" class="default-btn btn-two">
            Enviar Mensaje
            <i class="flaticon-right"></i>
        </button>
        <div id="msgSubmit" class="h3 text-center hidden"></div>
        <div class="clearfix"></div>
    </div>
</section>

<?php include_once 'views/template/footer-principal.php' ?>