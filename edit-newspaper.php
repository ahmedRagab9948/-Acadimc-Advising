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
            $id                 = $_POST["newspaperid"];
            $title              = filter_var($_POST["title"],FILTER_SANITIZE_STRING);
            $description        = filter_var($_POST["description"],FILTER_SANITIZE_STRING);
            $sub_desc1          = filter_var($_POST["sub_desc1"],FILTER_SANITIZE_STRING);            
            $sub_desc2          = filter_var($_POST["sub_desc2"],FILTER_SANITIZE_STRING);           
            $sub_desc3          = filter_var($_POST["sub_desc3"],FILTER_SANITIZE_STRING);
            $sub_desc4          = filter_var($_POST["sub_desc4"],FILTER_SANITIZE_STRING);
            $date               = $_POST["date"];
            $img_newspaper      = $_FILES["n_image"]["name"];


            $stmt2 = $con->prepare("SELECT * FROM newspaper WHERE ID = '$id' ");

            $stmt2->execute();
                                                        
            $newspaper = $stmt2->fetch();

                if ($img_newspaper == NULL) {
                    $img_newspaper = $newspaper['image'];
                }else {
                    $image = $_FILES["n_image"]["name"];
                    $size = $_FILES["n_image"]["size"];
                    $tmp_name = $_FILES["n_image"]["tmp_name"];
                    $type = $_FILES["n_image"]["type"];
                    global $img_newspaper;
                    $img_newspaper = $image ;
                    $destination = "./data/uploads/users/" . $img_newspaper ;
                    move_uploaded_file($tmp_name,$destination);
                }
            // upate the information of selected user
            $stmt = $con->prepare("UPDATE newspaper SET title = ?, description = ?, sub_desc1 = ?, sub_desc2 = ?, sub_desc3 = ?, sub_desc4 = ?, date = ?, image = ? WHERE ID = ?");
            $stmt->execute(array($title,$description,$sub_desc1,$sub_desc2,$sub_desc3,$sub_desc4,$date,$img_newspaper, $id ));

            header("location: all-newspaper.php");


        }
        $newspaperid = isset($_GET['newspaperid']) && is_numeric($_GET['newspaperid']) ? intval($_GET['newspaperid']) : 0 ;

        $stmt = $con->prepare("SELECT * FROM newspaper WHERE ID = ? ");
        $stmt->execute(array($newspaperid));
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
                                        <p>من خلال هذه الصفحه يمكنك تعديل بيانات الخبر </p>
                                    </div>
                                    <form class="form" action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="form-group col-md-6 col-xs-12">
                                                    <input type="hidden" name="newspaperid" value="<?php echo $newspaperid ?>">
                                                    <label for="exampleInputEmail1">اسم الخبر</label>
                                                    <div class="input d-flex align-items-center">
                                                        <input type="text" name="title" value="<?php echo $row['title'] ?>" placeholder="اسم الخبر" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 col-xs-12">
                                                    <label>صوره الخبر</label><br />
                                                    <input class="img form-control" type="file" value="<?php echo $row['image'] ?>" name="n_image"/>
                                                </div>
                                                
                                                <div class="form-group col-md-6 col-xs-12">
                                                    <label>تاريخ الخبر</label><br />
                                                    <input class="form-control" type="date" value="<?php echo $row['date'] ?>" name="date"/>
                                                </div>
                                                <div class="form-group col-md-6 col-xs-12">
                                                    <label for="exampleInputEmail1">وصف الخبر</label>
                                                    <div class="input d-flex align-items-center">
                                                        <input class="form-control" id="exampleFormControlTextarea1" value="<?php echo $row['description'] ?>" name="description"/>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 col-xs-12">
                                                    <label for="exampleInputEmail1">عنوان فرعى</label>
                                                    <div class="input d-flex align-items-center">
                                                        <input class="form-control" id="exampleFormControlTextarea2" name="sub_desc1"  value="<?php echo $row['sub_desc1'] ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 col-xs-12">
                                                    <label for="exampleInputEmail1">عنوان فرعى</label>
                                                    <div class="input d-flex align-items-center">
                                                        <input class="form-control" id="exampleFormControlTextarea3" name="sub_desc2"  value="<?php echo $row['sub_desc2'] ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 col-xs-12">
                                                    <label for="exampleInputEmail1">عنوان فرعى</label>
                                                    <div class="input d-flex align-items-center">
                                                        <input class="form-control" id="exampleFormControlTextarea4" name="sub_desc3"  value="<?php echo $row['sub_desc2'] ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 col-xs-12">
                                                    <label for="exampleInputEmail1">عنوان فرعى</label>
                                                    <div class="input d-flex align-items-center">
                                                        <input class="form-control" id="exampleFormControlTextarea5" name="sub_desc4"  value="<?php echo $row['sub_desc4'] ?>" />
                                                    </div>
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