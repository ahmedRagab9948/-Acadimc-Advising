<?php


    // ############################ Function that print the page title ##############################################
    function getTitle(){
        global $getTitle;
        if(isset($getTitle)){
            echo $getTitle;
        }else {
            echo 'Default';
        }
    }
    // ############################ Function that print the page title ##############################################

    // ############################ Add User ##############################################
    function add_user($full_name,$email,$password,$cpassword,$avatar){
        global $con;
        $stmt = $con->prepare("INSERT INTO users(full_name,email,password,cpassword,user_image)value(:u_full_name,:u_email,:u_password,:u_cpassword,:u_image)");
        $stmt->execute(array(
            ":u_full_name" => $full_name,
            ":u_email" => $email,
            ":u_password" => $password,
            ":u_cpassword" => $cpassword,
            ":u_image" => $avatar,
        ));
        echo "<script>toastr.success('تم اضافه المستخدم بنجاح.')</script>";
}
    // ############################ Add User ##############################################

    // ############################ Add newspaper ##############################################
    function add_newspaper($title,$description,$sub_desc1,$sub_desc2,$sub_desc3,$sub_desc4,$date,$img_newspaper){
        global $con;
        $stmt = $con->prepare("INSERT INTO newspaper(title,description,sub_desc1,sub_desc2,sub_desc3,sub_desc4,date,image)
                    value(:n_title,:n_description,:n_sub_desc1,:n_sub_desc2,:n_sub_desc3,:n_sub_desc4,:n_date,:n_image)");
        $stmt->execute(array(
            ":n_title" => $title,
            ":n_description" => $description,
            ":n_sub_desc1" => $sub_desc1,
            ":n_sub_desc2" => $sub_desc2,
            ":n_sub_desc3" => $sub_desc3,
            ":n_sub_desc4" => $sub_desc4,
            ":n_date" => $date,
            ":n_image" => $img_newspaper,
        ));
        echo "<script>toastr.success('تم اضافه الخبر بنجاح.')</script>";

        
}
    // ############################ Add newspaper ##############################################

    // ############################ check User ##############################################
    function check_user($email,$password){
        global $con;
        $stmt = $con->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute(array($email));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $count = $stmt->rowCount();
        if($count){
            if($password == $row["password"] && $email == $row["email"]){ 
                $_SESSION['UserID']=$row['UserID'];
                $_SESSION['full_name']=$row['full_name'];
                $_SESSION['email']=$row['email'];
                $_SESSION['user_image']=$row['user_image'];
                $_SESSION['GroupID']=$row['GroupID'];
                echo "
                <script>
                    toastr.success('مرحبًا بعودتك " . $row['full_name'] . " ')
                </script>";
                if($row['GroupID'] == 0) {
                    header("Refresh:2;url=home.php");
                }else {
                    header("Refresh:2;url=dashboard.php");
                }
            }
            else{
                echo "
                    <script>
                        toastr.error('عذرا !! البريد الإلكتروني أو كلمة المرور غير صحيحه')
                    </script>";
            }
        }else{
            echo "
                <script>
                    toastr.error('!!لا يوجد مستخدم بهذا الاسم')
                </script>";
        }
    }
    // ############################ check User ##############################################


    // ############################ Function to count number of item Rows  ##################
    function countItems($item , $table) {
        global $con;

        $stmt2 = $con->prepare("SELECT COUNT($item) FROM $table");

        $stmt2->execute();

        return $stmt2->fetchColumn();
    }
    // ############################ Function to count number of item Rows  ##################
    