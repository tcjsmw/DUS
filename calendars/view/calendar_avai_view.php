<html lang="en">
    <head>
		<title>Facility Availability</title>
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.1.0/main.css">
		<link rel="stylesheet" href="https://unpkg.com/@fullcalendar/daygrid/main.min.css">
		<link rel="stylesheet" href="https://unpkg.com/@fullcalendar/timegrid/main.min.css">
		
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://unpkg.com/@fullcalendar/core/main.min.js"></script>
		<script src="https://unpkg.com/@fullcalendar/interaction/main.min.js"></script>	
		<script src="https://unpkg.com/@fullcalendar/daygrid/main.min.js"></script>
		<script src="https://unpkg.com/@fullcalendar/timegrid/main.min.js"></script>
		<script src="https://unpkg.com/@fullcalendar/moment/main.min.js"></script>
		<script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/moment.min.js'></script>

		<script>
			$(document).ready(function() {
				//loadCalendar('calendarSC', 'Squash courts');
				var calendarEl = document.getElementById('calendarSC');
				var calendar = new FullCalendar.Calendar(calendarEl, {
				//var calendar = $('#calendar').fullCalendar({
					plugins: ['moment','interaction','dayGrid','timeGrid'],
					defaultView: 'dayGridMonth',
					displayEventEnd: true,
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'dayGridMonth,timeGridWeek,timeGridDay'
					},
					businessHours: [{
						daysOfWeek: [ 1, 2, 3 ,4 ,5],
						startTime: '07:00', 
						endTime: '22:00'  
					},{
						daysOfWeek: [ 6, 0 ],
						startTime: '9:00',
						endTime: '18:00'
					}],
					<?php if (!empty($noSpaceSC)){ print_r($noSpace);?>
					events: [
						<?php 
							foreach($noSpaceSC as $event){
								$endTime = $event['slot']+1;
								$start = $event['date']."T".$event['slot'].":00:00";
								$end = $event['date']."T".$endTime.":00:00";
								if($event['is_fixed']==1){
									echo "{ title: '".$event['title']." ".$event['content']."', start: '".$start."', end: '".$end."'},";
								}else if($event['space']>0){
									echo "{ title: '".$event['space']." space left', start: '".$start."', end: '".$end."', color: 'green'},";
								}else{
									echo "{ title: 'Fully booked', start: '".$start."', end: '".$end."', color: 'red'},";
								}
							}
						?>
					]
					<?php } ?>
				});
				calendar.render();
				//loadCalendar('calendarAR', 'Aerobics room');
				var calendarEl = document.getElementById('calendarAR');
				var calendar = new FullCalendar.Calendar(calendarEl, {
				//var calendar = $('#calendar').fullCalendar({
					plugins: ['moment','interaction','dayGrid','timeGrid'],
					defaultView: 'dayGridMonth',
					displayEventEnd: true,
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'dayGridMonth,timeGridWeek,timeGridDay'
					},
					businessHours: [{
						daysOfWeek: [ 1, 2, 3 ,4 ,5],
						startTime: '07:00', 
						endTime: '22:00'  
					},{
						daysOfWeek: [ 6, 0 ],
						startTime: '9:00',
						endTime: '18:00'
					}],
					<?php if (!empty($noSpaceAR)){ print_r($noSpace);?>
					events: [
						<?php 
							foreach($noSpaceAR as $event){
								$endTime = $event['slot']+1;
								$start = $event['date']."T".$event['slot'].":00:00";
								$end = $event['date']."T".$endTime.":00:00";
								if($event['is_fixed']==1){
									echo "{ title: '".$event['title']." ".$event['content']."', start: '".$start."', end: '".$end."'},";
								}else if($event['space']>0){
									echo "{ title: '".$event['space']." space left', start: '".$start."', end: '".$end."', color: 'green'},";
								}else{
									echo "{ title: 'Fully booked', start: '".$start."', end: '".$end."', color: 'red'},";
								}
							}
						?>
					]
					<?php } ?>
				});
				calendar.render();
				//loadCalendar('calendarT', 'Tennis');
				var calendarEl = document.getElementById('calendarT');
				var calendar = new FullCalendar.Calendar(calendarEl, {
				//var calendar = $('#calendar').fullCalendar({
					plugins: ['moment','interaction','dayGrid','timeGrid'],
					defaultView: 'dayGridMonth',
					displayEventEnd: true,
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'dayGridMonth,timeGridWeek,timeGridDay'
					},
					businessHours: [{
						daysOfWeek: [ 1, 2, 3 ,4 ,5],
						startTime: '07:00', 
						endTime: '22:00'  
					},{
						daysOfWeek: [ 6, 0 ],
						startTime: '9:00',
						endTime: '18:00'
					}],
					<?php if (!empty($noSpaceT)){ print_r($noSpace);?>
					events: [
						<?php 
							foreach($noSpaceT as $event){
								$endTime = $event['slot']+1;
								$start = $event['date']."T".$event['slot'].":00:00";
								$end = $event['date']."T".$endTime.":00:00";
								if($event['is_fixed']==1){
									echo "{ title: '".$event['title']." ".$event['content']."', start: '".$start."', end: '".$end."'},";
								}else if($event['space']>0){
									echo "{ title: '".$event['space']." space left', start: '".$start."', end: '".$end."', color: 'green'},";
								}else{
									echo "{ title: 'Fully booked', start: '".$start."', end: '".$end."', color: 'red'},";
								}
							}
						?>
					]
					<?php } ?>
				});
				calendar.render();
				//loadCalendar('calendarAT', 'Athletics track');
				var calendarEl = document.getElementById('calendarAT');
				var calendar = new FullCalendar.Calendar(calendarEl, {
				//var calendar = $('#calendar').fullCalendar({
					plugins: ['moment','interaction','dayGrid','timeGrid'],
					defaultView: 'dayGridMonth',
					displayEventEnd: true,
					header: {
						left: 'prev,next today',
						center: 'title',
						right: 'dayGridMonth,timeGridWeek,timeGridDay'
					},
					businessHours: [{
						daysOfWeek: [ 1, 2, 3 ,4 ,5],
						startTime: '07:00', 
						endTime: '22:00'  
					},{
						daysOfWeek: [ 6, 0 ],
						startTime: '9:00',
						endTime: '18:00'
					}],
					<?php if (!empty($noSpaceAT)){ ?>
					events: [
						<?php 
							foreach($noSpaceAT as $event){
								$endTime = $event['slot']+1;
								$start = $event['date']."T".$event['slot'].":00:00";
								$end = $event['date']."T".$endTime.":00:00";
								if($event['is_fixed']==1){
									echo "{ title: '".$event['title']." ".$event['content']."', start: '".$start."', end: '".$end."'},";
								}else if($event['space']>0){
									echo "{ title: '".$event['space']." space left', start: '".$start."', end: '".$end."', color: 'green'},";
								}else{
									echo "{ title: 'Fully booked', start: '".$start."', end: '".$end."', color: 'red'},";
								}
							}
						?>
					]
					<?php } ?>
				});
				calendar.render();
				$('#calendarAR').hide();
				$('#calendarT').hide();
				$('#calendarAT').hide();
			});
		</script>
		

	</head>
	
	<body>
	    <div class="main">
			<div>
				<button id='sc' value='Squash courts'>Squash courts</button>
				<button id='ar' value='Aerobics room'>Aerobics room</button>
				<button id='t' value='Tennis'>Tennis</button>
				<button id='at' value='Athletics track'>Athletics track</button>
			</div>
			<div id='calendarSC'></div>
			<div id='calendarAR'></div>
			<div id='calendarT'></div>
			<div id='calendarAT'></div>
		</div>
	</body>
	
	<script>
		$('#sc').click(function(event){
			$('#calendarAR').hide();
			$('#calendarT').hide();
			$('#calendarAT').hide();
			$('#calendarSC').show();
		});
		$('#ar').click(function(event){
			$('#calendarSC').hide();
			$('#calendarT').hide();
			$('#calendarAT').hide();
			$('#calendarAR').show();
		});
		$('#t').click(function(event){
			$('#calendarSC').hide();
			$('#calendarAR').hide();
			$('#calendarAT').hide();
			$('#calendarT').show();
		});		
		$('#at').click(function(event){
			$('#calendarSC').hide();
			$('#calendarAR').hide();
			$('#calendarT').hide();
			$('#calendarAT').show();
		});
	</script>
</html>