<!DOCTYPE html>
<html lang= "en">
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$host="localhost";
$username="root";
$pwd="";
$dbname="shopping";
$con=mysql_connect($host,$username,$pwd);
$fname=$_POST["firstname"];
$mname=$_POST["middlename"];
$lname=$_POST["lastname"];
$year=$_POST["year"];
$month=$_POST["month"];
$day=$_POST["day"];
$email=$_POST["emailid"];
$streetno=$_POST["streetno"];
$streetname=$_POST["streetname"];
$streetname1=$_POST["streetname1"];
$pin=$_POST["pincode"];
$city=$_POST["city"];
$state=$_POST["state"];
$design=$_POST["designation"];
$country=$_POST["country"];
$mobile=$_POST["phoneno"];
$landline=$_POST["landlineno"];
$uname=$_POST["username"];
$password=$_POST["password"];
mysql_select_db($dbname) or die(mysql_error());
$sql="INSERT INTO admin(FIRST_NAME,MIDDLE_NAME,LAST_NAME,DAY,MONTH,YEAR,EMAIL_ID,STREET_NO,STREETNAME,STREETNAME1,CITY,STATE,PINCODE,NATIONALITY,MOBILE_NUMBER,LANDLINE_NUMBER,USERNAME,PASSWORD,DESIGNATION)VALUES('$fname','$mname','$lname','$day','$month','$year','$email','$streetno','$streetname','$streetname1','$city','$state',$pin,'$country','$mobile','$landline','$uname','$password','$design')";
$retval=mysql_query($sql,$con);
if(!$retval)
{
	die('Could not enter data'.mysql_error());
}
echo "REGISTRATION SUCCESSFUL";
mysql_close($con);
?>
</body>
</html>