<?php
session_start();


$host='localhost';
$database='canteen';
$username='root';
$password='';

try{

//set DSN
$dsn='mysql:host='.$host.';dbname='.$database;

//create pdo instance
$pdo= new PDO($dsn,$username,$password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

// echo "connection successful to database";

}catch(PDOException $e){
    echo "Something went wrong";
    echo $e->getMessage();
}

?>
