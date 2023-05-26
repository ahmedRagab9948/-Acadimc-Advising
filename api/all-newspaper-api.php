<?php
    include "../connect_db.php";

    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $stmt2 = $con->prepare("SELECT * FROM newspaper");

        $stmt2->execute();

        $newspaper = $stmt2->fetchAll();

        $newspaperJson = json_encode($newspaper);

        echo $newspaperJson;
    }else {
        $message = "method not allowed";
        http_response_code(405);
        echo $message ;
    }
