<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
p{
	font-family:"Courier New", Courier, monospace;
	font-size:24px;
	color:#333;
	font-weight:900;
	background-color:rgba(0,0,0,0.1);
	text-align:center;
	line-height:50px;
	word-spacing:10px;
	margin-top:100px;

}
</style>
</head>

<body>

<?php


require('connect.php');

	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Number = $_POST['number'];
	$Location = $_POST['location'];
	$Date = $_POST['date'];
    $Time = $_POST['time'];
   	$Guesst = $_POST['guesst'];

$sql = "INSERT INTO data (name,email,number,location,date,time,guesst) VALUES ('$Name' , '$Email' , '$Number' , '$Location' , '$Date' , '$Time' , '$Guesst')";

if(!mysqli_query($con,$sql))

{
	echo "<p>Please check the form again</p>";
}
  else
  { 
  
	  echo "<p>Thank you for your reservation. You will be contacted shortly by our representative, to confirm your booking. In case you do not receive a call, please call us at 111-227-111 for a confirmation. This service is only for Karachi </p>";
  }
  


?>
</body>
</html>