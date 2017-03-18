<?php
  include_once "db-connect.php";

  $produstListSql = "SELECT * FROM `product-list`;";

  print_r($conn);
  /* Prepare statement */
  // if($res = $conn->query($produstListSql)){
  //   //print_r($res);
  //   while($row = $res->fetch_assoc()) {
  //     print_r($row);
  //   }
  // }
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
   </body>
 </html>