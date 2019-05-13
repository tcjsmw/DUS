<!doctype html>

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

$sql = "Select * from facility where id = 12344572";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
 while($row = $result->fetch_assoc()) {
	 
	$FacilityName = $row['name'];
	$FacilityDescription = $row['description'];
	$FacilityPrice = $row['price'];	
	$FacilityCapacity = $row['capacity'];
	$FacilityContactEmail = $row['contact_email'];
	$FacilityContactTel = $row['contact_tel'];
	$FacilityContactAdd = $row['contact_address'];	
	$FacilityFirstPic = $row['pic'];
	$FacilitySecondPic = $row['pic_2'];
	 
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
<title>Aerobics</title>
<link href="DUSport.css" rel="stylesheet">
<link href="areobics.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_txtaerobics" style="position:absolute;left:228px;top:0px;width:331px;height:52px;z-index:11;">
<span style="color:#4F4F4F;font-family:Verdana;font-size:43px;"><?php echo $FacilityName ?></span></div>
<div id="wb_aerobics1" style="position:absolute;left:234px;top:480px;width:300px;height:232px;z-index:12;">
<img src= <?php echo $FacilityFirstPic?> id="aerobics1" alt=""></div>
<div id="wb_aerobics2" style="position:absolute;left:581px;top:480px;width:300px;height:232px;z-index:13;">
<img src=<?php echo $FacilitySecondPic?> id="aerobics2" alt=""></div>
<div id="wb_txtaerodetails" style="position:absolute;left:231px;top:65px;width:748px;height:240px;z-index:14;">
<span style="color:#4F4F4F;font-family:Verdana;font-size:13px;line-height:24px;"><?php echo $FacilityDescription ?></span></div>
<div id="wb_txtaerocontactadd" style="position:absolute;left:234px;top:282px;width:250px;height:96px;z-index:16;">
<span style="color:#4F4F4F;font-family:Verdana;font-size:13px;line-height:24px;"> <strong>Contact: </strong><br> <?php echo $FacilityContactEmail ?><br><strong><?php echo $FacilityContactAdd ?></strong> <br>  Tel:<?php echo $FacilityContactTel ?></span></div>
</div>
</body>
</html>
