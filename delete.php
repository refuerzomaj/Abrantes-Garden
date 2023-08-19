<?php
	$id=$_GET['id'];
	include('conn.php');
	mysqli_query($conn,"delete from `orders` where id='$id'");
	
	echo '<script>alert("Succesfully Deleted")</script>';	
	echo '<BUTTON onclick="window.close();onclick=window.location.reload();">Go to Order History</BUTTON>';
?>
