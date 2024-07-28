<?php 
session_start();

if($_SESSION["user"]=="")
{	
?>
	<script type="text/javascript">
		window.location="login.php";
    </script>

<?php 
}
	include "connection.php"; ?>
	<!DOCTYPE html ">
<html lang="en">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script type="text/javascript">
	
	function active()
	{
		document.getElementById('quan').disabled=false;
		//x.disabled=true;
	}
</script>
<body>
<div>
<div align="right" style="float:right; padding-left:10px;"><a href="logout.php"><img src="img/logout.gif" height="50px"  width="150px;"/></a></div>

<div style=" float:right; height:50px; width:200px;; background-color:#0C9; text-align:center;"><div style="padding-top:10px;"><a style="color:#FFFFFF; text-decoration:none; font-size:25px;" href="view_product.php">View Products</a></div></div>
</div>
<div style="float:right; padding-right:10px;"><?php echo "<h1>Welcome ".$_SESSION["user"]."</h1>";?></div>
<table border="1">
<?php 	
	
	$res=mysql_query("select * from cart where username='$_SESSION[user]'") or die("sixth");
	while($row=mysql_fetch_array($res))
	{
?>

<table border="1">
	<tr>
    	<td>Image:</td>
		<td><img src="<?php echo $row['p_img'];?>" height="150" width="150"></td>
	</tr>
	<tr>
    	<td>Name:</td>
		<td><?php echo $row['p_name'];?></td> 
	</tr>
	<tr>
    	<td>Quantity:</td>
		<td><form method="post" name="form1"><input type="text" id="quan" name="quan" value="<?php echo $row['p_quan'];?>"/>
        <input type="submit" name="submit1" value="Edit"/>
<?php 
	if(isset($_POST['submit1']))
	{
		?>
		<a href="change_quan.php?id=<?php echo $row['p_id']; ?>&quan=<?php echo $_POST['quan']; ?>">Save</a>
		<?php
	}
?>
        </form></td>
        
	</tr>
	<tr>
    	<td>Price:</td>
		<td><?php echo $row['p_price'];?></td>
	</tr>
    <tr>
    	<td colspan="2"><a href="delete_cart_product.php?id=<?php echo $row['id']; ?>">Delete</a></td>
	</tr>
	<?php }?>
</table>
</body>
</html>