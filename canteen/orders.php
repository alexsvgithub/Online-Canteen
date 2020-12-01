

<?php

require_once('connection.php');



  $sql = "SELECT
  	items.name AS food,
      users.name AS person,
      users.email AS UID,
      orders.id AS ID

  from orders
  	INNER JOIN users
      	ON users.id=orders.userId
      INNER JOIN items
      	ON items.id=orders.id
        where
         orders.status='Waiting'";
  $stmt = $pdo->query($sql); //this method is used when there is no parametters..// and this execues the query
  $authors = $stmt->fetchAll();



?>
