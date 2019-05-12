<?php
/**
 * Created by PhpStorm.
 * User: ZYQ
 * Date: 2019-05-12
 * Time: 14:54
 */

require_once ('../model/common.php');

$current_user_all = get_by_from('*', 'id', 'user',$current_user);

$booking_id = $_GET['bid'];
$current_booking = get_by_from('*', 'id', 'booking', $booking_id);
$time_detail = get_some_by_filter('booking_timeslot', 'booking_id', $booking_id);
$related_users_idset = get_some_by_filter('user_booking', 'booking_id', $booking_id);
$related_users = array();
for($i=0; $i<count($related_users_idset); $i++){
    array_push($related_users,get_by_from('*', 'id', 'user', $related_users_idset[$i]['user_id']));
}
$related_facilities_idset = get_some_by_filter('booking_facility', 'booking_id', $booking_id);
$related_facilities = array();
for($i=0; $i<count($related_facilities_idset); $i++){
    array_push($related_facilities,get_by_from('*', 'id', 'facility', $related_facilities_idset[$i]['facility_id']));
}

$is_fixed = $current_booking['is_fixed'];
$is_manager = $current_user_all['is_manager'];
