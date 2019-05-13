<?php
	require_once('model/booking.php');
	
	$noSpaceSC = get_no_space('Squash courts');
	$noSpaceAR = get_no_space('Aerobics room');
	$noSpaceT = get_no_space('Tennis');
	$noSpaceAT = get_no_space('Athletics track');
	//print_r($noSpaceSC);
	
	require_once('view/calendar_avai_view.php');
?>