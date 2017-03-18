<?php
  include "db-connect.php";

  $produstListSql = "SELECT * FROM `product-list`;";

  /* Prepare statement */
  if($_GET["contentId"]) {
    if($res = $conn->query($$produstListSql)){
      //print_r($res);
      while($row = $res->fetch_assoc()) {
        print_r($row);
      }
    }
  }
  $conn->close();
  print_r($_GET);
 ?>
<h1>product-list</h1>