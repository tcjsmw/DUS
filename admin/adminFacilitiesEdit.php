<?php
include('dbconfig.php'); 
include('dbfunction.php'); 
include('navFacilitiesEdit.php'); 
$sql = "UPDATE Xdqrs89_SE2_DUS.facility SET 
facility.name, facility.description, facility.price, facility.capacity, facility.contact_email, facility.contact_tel, facility.contact_address = 
".$_POST['adminFacilitiesEditName'].", 
".$_POST['adminFacilitiesEditDescription'].", 
".$_POST['adminFacilitiesEditPrice'].", 
".$_POST['adminFacilitiesEditCapacity'].", 
".$_POST['adminFacilitiesEditEmail'].", 
".$_POST['adminFacilitiesEditTel'].", 
".$_POST['adminFacilitiesEditAddress']." 
WHERE facility.id = ".$_POST['adminFacilitiesEditId'].";";
$pdo->exec($sql);
?>
<html>
<head>
    <title>AdminFacilitiesEdit</title>
    <link rel="stylesheet" type="text/css" href="nav.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Functions to alert if a value is null -->
    <script>
        function adminFacilitiesEdit(){
            if(document.getElementById("adminFacilitiesEditId").value==""){
                alert("Please enter Facility Id.");
                return false;
            }
            else if(document.getElementById("adminFacilitiesEditName").value==""){
                alert("Please enter Facility Name.");
                return false;
            }
            else if(document.getElementById("adminFacilitiesEditDescription").value==""){
                alert("Please enter Facility Description.");
                return false;
            }
			else if(document.getElementById("adminFacilitiesEditPrice").value==""){
                alert("Please enter Facility Price.");
                return false;
            }
			else if(document.getElementById("adminFacilitiesEditCapacity").value==""){
                alert("Please enter Facility Capacity.");
                return false;
            }
			else if(document.getElementById("adminFacilitiesEditEmail").value==""){
                alert("Please enter Facility Contact Email.");
                return false;
            }
			else if(document.getElementById("adminFacilitiesEditTel").value==""){
                alert("Please enter Facility Contact Tel.");
                return false;
            }
			else if(document.getElementById("adminFacilitiesEditAddress").value==""){
                alert("Please enter Facility Contact Address.");
                return false;
            }
        }
    </script>
</head>

<body id="body">

<!-- Edit a facility -->
<div class = "input">
    <form action="adminFacilitiesEdit.php" method="post" id="adminFacilitiesEdit">
        <p>Please input the information for editing a facility:</p>
        <p>
            <label for="adminFacilitiesEditId">Facility Id: </label>
            <input type="number" name="adminFacilitiesEditId" id="adminFacilitiesEditId"/>
        </p>

        <p>
            <label for="adminFacilitiesEditName">Facility Name: </label>
            <input type="text" name="adminFacilitiesEditName" id="adminFacilitiesEditName" />
        </p>

        <p>
            <label for="adminFacilitiesEditDescription">Facility Description: </label>
            <input type="text" name="adminFacilitiesEditDescription" id="adminFacilitiesEditDescription" />
        </p>
		
		<p>
            <label for="adminFacilitiesEditPrice">Facility Price: </label>
            <input type="number" name="adminFacilitiesEditPrice" id="adminFacilitiesEditPrice" />
        </p>
		
		<p>
            <label for="adminFacilitiesEditCapacity">Facility Capacity: </label>
            <input type="number" name="adminFacilitiesEditCapacity" id="adminFacilitiesEditCapacity" />
        </p>
		
		<p>
            <label for="adminFacilitiesEditEmail">Facility Contact Email: </label>
            <input type="text" name="adminFacilitiesEditEmail" id="adminFacilitiesEditEmail" />
        </p>
		
		<p>
            <label for="adminFacilitiesEditTel">Facility Contact Tel: </label>
            <input type="text" name="adminFacilitiesEditTel" id="adminFacilitiesEditTel" />
        </p>
		
		<p>
            <label for="adminFacilitiesEditAddress">Facility Contact Address: </label>
            <input type="text" name="adminFacilitiesEditAddress" id="adminFacilitiesEditAddress" />
        </p>

        <div class = "button">
            <input type="submit" onclick="return adminFacilitiesEdit();" value="Submit" />
        </div>
    </form>
</div>

</body>
</html>