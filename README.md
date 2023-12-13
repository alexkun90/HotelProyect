# HotelProyect

codigo para iniciar a lugares con session


<?php if(empty($_SESSION['id_usuario'])) {?>
    <a href="<?php echo RUTA_PRINCIPAL . 'login'; ?>" class= "default-btn">
        Reservar
        <i class= "flaticon-right"></i>
    </a>
<?php }else {?>
    <a href="<?php echo RUTA_PRINCIPAL . 'login'; ?>" class="default-btn">
        Login
        <i class= "flaticon-right"></i>
    </a>
<?php } ?> 
