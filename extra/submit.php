<?php
ob_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?


if(isset($_POST['submit']))
{
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$databaseName ="reservation";
 
     $name = $_POST['name'];
	 $email = $_POST['email'];
	 $number = $_POST['number'];
	 $date = $_POST['date'];
	 $guesst = $_POST['guesst'];
	 
$connect = mysqli_connect("$hostname","$username","$password","$databaseName");

$query = "INSERT INTO data( 'name', 'email', 'number', 'date', 'guesst') VALUES ('$name,'$email',$number, '$date',$guesst)";

$result = mysqli_query($connect,$query);

if($result == true)
       {
		   echo 'DATA INSERTED';
       }
	   else
	   {
		   echo 'DATA NOT INSERTED ';
	   }
	   
	  
}
?>




</body>
</html>