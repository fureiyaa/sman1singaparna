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

    #calendar {
        background: #ffffff;
        border-radius: 0.5rem;
        padding: 1rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

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

    .fc-day-today {
        background-color: #fff8e1 !important;
    }

    .fc-event {
        background-color: #002366 !important;
        border: none !important;
        color: #FFD700 !important;
        font-weight: 600;
    }
    .modal-header {
        background-color: #002366;
    }
</style>

<div class="container my-5">
    <div class="agenda-header">
        <h2><i class="fa-solid fa-calendar-days me-2"></i> Agenda SMAN 1 SINGAPARNA</h2>
    </div>

    <div id="calendar"></div>
</div>

<!-- Modal Detail Event -->
<div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header text-white">
        <h5 class="modal-title" id="eventModalLabel">Detail Agenda</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Judul:</strong> <span id="eventTitle"></span></p>
        <p><strong>Tanggal:</strong> <span id="eventDate"></span></p>
        <p><strong>Lokasi:</strong> <span id="eventLocation"></span></p>
        <p><strong>Deskripsi:</strong> <span id="eventDescription"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
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
            // Isi data modal
            document.getElementById("eventTitle").innerText = info.event.title;
            document.getElementById("eventDate").innerText = info.event.start.toLocaleDateString('id-ID');
            document.getElementById("eventLocation").innerText = info.event.extendedProps.location ?? '-';
            document.getElementById("eventDescription").innerText = info.event.extendedProps.description ?? '-';

            // Tampilkan modal
            let eventModal = new bootstrap.Modal(document.getElementById('eventModal'));
            eventModal.show();
        }
    });

    calendar.render();
});
</script>
@endsection
