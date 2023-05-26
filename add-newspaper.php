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
        
        if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["title"]) && !empty($_POST["description"])){
            $title = filter_var($_POST["title"],FILTER_SANITIZE_STRING);
            $description = filter_var($_POST["description"],FILTER_SANITIZE_STRING);

            $sub_desc1 = filter_var($_POST["sub_desc1"],FILTER_SANITIZE_STRING);
            $sub_desc2 = filter_var($_POST["sub_desc2"],FILTER_SANITIZE_STRING);
            $sub_desc3 = filter_var($_POST["sub_desc3"],FILTER_SANITIZE_STRING);
            $sub_desc4 = filter_var($_POST["sub_desc4"],FILTER_SANITIZE_STRING);

            $date = $_POST["date"];

            $image_newspaper = $_FILES["u_image"]["name"];
            $size_newspaper = $_FILES["u_image"]["size"];
            $tmp_name_newspaper = $_FILES["u_image"]["tmp_name"];
            $type_newspaper = $_FILES["u_image"]["type"];
            global $img_newspaper;
            $img_newspaper = rand(0,1000000) . "_" . $image_newspaper ;
            $destination_newspaper = "./data/uploads/newspaper/" . $img_newspaper ;
            move_uploaded_file($tmp_name_newspaper,$destination_newspaper);

            add_newspaper($title,$description,$sub_desc1,$sub_desc2,$sub_desc3,$sub_desc4,$date,$img_newspaper);

            $_SESSION['title']=$title;
            $_SESSION['description']=$description;
            $_SESSION['sub_desc1']=$sub_desc1;
            $_SESSION['sub_desc2']=$sub_desc2;
            $_SESSION['sub_desc3']=$sub_desc3;
            $_SESSION['sub_desc4']=$sub_desc4;
            $_SESSION['date']=$date;
            $_SESSION['image']=$img_newspaper;
            
        }
?>


            <!-- start dashboard-add-users  -->
                <div id="addUser" class="signup">
                    <div class="container-fluid">
                        <div class="allContent">
                            <div class="container">
                                <div class="header text-center">
                                    <img class="mb-3" src="<?php echo $img_path ?>dashboard/add-news.jpg" alt="add-news">
                                    <h3 class="my-3">اهلا بك في لوحة التحكم الخاصة بالنظام</h3>
                                    <p>من خلال هذه الصفحه يمكنك اضافة خبر جديد للنظام</p>
                                </div>
                                <form class="form" action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label for="exampleInputEmail1">اسم الخبر</label>
                                                <div class="input d-flex align-items-center">
                                                    <input type="text" name="title" placeholder="اسم الخبر" class="form-control" autocomplete="off" />
                                                </div>
                                            </div>
                                
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label>صوره الخبر</label><br />
                                                <input class="img form-control" type="file" name="u_image"/>
                                            </div>

                                            <div class="form-group col-md-6 col-xs-12">
                                                <label>تاريخ الخبر</label><br />
                                                <input class="form-control" type="date" name="date"/>
                                            </div>

                                            <div class="form-group col-md-6 col-xs-12">
                                                <label for="exampleInputEmail1">وصف الخبر</label>
                                                <div class="input d-flex align-items-center">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="description" placeholder="وصف الخبر" autocomplete="off" /></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label for="exampleInputEmail1">عنوان فرعى</label>
                                                <div class="input d-flex align-items-center">
                                                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="1" name="sub_desc1" placeholder="عنوان فرعى" autocomplete="off" /></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label for="exampleInputEmail1">عنوان فرعى</label>
                                                <div class="input d-flex align-items-center">
                                                    <textarea class="form-control" id="exampleFormControlTextarea3" rows="1" name="sub_desc2" placeholder="عنوان فرعى" autocomplete="off" /></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label for="exampleInputEmail1">عنوان فرعى</label>
                                                <div class="input d-flex align-items-center">
                                                    <textarea class="form-control" id="exampleFormControlTextarea4" rows="1" name="sub_desc3" placeholder="عنوان فرعى" autocomplete="off" /></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6 col-xs-12">
                                                <label for="exampleInputEmail1">عنوان فرعى</label>
                                                <div class="input d-flex align-items-center">
                                                    <textarea class="form-control" id="exampleFormControlTextarea5" rows="1" name="sub_desc4" placeholder="عنوان فرعى" autocomplete="off" /></textarea>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="button text-center my-4">
                                        <button type="submit" class="btn btn-primary">اضافة خبر</button>
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