<?php

  require_once('connection.php');

  if(!empty($_POST['email']) && !empty($_POST['password']))
    {

      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = 'SELECT * FROM admins where email = ? AND password = ?';
      $stmt = $pdo->prepare($sql);
      $stmt->execute([$email,$password]);
      // $row = $stmt->fetchAll();
      $count=$stmt->rowCount();
      if($count>0){
        $_SESSION['user']= $email;
        header('Location: canteen.php');
      }else {
        $_SESSION['message']="no user found in database";
        header('Location: login.php');
      }

    }

?>
