<?php
 //  Development connectio
  //  $host = '127.0.0.1';
  //  $db = 'attendance_db';
  //  $user = 'root';
  //  $pass = '';
  //  $charset = 'utf8mb4';

  // Remote connection
     $host = 'remotemysql.com';
     $db = 'qdqCoZft4D';
     $user = 'qdqCoZft4D';
     $pass = 'GSHa5MEqSR';
     $charset = 'utf8mb4';

    $dsn = "mysql:host=$host; dbname=$db; charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOexception $e){
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);
?>