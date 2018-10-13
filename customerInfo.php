<?php
require_once("connection.php");

	$nameErr="";
	$emailErr="";
	$numberErr="";
	$cityErr="";
	



if (isset($_POST["submit"])) {


	
	$name=$_POST["name"];
	$email=$_POST["email"];
	$mnumber=$_POST["mnumber"];
	$city=$_POST["city"];
	$country=$_POST["country"];

 

if (empty($name)) {
	$nameErr="Name is required";
}
if (empty($email)) {
	$emailErr="Email is required";
}
if (empty($mnumber)) {
	$numberErr="Mobile Number is required";
}
if (empty($city)) {
	$cityErr="City is required";
}


if (!empty($name) && !empty($email) && !empty($mnumber) && !empty($city)) {
 	
$sql="INSERT INTO customers (customer_name,customer_email,customer_number,customer_city,customer_country) VALUES('$name','$email',$mnumber,'$city','$country')";
 	$result=mysqli_query($conn,$sql);
 		header('Location: dashboard.php');
	 exit();
 	
 }
 

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Check Out</title>

	<!-- Bootstrap CDN-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	
	<style>
	.col-md-12
  {
    background-color: #01FCB4;
   font-family: "Comic Sans MS", cursive, sans-serif;

  }
		.col-md-6
		{
			background-color: #FFFFFF;
			margin-top: 50px;

		
			


		}
		.error
		{
			color: #FF0000;
		}
		body
		{
			background-image: url("bgimg.png");
			background-repeat: no-repeat;
			height: 100%;
			background-size: cover;
		}
		.col-sm-4
		{
			font-family: "Arial Black", Gadget, sans-serif;
		}
		h2
		{
			font-family: "Arial Black", Gadget, sans-serif;
		}
		}
	
	</style>
</head>
<body>

	<div class="container">
		<div class="col-md-3">
					
		</div>

		<div class="col-md-6">
			   <div class="row">
  <div class="col-md-12">
     <center><h1>eRozgaar Books Purchasing Site</h1></center>
      </div>
    </div>
			<center><h2>ADD GERNAL INFORMATION</h2></center>
			<hr>
			<form class="form-horizontal" method="post" action="customerInfo.php"  >
				
				<div class="form-group">
				    <label  class="col-sm-4 control-label">Full Name</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" name="name"  placeholder="Enter Full Name" value="<?php if (!empty($name)) echo $name;?>">
				       <span class="error"> <?php echo $nameErr;?></span>
				    </div>
			  	</div>

			  	<div class="form-group">
				    <label  class="col-sm-4 control-label">Email</label>
				    <div class="col-sm-8">
				      <input type="email" class="form-control" name="email"  placeholder="Enter Email" value="<?php if (!empty($email)) echo $email;?>">
				       <span class="error"> <?php echo $emailErr;?></span>
				    </div>
			  	</div>

			  	<div class="form-group">
				    <label  class="col-sm-4 control-label">Mobile Number</label>
				    <div class="col-sm-8">
				      <input type="number" class="form-control" name="mnumber"  placeholder="Enter Mobile Number" value="<?php if (!empty($mnumber)) echo $mnumber;?>">
				       <span class="error"> <?php echo $numberErr;?></span>
				    </div>
			  	</div>

			  	<div class="form-group">
				    <label  class="col-sm-4 control-label">City</label>
				    <div class="col-sm-8">
				      <input type="city" class="form-control" name="city"  placeholder="Enter City" value="<?php if (!empty($city)) echo $city;?>">
				       <span class="error"> <?php echo $cityErr;?></span>
				    </div>
			  	</div>


			  	<div class="form-group">
						  <label class="col-sm-4 control-label" for="sel1">Select Country</label>
						   <div class="col-sm-8">
						  <select class="form-control" name="country" id="sel1">
						    <option value="Pakistan">Pakistan</option>
						    <option value="India">India</option>
						    <option value="UAE">UAE</option>
						    <option value="USA">USA</option>
						  </select>
						</div>
					</div>


			  	

			  	<div class="form-group">
				    <div class="col-sm-offset-1 col-sm-10">
				      <center><button type="submit" name="submit" class="btn btn-primary">Submit</button></center>
				    </div>
			  	</div>
			</form>
			
		</div>
		<div class="col-md-3">
			
		</div>
	</div>
</body>
</html>