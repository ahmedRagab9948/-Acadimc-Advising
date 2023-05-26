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
            $full_name = filter_var($_POST["full_name"],FILTER_SANITIZE_STRING);
            $email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
            $password = filter_var($_POST["password"],FILTER_SANITIZE_STRING);
            $cpassword = filter_var($_POST["cpassword"],FILTER_SANITIZE_STRING);
            $hashed_pass = sha1($password);
            $hashed_cpass = sha1($cpassword);

            $image = $_FILES["u_image"]["name"];
            $size = $_FILES["u_image"]["size"];
            $tmp_name = $_FILES["u_image"]["tmp_name"];
            $type = $_FILES["u_image"]["type"];
            global $avatar;
            $avatar = rand(0,1000000) . "_" . $image ;
            $destination = "./data/uploads/users/" . $avatar ;
            move_uploaded_file($tmp_name,$destination);

             // create form errors
             $formErrors = array();

             if(strlen($full_name) == 0){
                $formErrors[] = "
                                    <script>
                                        toastr.error('.لا يجب ان يكون اسم المستخدم فارغ')
                                    </script>";
            }

             if(strlen($full_name) > 0 && strlen($full_name) < 3){
                $formErrors[] = "
                                    <script>
                                        toastr.error('.يجب أن يكون اسم المستخدم أكبر من 3 أحرف')
                                    </script>";
            }

            if(strlen($email) == 0){
                $formErrors[] = "
                                    <script>
                                        toastr.error('.لا يجب ان يكون البريد الإلكتروني فارغ')
                                    </script>";
            }

             if(strlen($email) > 0 && strlen($email) < 3){
                 $formErrors[] = "
                                     <script>
                                         toastr.error('يجب أن يكون البريد الإلكتروني مثل هذا abc@fsc.edu.bu.eg')
                                     </script>";
             }

             if(strlen($password) == 0){
                $formErrors[] = "
                                    <script>
                                        toastr.error('.لا يجب ان يكون تكون كلمة المرور فارغه')
                                    </script>";
            }
             
             if(strlen($password) > 0 && strlen($password) < 8){
                 $formErrors[] = "
                                     <script>
                                         toastr.error('.يجب أن تكون كلمة المرور أكبر من 8 أرقام')
                                     </script>";
             }

             if(strlen($image) == 0){
                $formErrors[] = "
                                    <script>
                                        toastr.error('.الرجاء تحديد الصورة')
                                    </script>";
            }
 
             if(empty($formErrors)){
                add_user($full_name,$email,$hashed_pass,$hashed_cpass,$avatar);
            }
        }
?>

            <!-- start dashboard-add-users  -->
                <div id="addUser" class="signup">
                    <div class="container-fluid">
                        <div class="allContent">
                            <div class="container">
                                <div class="header text-center">
                                    <img class="mb-3" src="<?php echo $img_path ?>dashboard/add-user.svg" alt="add-user">
                                    <h3 class="my-3">اهلا بك في لوحة التحكم الخاصة بالنظام</h3>
                                    <p>من خلال هذه الصفحه يمكنك اضافة مستخدم جديد للنظام</p>
                                </div>
                                <form class="form" action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">
                                            <?php if(isset($formErrors)) {
                                                foreach($formErrors as $error){
                                                    echo $error;
                                                }
                                            } ?>
                                        <div class="row">
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label for="exampleInputEmail1">اسم المستخدم</label>
                                                <div class="input d-flex align-items-center">
                                                    <i class="fas fa-user"></i>
                                                    <input type="text" name="full_name" placeholder="اسم المستخدم" class="form-control" autocomplete="off" />
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label for="exampleInputEmail1">البريد الالكتروني</label>
                                                <div class="input d-flex align-items-center">
                                                    <i class="fas fa-envelope"></i>
                                                    <input type="email" name="email" placeholder="البريد الالكتروني" class="form-control" autocomplete="off" />
                                                </div>
                                                
                                            </div>
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label for="exampleInputEmail1">كلمة المرور</label>
                                                <div class="input d-flex align-items-center">
                                                    <i class="fas fa-lock"></i>
                                                    <input type="password" name="password" placeholder="كلمة المرور" class="form-control" autocomplete="new-password" />
                                                </div>
                                                
                                            </div>
                                            <div class="form-group col-md-6 col-xs-12 ">
                                                <label for="exampleInputEmail1">تأكيد كلمة المرور</label>
                                                <div class="input d-flex align-items-center">
                                                    <i class="fas fa-lock"></i>
                                                    <input type="password" name="cpassword" placeholder="تأكيد كلمة المرور" class="form-control" autocomplete="new-password" />
                                                </div>
                                                
                                            </div>
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label>صوره المستخدم</label><br />
                                                <input class="img form-control" type="file" name="u_image"/>
                                            </div>
                                    </div>
                                    <div class="button text-center my-4">
                                        <button type="submit" class="btn btn-primary">اضافة مستخدم</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- end dashboard-add-users  -->
                    
                    
                    
    
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