<?php
//connect to database to display games
$servername = "mysql.dur.ac.uk";
$username = "dqrs89";
$password = "dqrs89ru34nner";
$dbname = "Xdqrs89_SE2_DUS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
   
   
      // username and password sent from form 
      
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "Select * from facility where id = 12344570";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
 while($row = $result->fetch_assoc()) {
	 
	
	$FacilityPrice = $row['price'];	

	 
  }
}  else 
{
    echo "0 results";
}
$conn->close();

?>

<html>
<head>
<meta charset="utf-8">
<title>Squash Courts</title>
<link href="DUSport.css" rel="stylesheet">
<link href="squash_price.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_txtsquash" style="position:absolute;left:223px;top:0px;width:467px;height:52px;z-index:10;">
<span style="color:#4F4F4F;font-family:Verdana;font-size:43px;">Squash Courts Prices</span></div>
<div id="wb_squashpricehr" style="position:absolute;left:235px;top:81px;width:304px;height:32px;z-index:11;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#4F4F4F;font-family:Verdana;font-size:13px;">Squash Courts: £<?php echo $FacilityPrice ?> per court, per hour.</span></div>


</div>
</body>
</html>




