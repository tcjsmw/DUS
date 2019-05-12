<?php
include "header.php";
// require "dbconfig.php";

?>
<div id="content" class="row-fluid">
    <div class="span3 pages">
        <ul>
            <li class="sideways"><a href="facilities.php"> Our Facilities</a></li>
            <li class="sideways">
                <a href="events.php">Events</a>
                <ul >
                    <li><a href="eventService.php">Our Event Service</a></li>
                    <li class="navcurrent"><strong class="current"> Event Calendar</strong>
                    <li><a href="eventFeedback.php">Event Feedback</a></li>
                </ul>
            </li>
            <li class="sideways"><a href="https://www.teamdurham.com/facilities/durham/">Maiden Castle</a></li>
            <li class="sideways"><a href="https://www.teamdurham.com/queenscampus/">Queen's Campus</a></li>
            <li class="sideways"><a href="https://www.teamdurham.com/about/facilities/durham/contactus/">Contact Us</a></li>
        </ul>
    </div>

    <div class="span9">
        <h1>Event Calendar</h1>
    </div>



<?php include "footer.php";?>