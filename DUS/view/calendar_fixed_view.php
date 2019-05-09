<html lang="en">
    <head>
		<title>Fixed Event</title>
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.css">
		<link rel="stylesheet" href="https://unpkg.com/@fullcalendar/daygrid/main.min.css">
		<link rel="stylesheet" href="https://unpkg.com/@fullcalendar/timegrid/main.min.css">
		
		<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.js"></script>
		<script src="https://unpkg.com/@fullcalendar/interaction/main.min.js"></script>	
		<script src="https://unpkg.com/@fullcalendar/daygrid/main.min.js"></script>
		<script src="https://unpkg.com/@fullcalendar/timegrid/main.min.js"></script>
		
		<script>
			document.addEventListener('DOMContentLoaded', function(){
				var calendarEl = document.getElementById('calendar');
				var calendar = new FullCalendar.Calendar(calendarEl, {
					plugins: ['interaction','dayGrid','timeGrid'],
					defaultView: 'dayGridMonth',
					selectable: true,
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'dayGridMonth,timeGridWeek,timeGridDay'
					},
					<?php if (!empty($fixedEvents)){ ?>
					events: [
						<?php 
							foreach($fixedEvents as $event){
								$endTime = $event['slot']+1;
								$start = $event['date']."T".$event['slot'].":00:00";
								$end = $event['date']."T".$endTime.":00:00";
								echo "{ title: '".$event['title']."', start: '".$start."', end: '".$end."'},";
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