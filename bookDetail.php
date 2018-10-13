<?php

require_once("connection.php");

$bookid=$_GET['bookid'];
 

$sql = "SELECT * FROM books where book_id=".$bookid;

$result2 = mysqli_query($conn,$sql);


  while ($row = mysqli_fetch_array($result2)) {
    $bookimg=$row['book_img'];
    $booktitle=$row['book_title'];
    $bookprice=$row['book_price'];
    $bookdes=$row['book_des'];
    $bookauthor=$row['book_auth'];


  }

 
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <title>eRozgaar Shopping Site</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <style >
  .h1head
  {
    background-color: #01FCB4;
    margin-top: 20px;
      font-family: "Comic Sans MS", cursive, sans-serif;


  }
  body
  {
    background-color: #C2D4BB;
    border-image: no-repeat;    }
img
{
  width: 100%;
  height: 500px;
}
    .detail
    {
      background-color: #FFFFFF;
      padding :10px;
      height: 100%;
    }
.input-group{
  width: 25%;
}
.Checkout
{
  position: fixed;
   width: 47%;
   float: left;
}

  </style>
  </head>

  <body>
  	<div class="container">
       <div class="row">
          <div class="col-md-12 h1head">
            <center><h1>eRozgaar Books Purchasing Site</h1></center>
          </div>
        </div>
        <br>


        <div class="row">
          <div class="col-md-12 detail">
          <div class="col-md-5">
              <img src="img/<?php echo $bookimg ?>">
          </div>
          <div class="col-md-7">
            
              <h1><b>Title : </b> <?php echo $booktitle ?></h1>
               <h2><b>Price : </b> Rs <?php echo $bookprice ?>/-</h2>
               <h2><b>Author : </b> <?php echo $bookauthor ?></h2>
               <h2><b>Description : </b> <h2><p> <?php echo $bookdes ?></p>
                   <br>
                                <a href="dashboard.php"  class="btn btn-primary btn-lg Checkout">Coninue Shopping</a>
                          <br><br>
                          <a href="customerInfo.php"  class="btn btn-success btn-lg Checkout">Check Out</a>
                        

          </div>
        </div>
      </div>










</div>



  </body>

</html>
