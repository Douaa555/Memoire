
<!DOCTYPE html>
<html>
<head>
    <title>Calendar</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    
</head>
<body style="background:rgb(236, 219, 162)">
    <div >
@include('navigation-menu')
  
<div class="container" style="border-radius:20px;margin-top:30px;padding-top:20px;margin-bottom:30px;padding-bottom:20px;background-color: rgba(255, 255, 255, 0.795);">
    
    <div id='calendar'></div>
</div>
   
<script>
$(document).ready(function () {
    events={!! json_encode($events) !!};

    $('#calendar').fullCalendar({
        editable: true,
        displayEventTime: true,
        editable: true,
        selectable: true,
        selectHelper: true,
        events: events,
    });
});
 
</script>
</div>
</body>
</html>