<?php
	require_once('model/booking.php');
	
	$fixedEvents = get_fixed_events();
	//print_r($fixedEvents);
	
	require_once('view/calendar_fixed_view.php');
?>