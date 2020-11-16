

<?php

require_once('connection.php');



  $sql = "SELECT * FROM orders ";
  $stmt = $pdo->query($sql); //this method is used when there is no parametters..// and this execues the query
  $authors = $stmt->fetchAll();


?>
