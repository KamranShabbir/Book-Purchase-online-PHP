<?php
require_once("connection.php");

$sql = "SELECT * FROM customers";

$result=mysqli_query($conn,$sql);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Dashbord</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<style>
		body,th,td
		{
			text-align: center;

		}
		th
		{
			background-color: #111111;
			color: #ffffff;

		}
		body
		{
			background-image: url("logBg.jpg");
			background-repeat: no-repeat;
			height: 100%;
			background-size: cover;

}

		}
		h1
		{
			background-color: #F3F1ED;
			margin-top: 130px;
			 	


		}
		.col-md-10
		{
			background-color:#ECE9E2;
			margin-top: 50px;
			
			overflow: auto;
		}
		td
		{
			border :1px solid #111111 !important;
		}
		th
		{
			border :1px solid #ffffff !important;
		}

	</style>
</head>
<body>
		<div class="container">
		
			<div class="col-md-1">
				
			</div>
			<div class="col-md-10">
				<h1>Welcome ADMIN</h1>
				<hr>

			
		
			<form method="POST" action="dashbord.php">
			<table class="table table-hover">

				<tr>
					<th>Customer ID</th>
					<th>Customer Name</th>
					<th>Customer Email</th>
					
					<th>Customer Number</th>
					<th>Customer City</th>
					<th>Customer Country</th>
					<th>Allow to Send</th>
					



				</tr>

<?php
				
					while ($row11 = mysqli_fetch_assoc($result)) {

						
						echo "<tr><td>{$row11['customer_id']}</td><td>{$row11['customer_name']}</td><td>{$row11['customer_email']}</td><td>{$row11['customer_number']}</td><td>{$row11['customer_city']}</td>
						<td>{$row11['customer_country']}</td><td><center><a href='update.php?id=".$row11['customer_id']."' class='btn btn-success' data-toggle='modal' data-target='#myModal' name='update_id' type='submit'>Send</a></td></center></tr>";
					
				}

				
				?>

	


			</table>
		</form>




			</div>
			<div class="col-md-1">
				
			</div>
			
		</div>

</body>
</html>