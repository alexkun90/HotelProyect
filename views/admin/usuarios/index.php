<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE . ' | ' . $data['title']; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>css/adminlte.css">
    <style>
        #datatable {
            margin-left: 250px;
            background-color: white;
            padding: 20px;
            width: auto;
        }

        .card {
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php include_once 'views/template/menu-admin.php' ?>
    <div class="col-md-12" id="datatable">
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">Habitaciones Reservadas</h3>
            </div>
            <div class="card-body p-0">
                <div class="row mt-2">
                    <div class="col-md-10">
                        <table id="example" class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Correo</th>
                                    <th>Tipor de Habitacion</th>
                                    <th>Fecha llegada</th>
                                    <th>Fecha salida</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mauricio</td>
                                    <td>Hidalgo</td>
                                    <td>mauhidalgo312@gmail.com</td>
                                    <td>Habitacion Doble</td>
                                    <td>2023-12-15</td>
                                    <td>2023-12-20</td>
                                </tr>
                                <tr>
                                    <td>Pablo</td>
                                    <td>Castillo</td>
                                    <td>pablo@gmail.com</td>
                                    <td>Habitacion Simple</td>
                                    <td>2023-12-10</td>
                                    <td>2023-12-13</td>
                                </tr>
                                <tr>
                                    <td>Gabriel</td>
                                    <td>Guerra</td>
                                    <td>gabo@gmail.com</td>
                                    <td>Habitacion Doble</td>
                                    <td>2023-12-20</td>
                                    <td>2023-12-25</td>
                                </tr>
                                <tr>
                                    <td>Steven</td>
                                    <td>Artavia</td>
                                    <td>steven@gmail.com</td>
                                    <td>Habitacion con Terraza</td>
                                    <td>2023-12-15</td>
                                    <td>2023-12-20</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        new DataTable('#myTable');
    </script>
</body>

</html>