<?php
  include_once "php/db-connect.php";

  $produstListSql = "SELECT * FROM `product-list`;";

  /* Prepare statement */
  if($res = $conn->query($produstListSql)){
    //print_r($res);
  }
  $conn->close();
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Product list</title>
   </head>
   <body>
     <h1>Product List</h1>
     <?php
       while($row = $res->fetch_assoc()) {
         print_r($row);
       }
     ?>
   </body>
 </html>