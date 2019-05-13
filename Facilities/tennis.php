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

$sql = "Select * from facility where id = 12344569";

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
<title>Tennis Courts</title>
<link href="DUSport.css" rel="stylesheet">
<link href="tennis.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="wb_txttennishead" style="position:absolute;left:240px;top:0px;width:331px;height:52px;z-index:11;">
	<span style="color:#4F4F4F;font-family:Verdana;font-size:43px;"><?php echo $FacilityName ?></span></div>
<div id="wb_Image1" style="position:absolute;left:240px;top:534px;width:300px;height:232px;z-index:12;">
	<img src=<?php echo $FacilityFirstPic ?> id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:583px;top:534px;width:300px;height:232px;z-index:13;">
	<img src=<?php echo $FacilitySecondPic ?> id="Image2" alt=""></div>
<div id="wb_txttennisdetails" style="position:absolute;left:245px;top:62px;width:691px;height:264px;z-index:14;">
	<span style="color:#4F4F4F;font-family:Verdana;font-size:13px;line-height:24px;"><?php echo $FacilityDescription ?></span></div>
<div id="wb_txttenniscontact" style="position:absolute;left:240px;top:338px;width:250px;height:216px;z-index:16;">
	<span style="color:#4F4F4F;font-family:Verdana;font-size:13px;line-height:24px;"><strong>Contact:</strong><br> <?php echo $FacilityContactEmail ?></span></div>
<div id="wb_txttenniscontactadd" style="position:absolute;left:240px;top:400px;width:250px;height:96px;z-index:17;">
	<span style="color:#4F4F4F;font-family:Verdana;font-size:13px;line-height:24px;"><strong><?php echo $FacilityContactAdd ?></strong><br>Tel: <?php echo $FacilityContactTel ?></span></div>
</div>
</body>
</html>




