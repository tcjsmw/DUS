<?php
    require_once('database.php');
	
	function get_fixed_events(){
		$sql = "SELECT booking.id AS id, title, content, facility.name AS facility, date, slot FROM booking JOIN booking_timeslot AS t ON t.booking_id = booking.id JOIN booking_facility AS f ON f.booking_id = booking.id JOIN facility ON f.facility_id = facility.id WHERE is_fixed = 1;";
		$events = get_all_data($sql);
		return $events;
	}
?>