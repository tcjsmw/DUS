<?php
	require_once('model/booking.php');
	
	$bookings = get_bookings_by_userid(1);//change to user_id
	
	require_once('view/calendar_user_view.php');
?>