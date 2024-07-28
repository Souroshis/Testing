<!DOCTYPE html>
<html lang="en">
<head>
<title>Customer Select</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$host="localhost";
$username="root";
$pwd="";
$dbname="shopping";
$con=mysql_connect($host,$username,$pwd);
if(!$con)
{
	echo "Connection Failed".mysql_error()."<br>";
}
else
echo "Connection Successful<br>";

$username=$_POST["Username"];
$password=$_POST["Password"];

mysql_select_db($dbname) or die(mysql_error())z;
$sql="SELECT * FROM customer WHERE USERNAME='$username' and PASSWORD='$password'";
$retval=mysql_query($sql,$con);
$row=mysql_fetch_array($retval);
if ( ! $row['FIRST_NAME'])
echo "LOGIN FAILED";
else
echo "LOGIN SUCCESSFUL"; 
mysql_close($con);
?>

</body>
</html>
