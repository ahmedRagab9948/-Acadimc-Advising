<?php
    session_start();
    $Nonav = "";
    $Noload = "";
    $getTitle = "Login";
    $style="index.css";
    $js="index.js";
    include "init.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
            $password = filter_var($_POST["password"],FILTER_SANITIZE_STRING);
            $hashed_pass = sha1($password);
            // create form errors
            $formErrors = array();
            if(strlen($email) < 3){
                $formErrors[] = "
                                    <script>
                                        toastr.error('The Email Must Be Like This abc@fsc.edu.bu.eg')
                                    </script>";
            }
            
            if(strlen($password) < 3){
                $formErrors[] = "
                                    <script>
                                        toastr.error('The password Must Be Larger Than <strong>3</strong> Characters')
                                    </script>";
            }

            if(empty($formErrors)){
                check_user($email,$hashed_pass);
            }
    }
    
?>
    <div class="login">
        <div class="row h-100">
            <div class="col-lg-6 col-sm-12">
                <form id="login-formm" class="h-100 mx-5 d-flex flex-column justify-content-center" action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
                    <?php if(isset($formErrors)) {
                                foreach($formErrors as $error){
                                    echo $error;
                                }
                           } ?>
                    <h2 class="title">تسجيل الدخول</h2>
                    <div class="form-group mb-4">
                        <label for="exampleInputEmail1">البريد الإلكتروني</label>
                        <div class="input d-flex align-items-center">
                            <i class="fas fa-user"></i>
                            <input type="email" name="email" placeholder="البريد الإلكتروني" class="form-control" autocomplete="off" />
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label for="exampleInputEmail1">كلمة المرور</label>
                        <div class="input d-flex align-items-center">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="كلمة المرور" class="form-control" autocomplete="new-password" />
                        </div>
                    </div>
                    <button type="submit" class="btn">تسجيل الدخول</button>
                </form>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="image d-flex align-items-center justify-content-center">
                    <img src="./layout/images/log.svg" alt="log">
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo $js_path?>bootstrap.min.js"></script>
        <script src="<?php echo $js_path?>popper.min.js"></script>
        <script src="<?php echo $js_path?>owl.carousel.min.js"></script>
        <script src="<?php echo $js_path?>swiper-bundle.min.js"></script>
        <script src="<?php echo $js_path?>jquery.mixitup.js"></script>
        <script src="<?php echo $js_path?>loading.js"></script>
        <script src="<?php echo $js_path . $js ?>"></script>
    </body>
</html>