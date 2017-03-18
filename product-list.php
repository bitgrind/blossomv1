<?php
  include_once "php/db-connect.php";

  $produstListSql = "SELECT * FROM `product-list`;";
  $resultArray = array();
  $i = 0;
  $res = $conn->query($produstListSql);
  while($row = $res->fetch_assoc()) {
    $resultArray[$i] = $row;
    $i++;
  }
  print_r($resultArray);
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/menu.css">
     <link rel="stylesheet" href="css/home.css">
     <title>Product list</title>
   </head>
   <body>
     <h1>Product List Changes</h1>
     <main class="content">
       <div class="menu-list">

         <?php
         echo "<h1>".$val['product-category']."</h1>";
          foreach($resultArray as $key => $val){
             echo "<div class='menu-item col-3'>";
             echo "<h2>".$val['product-name']."</h2>";
             echo "<h2 class='product-cost'>".$val['product-cost']."</h2>";
             echo "<p class='product-desc'>".$val['product-desc']."</p>";
             echo "</div>";
           }
          ?>
       </div>
     </main>
   </body>
  </html>