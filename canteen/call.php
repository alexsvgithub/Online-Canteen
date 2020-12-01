<?php

  require_once('connection.php');



  $sql = "SELECT
  	items.name AS food,
      users.name AS person,
      users.email AS EMAIL,
      orders.id AS ID


  from orders
  	INNER JOIN users
      	ON users.id=orders.userId
      INNER JOIN items
      	ON items.id=orders.id
        where
         orders.status='Started'";
  $stmt = $pdo->query($sql); //this method is used when there is no parametters..// and this execues the query
  $queues = $stmt->fetchAll();

  // var_dump($queues);







  //
  // $sql = "SELECT
  //   	items.name AS,
  //       users.name ,
  //       users.email
  //
  //   from orders
  //   	INNER JOIN users
  //       	ON users.id=orders.userId
  //       INNER JOIN items
  //       	ON items.id=orders.userId,
  //    where
  //     orders.status='Started'";
  // $stmt = $pdo->query($sql); //this method is used when there is no parametters..// and this execues the query
  // $queues = $stmt->fetchAll();
  // $id=$queues[''];
  //
  //
  // var_dump($queues);


?>
