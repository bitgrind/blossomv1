<?php
  include_once "php/db-connect.php";

  $produstListSql = "SELECT * FROM `product-list`;";

  $res = $conn->query($produstListSql));
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="css/home.css">
     <title>Product list</title>
   </head>
   <body>
     <h1>Product List Changes</h1>
     <main>
       <div class="menu-list">

         <?php
           while($row = $res->fetch_assoc()) {
             echo "<div class='menu-item'><h1>".$row['product-catagroy']."</h1>";
             echo "<h2>".$row['product-name']."</h2>";
             echo "<h2 class='product-cost'>".$row['product-cost']."</h2>";
             echo "<p class='product-desc'>".$row['product-desc']."</p>";
             echo "</div>";
           } ?>
       </div>
     </main>
   </body>
  </html>