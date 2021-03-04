
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


require('connect1.php');

	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Subject = $_POST['subject'];
	$Message = $_POST['message'];

$sql = "INSERT INTO data (name,email,subject,message) VALUES ('$Name' , '$Email' , '$Subject' , '$Message')";

if(!mysqli_query($con,$sql))

{
	echo "<p>Please check the form again</p>";
}
  else
  { 
  
	  echo "<span>Form Submitted Successfully</span>";
  }

?>
  
</body>
</html>