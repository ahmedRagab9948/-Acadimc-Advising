<?php

    include "../connect_db.php";

    // $email = filterRequest("email");
    // $password = filterRequest("password");

    $email       = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);

    $password    = filter_var($_POST["password"],FILTER_SANITIZE_STRING);

    $hashed_pass = sha1($password);

    global $con;

    $stmt2 = $con->prepare("SELECT * FROM users WHERE email= ? AND `password` = ?");

    $stmt2->execute(array($email ,$hashed_pass ));

    $user = $stmt2->fetch(PDO::FETCH_ASSOC);

    $count = $stmt2->rowCount();

    if($count > 0) {
        echo json_encode(array("status" => "success"));
    }else {
        echo json_encode(array("status" => "fail"));
    }