<?php
require_once("connection.php");

	$titleErr="";
	$desErr="";
	$priceErr="";
	$authorErr="";
	$fileErr="";



if (isset($_POST["submit"])) {


	$target="img/".basename($_FILES["bookimg"]["name"]);
	$title=$_POST["title"];
	$des=$_POST["des"];
	$price=$_POST["price"];
	$author=$_POST["author"];
	$abc=$_FILES["bookimg"]["name"];

$imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));


 

if (empty($title)) {
	$titleErr="Book Title is required";
}
if (empty($des)) {
	$desErr="Book Description is required";
}
if (empty($price)) {
	$priceErr="Book Price is required";
}
if (empty($author)) {
	$authorErr="Book Author is required";
}
if (empty($abc)) {
	$fileErr="Book Image is required";
}

else if (file_exists($target)) {
    $fileErr= "Sorry, file already exists.";
    
}
else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $fileErr="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    
}
else
{
if (move_uploaded_file($_FILES["bookimg"]["tmp_name"], $target)) {
 	

 	$sql="INSERT INTO books (book_title,book_des,book_price,book_auth,book_img) VALUES('$title','$des',$price,'$author','$abc')";
 	$result=mysqli_query($conn,$sql);
 		header('Location: dashboard.php');
	 exit();
 	
 }
 else
 {
 	 $fileErr="image not uploaded";
 }

}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign UP</title>

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
			<center><h2>ADD BOOK</h2></center>
			<hr>
			<form class="form-horizontal" method="post" action="addbook.php"  enctype="multipart/form-data">
				<div class="form-group">

				    <label  class="col-sm-4 control-label">Book Title</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" name="title"  placeholder="Enter Book Title" value="<?php if (!empty($title)) echo $title;?>">
				       <span class="error"> <?php echo $titleErr;?></span>
				    </div>
			  	</div>

			  	

			  	<div class="form-group">
				    <label  class="col-sm-4 control-label">Book Description</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" name="des"  placeholder="Enter Book Description" value="<?php if (!empty($des)) echo $des;?>">
				       <span class="error"> <?php echo $desErr;?></span>
				    </div>
			  	</div>
			  	
			  	<div class="form-group">
				    <label  class="col-sm-4 control-label">Book Price</label>
				    <div class="col-sm-8">
				      <input type="number" class="form-control" name="price" min="1" placeholder="Enter Book Price" value="<?php if (!empty($price)) echo $price;?>">
				       <span class="error"> <?php echo $priceErr;?></span>
				    </div>
			  	</div>

			  	<div class="form-group">
				    <label  class="col-sm-4 control-label">Book Author</label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" name="author"  placeholder="Enter Book Author" value="<?php if (!empty($author)) echo $author;?>">
				       <span class="error"> <?php echo $authorErr;?></span>
				    </div>
			  	</div>

			  	<div class="form-group">
				    <label class="col-sm-4 control-label" for="exampleInputFile">Upload Book Image</label>
				      <div class="col-sm-8">
				    <input type="file" name="bookimg" id="exampleInputFile" value="<?php if (!empty($abc)) echo $abc;?>">
				     <span class="error"> <?php echo $fileErr;?></span>

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