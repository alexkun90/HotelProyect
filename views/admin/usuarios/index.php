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
                <h3 class="card-title">Usuarios existentes</h3>
            </div>
            <div class="card-body p-0">
                <div class="row mt-2">
                    <div class="col-md-10">
                        <table id="example" class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Direccion</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mauricio</td>
                                    <td>mauhidalgo312@gmail.com</td>
                                    <td>8686-8484</td>
                                    <td>San Sebastian</td>
                                    <td>2023-12-13</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Alex</td>
                                    <td>Alex@gmail.com</td>
                                    <td>1234-5678</td>
                                    <td>San Jose</td>
                                    <td>2023-12-13</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Hermes</td>
                                    <td>Hermes@gmail.com</td>
                                    <td>8765-4321</td>
                                    <td>San Jose</td>
                                    <td>2023-12-13</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Sebas</td>
                                    <td>Sebas@gmail.com</td>
                                    <td>1111-1111</td>
                                    <td>San Jose</td>
                                    <td>2023-12-13</td>
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