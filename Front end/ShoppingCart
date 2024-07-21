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
	include "connection.php";
	
	$res=mysql_query("select * from cart where username='$_SESSION[user]' && p_id='$_GET[id]'") or die('FIRST');
	$no = mysql_num_rows($res);
	if($no > 0)
	{
			mysql_query("update cart set p_quan=p_quan+1 where p_id='$_GET[id]' && username='$_SESSION[user]'") or die("Fifth");
	}
	else
	{
			$res1=mysql_query("select * from product where p_id='$_GET[id]'") or die('Second');
			while($row=mysql_fetch_array($res1))
			{
				$uname = $_SESSION['user'];
				$pid = $row['p_id'];
				$pname = $row['p_name'];
				$pimg = $row['p_img'];
				$pprice = $row['p_price'];
				
				mysql_query("insert into cart
				values('','$uname','$pid','$pname','$pimg',1,'$pprice')") or die("Third");
			}
				
	}
	
?>
<script type="text/javascript">
window.location="view_product.php";
</script>
