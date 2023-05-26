<?php 
    $dsn = "mysql:host=localhost;dbname=academic guidance";
    $user = "root";
    $pass = "";


    try{
        $con = new PDO($dsn, $user, $pass);

    } catch(PDOException $e){
        echo "error" . $e->getMessage();
    }
?>