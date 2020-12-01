

<?php

require_once('connection.php');

// $email = $_POST['email'];
// $amt= $_POST['amount'];
$email = 'alex@gmail.com';
$amt= 100;
try{

  $sql = 'SELECT id from users where email= ?';
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$email]);
  $idd=$stmt->fetch();
  $id=$idd['id'];
  if(empty($id)){
    $_SESSION['alex']="No user found in database";
    header('Location: canteen.php');
    echo $_SESSION['alex'];
  }


          $sql = "INSERT INTO transactions (userId,amount) VALUES(?,?)";
          $stmt = $pdo->prepare($sql);
          $stmt->execute([$id,$amt]);
          $_SESSION['alex']="Transaction Successful!";
          header('Location: canteen.php');
          // echo $_SESSION['alex'];




}catch(PDOException $e){

  echo "Undefined Error occured!!!";
  echo "Please contact Alex Vettithanam (2018PE0253)";

}



?>
