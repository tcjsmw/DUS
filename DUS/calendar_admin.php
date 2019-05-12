<?php
	require_once('model/booking.php');
	
	$fixedEvents = get_fixed_events();
	$bookings = get_all_bookings();
	
	require_once('view/calendar_admin_view.php');
?>