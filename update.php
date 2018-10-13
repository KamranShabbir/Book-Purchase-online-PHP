

<?php
require_once("connection.php");

$id=$_GET["id"];
echo $id;

$sql = "UPDATE customers SET customer_get_book = 1 WHERE customers.customer_id=".$id;
$result=mysqli_query($conn,$sql);
	header('Location: admincheckout.php');
	 exit();
?>