@extends('template')

@section('content')
<style>
    .agenda-header {
        background: linear-gradient(90deg, #002366, #003399);
        color: white;
        padding: 1.2rem;
        border-radius: 0.5rem;
        margin-bottom: 2rem;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .agenda-header h2 {
        font-weight: bold;
        margin: 0;
    }

    /* Kalender */
    #calendar {
        background: #ffffff;
        border-radius: 0.5rem;
        padding: 1rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    /* Toolbar FullCalendar */
    .fc-toolbar-title {
        color: #002366 !important;
        font-weight: 700;
    }

    .fc-button {
        background-color: #002366 !important;
        border: none !important;
        color: white !important;
        font-weight: 500;
    }

    .fc-button:hover {
        background-color: #FFD700 !important;
        color: #002366 !important;
    }

    /* Hari ini */
    .fc-day-today {
        background-color: #fff8e1 !important; /* kuning lembut */
    }

    /* Event */
    .fc-event {
        background-color: #002366 !important;
        border: none !important;
        color: #FFD700 !important;
        font-weight: 600;
    }
</style>

<div class="container my-5">
    <div class="agenda-header">
        <h2><i class="fa-solid fa-calendar-days me-2"></i> Agenda Sekolah</h2>
    </div>

    <div id="calendar"></div>
</div>

<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.css" rel="stylesheet">

<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let calendarEl = document.getElementById('calendar');

    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'id',
        themeSystem: 'bootstrap5',
        events: '{{ route("agenda.events") }}',
        eventClick: function(info) {
            alert(
                "Judul: " + info.event.title + "\n" +
                "Tanggal: " + info.event.start.toLocaleDateString('id-ID') + "\n" +
                "Lokasi: " + (info.event.extendedProps.location ?? '-') + "\n" +
                "Deskripsi: " + (info.event.extendedProps.description ?? '-')
            );
        }
    });

    calendar.render();
});
</script>
@endsection
