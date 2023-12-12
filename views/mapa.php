<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicacion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="<?php echo RUTA_PRINCIPAL . 'assets/principal/'; ?>css/index.css">
</head>

<body>
    <header style="margin-bottom: 25px;">
        <?php include_once 'menu.php'; ?>
    </header>
    <section id="ubicacion" class="container mt-4">
        <h3 id="titulo-ubicacion" class="lead text-center">Nuestra Ubicacion</h3>
        <div class="underline"></div>
        <div class="row">
            <div id="mapa" class="col-md-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.24665591273737!2d-85.09164701930538!3d10.425820741584298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f9ffb5176dcc829%3A0x866b5ab9b6f327b8!2sHotel%20la%20Avenida!5e0!3m2!1ses-419!2scr!4v1689088916285!5m2!1ses-419!2scr" width="100%" height="450" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <div id="texto-ubicacion" class="container">
        <p class="lead text-center">Estamos ubicados en el centro de Cañas, Guanacaste, específicamente al costado sur del parque central. Además, nos encontramos al frente de los cajeros automáticos del Banco Nacional o junto a la tienda Curacao.</p>
    </div>
    <?php include_once 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>