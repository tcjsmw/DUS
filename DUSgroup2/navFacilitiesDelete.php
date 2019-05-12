<?php
include "header.php";
include "side.php";
session_start();
if($_SESSION["loginStatus"] != 1){
    echo "<script>
            window.location = 'navLoginUser.php';
        </script>";
}
// require "dbconfig.php";

?>

<div class="span9">
    <h1>Delete Facilities</h1>
</div>



<?php include "footer.php";?>