<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE . ' | ' . $data['title']; ?></title>
    <link rel="stylesheet" href="<?php echo RUTA_PRINCIPAL . 'assets/admin/'; ?>css/adminlte.css">
    <style>
        .info-box {
            border-radius: 10px;
            margin-top: 20px;
        }

        .info-box:not(:last-child) {
            margin-bottom: 15px;
        }

        .chart-container {
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
        }

        .content-wrapper {
            margin-left: 250px;
            background-color: white;
            padding: 20px;
            /* O el espaciado que prefieras */
        }

        .col-lg-4 {
            flex: 0 0 30%;
            max-width: 30%;
        }
    </style>
</head>

<body>
    <?php include_once 'views/template/menu-admin.php' ?>
    <div class="content-wrapper">
        <div class="d-flex justify-content-center align-items-center">
            <div class="col-lg-4">
                <div class="info-box bg-info">
                    <div class="info-box-content">
                        <span class="info-box-number">4</span>
                        <span class="info-box-text">Usuarios Creados</span>
                    </div>
                    <span class="info-box-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info-box bg-success">
                    <div class="info-box-content">
                        <span class="info-box-number">4</span>
                        <span class="info-box-text">Habitaciones Reservadas</span>
                    </div>
                    <span class="info-box-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-house-add" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h4a.5.5 0 1 0 0-1h-4a.5.5 0 0 1-.5-.5V7.207l5-5 6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                            <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 1 0 1 0v-1h1a.5.5 0 1 0 0-1h-1v-1a.5.5 0 0 0-.5-.5" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info-box bg-warning">
                    <div class="info-box-content">
                        <span class="info-box-number">3</span>
                        <span class="info-box-text">Eventos Añadidos</span>
                    </div>
                    <span class="info-box-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-calendar4-event" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z" />
                            <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>
        <div class="chart-container">
            <canvas id="myChart"></canvas>
        </div>
        <br>
        <div class="chart-container">
            <canvas id="myChart2"></canvas>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Septiembre','Octubre','Noviembre', 'Diciembre'],
                datasets: [{
                    label: 'Habitaciones Reservadas',
                    data: [0, 0, 1, 3],
                    borderWidth: 1,
                    borderColor: 'red',
                    backgroundColor: 'red',
                    pointStyle: 'circle',
                    pointBackgroundColor: 'red',
                    pointBorderColor: 'red'
                }]
            }
        });

        const ctx2 = document.getElementById('myChart2');

        new Chart(ctx2, {
            type: 'line',
            data: {
                labels: ['Octubre','Noviembre', 'Diciembre','Enero','Febrero'],
                datasets: [{
                    label: 'Eventos Añadidos',
                    data: [0, 1, 2, 0, 0],
                    borderWidth: 1,
                    borderColor: 'blue',
                    backgroundColor: 'blue',
                    pointStyle: 'circle',
                    pointBackgroundColor: 'blue',
                    pointBorderColor: 'blue'
                }]
            }
        });
    </script>
</body>

</html>