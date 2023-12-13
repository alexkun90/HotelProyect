<?php include_once 'views/template/header-principal.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<style>
    body {
        margin: 0;
        padding: 0;
    }

    #calendar {
        border: 1px solid black;
        height: 600px;
        width: 70%;
        max-width: 1200px;
        margin: 20px auto;
        box-sizing: border-box;
    }
</style>
<title>FullCalendar Example</title>

<div class="card" style="width:100%; background-color: rgba(235, 204, 110, 0.5);">
    <h5 class="card-header">Vuelve a Reservar</h5>
    <div class="card-body">
        <h5 class="card-title">Reservas</h5>
        <p class="card-text">Ya que viste el calendario que esperas para reservar tu evento? Entra ya al boton y vuelve al apartado
            de reservar evento, donde puedes llenar la informacion para enviar la solicitud y pueda realizarse tu reserva
            recuerda siempre meterte al apartado de ver caledario para ver este calendario y puedas ver las fechas y sus eventos
        </p>
        <a href="<?php echo RUTA_PRINCIPAL . 'reservasE'; ?>" class="btn btn-primary">Reserva</a>
    </div>
</div>



<div id="calendar"></div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendar = $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultView: 'month',
            selectable: true,
            select: function(start, end, jsEvent, view) {
                var title = prompt('Nombre del evento:');
                if (title) {
                    var startTime = prompt('Hora de inicio (HH:mm):');
                    if (startTime) {
                        var endTime = prompt('Hora de fin (HH:mm):');
                        if (!endTime) {
                            // Si no se especifica la hora de fin, asume que es 1 hora después de la hora de inicio
                            endTime = moment(startTime, 'HH:mm').add(1, 'hour').format('HH:mm');
                        }

                        // Combina la fecha seleccionada con las horas especificadas
                        var startDateTime = moment(start.format('YYYY-MM-DD') + ' ' + startTime, 'YYYY-MM-DD HH:mm');
                        var endDateTime = moment(start.format('YYYY-MM-DD') + ' ' + endTime, 'YYYY-MM-DD HH:mm');

                        var eventData = {
                            title: title,
                            start: startDateTime,
                            end: endDateTime,
                            allDay: false
                        };
                        calendar.fullCalendar('renderEvent', eventData, true);
                    }
                }
            },
            eventClick: function(calEvent, jsEvent, view) {
                // Al hacer clic en un evento, pregunta si se desea eliminar
                var deleteEvent = confirm('¿Quieres eliminar el evento "' + calEvent.title + '"?');
                if (deleteEvent) {
                    calendar.fullCalendar('removeEvents', calEvent._id); // Elimina el evento
                }
            },
            events: [{
                    title: 'Boda',
                    start: '2023-12-15',
                    allDay: true
                },
                {
                    title: 'Cumple',
                    start: '2023-12-16T10:00:00',
                    end: '2023-12-16T14:00:00',
                    allDay: false
                },
                {
                    title: 'Graduacion',
                    start: '2023-12-11T15:30:00',
                    end: '2023-12-11T17:30:00',
                    allDay: false
                }
            ]
        });
    });
</script>

</body>

</html>