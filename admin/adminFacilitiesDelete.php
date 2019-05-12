<?php
include('dbconfig.php'); 
include('dbfunction.php'); 
include('navFacilitiesDelete.php'); 
$sql = "DELETE FROM Xdqrs89_SE2_DUS.facility WHERE facility.id = '".$_POST['adminFacilitiesDeleteId']."'";
$pdo->exec($sql);
?>
<html>
<head>
    <title>AdminFacilitiesDelete</title>
    <link rel="stylesheet" type="text/css" href="nav.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Functions to alert if a value is null -->
    <script>
        function adminFacilitiesDeleteId(){
            if(document.getElementById("adminFacilitiesDeleteId").value==""){
                alert("Please enter Facility Id.");
                return false;
            }
        }
    </script>
</head>

<body id="body">

<!-- Delete a facility -->
<div class = "input">
    <form action="adminFacilitiesDelete.php" method="post" id="adminFacilitiesDelete">
        <p>
            <label for="adminFacilitiesDeleteId">Please input the Facility Id for deleting a facility: </label>
            <input type="number" name="adminFacilitiesDeleteId" id="adminFacilitiesDeleteId"/>
        </p>
        <div class = "button">
            <input type="submit" onclick="return adminFacilitiesDeleteId();" value="Submit" />
        </div>
    </form>
</div>

</body>
</html>