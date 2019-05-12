<?php
	require_once('model/booking.php');
	
	$noSpaceSQ = get_no_space('Squash court');
	$noSpaceAR = get_no_space('Aerobics room');
	$noSpaceT = get_no_space('Tennis');
	$noSpaceAT = get_no_space('Athletics track');
	//print_r($noSpaceAT);
	
	require_once('view/calendar_avai_view.php');
?>