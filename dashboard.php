<?php

require_once("connection.php");

$sql = "SELECT * FROM books";
$result2 = mysqli_query($conn,$sql);


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <title>eRozgaar Shopping Site</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style >
  .col-md-12
  {
    background-color: #01FCB4;
    margin-top: 20px;
      font-family: "Comic Sans MS", cursive, sans-serif;


  }
  body
  {
    background-image: url("bgd.jpg");
    border-image: no-repeat;    }
 /* .img {
    display: inline-block;
    width: 100%;
    height: 300px; //change as per your requirement }*/
    .price
    {
      color: #FC0101;
    }
    .title
    {
      font-family: "Arial Black", Gadget, sans-serif;
    }

     .grid1 {
      width:80%;
      padding: 5px;
      margin: auto;
      left: 25px;
      display: inline;
     }


     .grid1 img {

       
       width: 300px;
       height: 250px;
       margin-left:10px;

       margin-bottom: 10px;
     } 


  </style>
  </head>

  <body>
    <div class="container">
      <div class="row">
  <div class="col-md-12">
     <center><h1>eRozgaar Books Purchasing Site</h1></center>
      </div>
    </div>
<br>
<center><p><a href="addbook.php" class="btn btn-success btn-lg" role="button">Add Book</a> </p></center>





        <?php
        
          
          while ($row = mysqli_fetch_array($result2)) {

            
           
            $book_id= $row['book_id'];

           
           
            echo '<a href="bookDetail.php?bookid='.$row['book_id'].'"><div class="grid1">';
           
                echo '<img class="" src="img/'.$row['book_img'].'">';
             
              
            echo '</div></a>';
            


        }
        ?>




</div>



  </body>

</html>
