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
             echo "<h1>".$resultArray['product-category']."</h1>";
             echo "<div class='menu-item col-3'>";
             echo "<h2>".$resultArray['product-name']."</h2>";
             echo "<h2 class='product-cost'>".$resultArray['product-cost']."</h2>";
             echo "<p class='product-desc'>".$resultArray['product-desc']."</p>";
             echo "</div>";
           } ?>
       </div>
     </main>
   </body>
  </html>