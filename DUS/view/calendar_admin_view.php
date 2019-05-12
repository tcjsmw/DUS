<html lang="en">
    <head>
		<title>Facility Availability</title>
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.css">
		<link rel="stylesheet" href="https://unpkg.com/@fullcalendar/daygrid/main.min.css">
		<link rel="stylesheet" href="https://unpkg.com/@fullcalendar/timegrid/main.min.css">
		<link rel="stylesheet" href="https://unpkg.com/@fullcalendar/list/main.min.css">
		
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://unpkg.com/@fullcalendar/core/main.min.js"></script>
		<script src="https://unpkg.com/@fullcalendar/interaction/main.min.js"></script>	
		<script src="https://unpkg.com/@fullcalendar/daygrid/main.min.js"></script>
		<script src="https://unpkg.com/@fullcalendar/timegrid/main.min.js"></script>
		<script src="https://unpkg.com/@fullcalendar/list/main.min.js"></script>

		<script>
			document.addEventListener('DOMContentLoaded', function(){
			//$(document).ready(function() {
				var calendarEl = document.getElementById('calendar');
				var calendar = new FullCalendar.Calendar(calendarEl, {
				//var calendar = $('#calendar').fullCalendar({
					plugins: ['interaction','dayGrid','timeGrid','list'],
					defaultView: 'dayGridMonth',
					displayEventEnd: true,
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'dayGridMonth,timeGridWeek,timeGridDay,listDay'
					},
					
					<?php if (!empty($fixedEvents)||!empty($bookings)){ ?>
					events: [
						<?php if(!empty($fixedEvents)){
							foreach($fixedEvents as $event){
								$endTime = $event['slot']+1;
								$start = $event['date']."T".$event['slot'].":00:00";
								$end = $event['date']."T".$endTime.":00:00";
								echo "{ title: '".$event['title']." ".$event['content']."', start: '".$start."', end: '".$end."'},";
							}
						}
						if(!empty($bookings)){
							foreach($bookings as $event){
								$endTime = $event['slot']+1;
								$start = $event['date']."T".$event['slot'].":00:00";
								$end = $event['date']."T".$endTime.":00:00";
								echo "{ title: '".$event['facility']." booked by ".$event['user']."', start: '".$start."', end: '".$end."', color: 'green'},";
							}
						}
						?>
					]
					<?php } ?>
					
				});
				calendar.render();
			});
		</script>
	</head>
	
	<body>
	    <div class="main">
			<div id='calendar'></div>
		</div>
	</body>
</html>