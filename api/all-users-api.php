<?php
    include "../connect_db.php";

    header("Content-Type: application/json");

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['email']) && isset($_POST['password'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $hashed_pass = sha1($password);
                global $con;
                $stmt2 = $con->prepare("SELECT * FROM users WHERE email= ? AND `password` = ?");
    
                $stmt2->execute(array($email,$hashed_pass));
    
                $users = $stmt2->fetch(PDO::FETCH_ASSOC);
    
                $count = $stmt2->rowCount();
    
                if($count) {
                    if($email == $users["email"] && $hashed_pass == $users["password"]){
                        $usersJson = json_encode($users);
                        echo $usersJson;
                        $message = "تم تسجيل الدخول بنجاح";
                        http_response_code(200);
                        echo $message ;
                    }else {
                        $message = "اسم المستخدم او كلمه المرور غير صحيحه";
                        http_response_code(405);
                        echo $message ;
                    }
                }else {
                    $message = "لا يوجد مستخدم";
                    http_response_code(405);
                    echo $message ;
                }

        }
    }else {
        $message = "method not allowed";
        http_response_code(405);
        echo $message ;
    }

    