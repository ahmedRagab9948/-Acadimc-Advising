<?php
    ob_start();
    session_start();
    $Nonav = "";
    $Noload = "";
    if(isset($_SESSION["full_name"])){
        $getTitle = "Dashboard page";
        $style="dashboard.css";
        $js="dashboard.js";
        include "init.php";
        include "includes/template/dash-nav-sidemenu.php";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $id        = $_POST["userid"];
            $full_name = filter_var($_POST["full_name"],FILTER_SANITIZE_STRING);
            $email     = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
            $avatar    = $_FILES["newu_image"]["name"];

            $password = "";
            $cpassword = "";
            if(empty($_POST["newpassword"])) {
                $password = filter_var($_POST["oldpassword"],FILTER_SANITIZE_STRING);
                $cpassword = filter_var($_POST["oldpassword"],FILTER_SANITIZE_STRING);
                
            }else {
                $password = sha1(filter_var($_POST["newpassword"],FILTER_SANITIZE_STRING));
                $cpassword = sha1(filter_var($_POST["newpassword"],FILTER_SANITIZE_STRING));
            }

            $stmt2 = $con->prepare("SELECT * FROM users WHERE UserID = '$id' ");

            $stmt2->execute();
                                                        
            $user = $stmt2->fetch();

                if ($avatar == NULL) {
                    $avatar = $user['user_image'];
                }else {
                    $image = $_FILES["newu_image"]["name"];
                    $size = $_FILES["newu_image"]["size"];
                    $tmp_name = $_FILES["newu_image"]["tmp_name"];
                    $type = $_FILES["newu_image"]["type"];
                    global $avatar;
                    $avatar = $image ;
                    $destination = "./data/uploads/users/" . $avatar ;
                    move_uploaded_file($tmp_name,$destination);
                }
            // upate the information of selected user
            $stmt = $con->prepare("UPDATE users SET full_name = ?, email = ?, password = ?, cpassword = ?, user_image = ? WHERE UserID = ?");
            $stmt->execute(array($full_name,$email,$password,$cpassword,$avatar, $id ));

            header("location: all-users.php");


        }
        $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0 ;

        $stmt = $con->prepare("SELECT * FROM users WHERE UserID = ? ");
        $stmt->execute(array($userid));
        $row = $stmt->fetch();
        $count = $stmt->rowCount();

        if($count > 0) {?>

            <!-- start dashboard-edit-user  -->
            <div id="addUser" class="signup">
                        <div class="container-fluid">
                            <div class="allContent">
                                <div class="container">
                                    <div class="header text-center">
                                        <img class="mb-3" src="<?php echo $img_path ?>dashboard/add-user.svg" alt="add-user">
                                        <h3 class="my-3">اهلا بك في لوحة التحكم الخاصة بالنظام</h3>
                                        <p>من خلال هذه الصفحه يمكنك تعديل بيانات المستخدم </p>
                                    </div>
                                    <form class="form" action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="form-group col-md-6 col-xs-12">
                                                    <input type="hidden" name="userid" value="<?php echo $userid ?>">
                                                    <label for="exampleInputEmail1">اسم المستخدم</label>
                                                    <div class="input d-flex align-items-center">
                                                        <i class="fas fa-user"></i>
                                                        <input type="text" name="full_name" value="<?php echo $row['full_name'] ?>" placeholder="اسم المستخدم" class="form-control" autocomplete="off" />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 col-xs-12">
                                                    <label for="exampleInputEmail1">البريد الالكتروني</label>
                                                    <div class="input d-flex align-items-center">
                                                        <i class="fas fa-envelope"></i>
                                                        <input type="email" name="email" value="<?php echo $row['email'] ?>" placeholder="البريد الالكتروني" class="form-control" autocomplete="off" />
                                                        <input type="hidden" name="oldcpassword" value="<?php echo $row['cpassword'] ?>"/>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="form-group col-md-6 col-xs-12">
                                                    <label for="exampleInputEmail1">كلمة المرور</label>
                                                    <div class="input d-flex align-items-center">
                                                        <i class="fas fa-lock"></i>
                                                        <input type="hidden" name="oldpassword" value="<?php echo $row['password'] ?>"  />
                                                        <input type="password" name="newpassword" placeholder="كلمة المرور" class="form-control" autocomplete="new-password" />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 col-xs-12">
                                                    <label>صوره المستخدم</label><br />
                                                    <input value="<?php echo $row['user_image'] ?>" type="file" class="img form-control" name="newu_image"/>
                                                </div>
                                        </div>
                                        <div class="button text-center my-4">
                                            <button type="submit" class="btn btn-primary">تعديل البيانات</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
            </div>
            <!-- end dashboard-edit-users  -->
        <?php
        }else {
            header("location: dashboard.php");
        }
        ?>

    <script src="<?php echo $js_path?>bootstrap.min.js"></script>
        <script src="<?php echo $js_path?>popper.min.js"></script>
        <script src="<?php echo $js_path?>owl.carousel.min.js"></script>
        <script src="<?php echo $js_path?>swiper-bundle.min.js"></script>
        <script src="<?php echo $js_path?>jquery.mixitup.js"></script>
        <script src="<?php echo $js_path?>loading.js"></script>
        <script src="<?php echo $js_path . $js ?>"></script>
    </body>
</html>
<?php
    } else {
        header("location: index.php");
    }

    ob_end_flush();