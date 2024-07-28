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

mysql_select_db($dbname) or die(mysql_error());
$sql="SELECT * FROM customer";
$retval=mysql_query($sql,$con);

echo "<table border='1'><tr><th>FIRSTNAME</th><th>MIDDLENAME</th><th>LASTNAME</th><th>DATEOFBIRTH</th><th>STREETNO</th><th>STREETNAME</th><th>STREETNAME1</th><th>CITY</th><th>STATE</th><th>PINCODE</th><th>MOBILENUMBER</th><th>LANDLINENUMBER</th><th>USERNAME</th><th>PASSWORD</th><th>EMAILID</th><th>NATIONALITY</th></tr>";
while($row=mysql_fetch_array($retval))
{
  echo "<tr><td>".$row['FIRST_NAME']."</td><td>".$row['MIDDLE_NAME']."</td><td>".$row['LAST_NAME']."</td><td>".$row['DAY'].'-'.$row['MONTH'].'-'.$row['YEAR']."</td><td>".$row['STREET_NO']."</td><td>".$row['STREETNAME']."</td><td>".$row['STREETNAME1']."</td><td>".$row['CITY']."</td><td>".$row['State']."</td><td>".$row['PINCODE']."</td><td>".$row['MOBILE_NUMBER']."</td><td>".$row['LANDLINE_NUMBER']."</td><td>".$row['USERNAME']."</td><td>".$row['PASSWORD']."</td><td>".$row['EMAIL_ID']."</td><td>".$row['NATIONALITY']."</td></tr>";
}
echo "</table>";

mysql_close($con);

?>
