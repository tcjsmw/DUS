<?php
include('dbconfig.php');
include('dbfunction.php');
include('navFacilitiesAdd.php');
$sql = "INSERT INTO Xdqrs89_SE2_DUS.facility VALUES (
'".$_POST['adminFacilitiesAddId']."', 
'".$_POST['adminFacilitiesAddName']."', 
'".$_POST['adminFacilitiesAddDescription']."'
'".$_POST['adminFacilitiesAddPrice']."'
'".$_POST['adminFacilitiesAddCapacity']."'
'".$_POST['adminFacilitiesAddEmail']."'
'".$_POST['adminFacilitiesAddTel']."'
'".$_POST['adminFacilitiesAddAddress']."'
);";
$pdo->exec($sql);
?>
<html>
<head>
    <title>AdminFacilitiesAdd</title>
    <link rel="stylesheet" type="text/css" href="nav.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Functions to alert if a value is null -->
    <script>
        function adminFacilitiesAdd(){
            if(document.getElementById("adminFacilitiesAddId").value==""){
                alert("Please enter Facility Id.");
                return false;
            }
            else if(document.getElementById("adminFacilitiesAddName").value==""){
                alert("Please enter Facility Name.");
                return false;
            }
            else if(document.getElementById("adminFacilitiesAddDescription").value==""){
                alert("Please enter Facility Description.");
                return false;
            }
			else if(document.getElementById("adminFacilitiesAddPrice").value==""){
                alert("Please enter Facility Price.");
                return false;
            }
			else if(document.getElementById("adminFacilitiesAddCapacity").value==""){
                alert("Please enter Facility Capacity.");
                return false;
            }
			else if(document.getElementById("adminFacilitiesAddEmail").value==""){
                alert("Please enter Facility Contact Email.");
                return false;
            }
			else if(document.getElementById("adminFacilitiesAddTel").value==""){
                alert("Please enter Facility Contact Tel.");
                return false;
            }
			else if(document.getElementById("adminFacilitiesAddAddress").value==""){
                alert("Please enter Facility Contact Address.");
                return false;
            }
        }
    </script>
</head>

<body id="body">

<!-- Add a facility -->
<div class = "input">
    <form action="adminFacilitiesAdd.php" method="post" id="adminFacilitiesAdd">
        <p>Please input the information for adding a facility:</p>
        <p>
            <label for="adminFacilitiesAddId">Facility Id: </label>
            <input type="number" name="adminFacilitiesAddId" id="adminFacilitiesAddId"/>
        </p>

        <p>
            <label for="adminFacilitiesAddName">Facility Name: </label>
            <input type="text" name="adminFacilitiesAddName" id="adminFacilitiesAddName" />
        </p>

        <p>
            <label for="adminFacilitiesAddDescription">Facility Description: </label>
            <input type="text" name="adminFacilitiesAddDescription" id="adminFacilitiesAddDescription" />
        </p>
		
		<p>
            <label for="adminFacilitiesAddPrice">Facility Price: </label>
            <input type="number" name="adminFacilitiesAddPrice" id="adminFacilitiesAddPrice" />
        </p>
		
		<p>
            <label for="adminFacilitiesAddCapacity">Facility Capacity: </label>
            <input type="number" name="adminFacilitiesAddCapacity" id="adminFacilitiesAddCapacity" />
        </p>
		
		<p>
            <label for="adminFacilitiesAddEmail">Facility Contact Email: </label>
            <input type="text" name="adminFacilitiesAddEmail" id="adminFacilitiesAddEmail" />
        </p>
		
		<p>
            <label for="adminFacilitiesAddTel">Facility Contact Tel: </label>
            <input type="text" name="adminFacilitiesAddTel" id="adminFacilitiesAddTel" />
        </p>
		
		<p>
            <label for="adminFacilitiesAddAddress">Facility Contact Address: </label>
            <input type="text" name="adminFacilitiesAddAddress" id="adminFacilitiesAddAddress" />
        </p>

        <div class = "button">
            <input type="submit" onclick="return adminFacilitiesAdd();" value="Submit" />
        </div>
    </form>
</div>

</body>
</html>