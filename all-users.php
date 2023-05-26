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
        $userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0 ;

        $stmt = $con->prepare("SELECT * FROM users WHERE UserID = ? ");
        $stmt->execute(array($userid));
        $count = $stmt->rowCount();
    
        if($count > 0) {
            $stmt2 = $con->prepare("DELETE FROM users WHERE UserID = :userid");
            $stmt2->bindParam(":userid",$userid);
            $stmt2->execute();

            echo "
                <script>
                    toastr.success('تم حذف المستخدم بنجاج.')
                </script>";
    
        }
        ?>
            <!-- start dashboard-header-cards -->
                <div id="addUser" class="signup">
                        <div class="container-fluid">
                            <div class="allContent">
                                <div class="container-fluid">
                                    <h1>المستخدمين</h1>
                                    <ol class="breadcrumb mb-4">
                                        <li class="breadcrumb-item">لوحة التحكم الموقع</li>
                                        <li class="breadcrumb-item active">جميع المستخدمين</li>
                                    </ol>

                                    <!-- table -->
                                    <div class="card mb-4">
                                        <div class="card-header d-flex align-items-center justify-content-end">
                                            جميع المستخدمين
                                            <i class="fas fa-table mr-1 ml-2"></i>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">رقم المستخدم</th>
                                                            <th scope="col">صوره المستخدم</th>
                                                            <th scope="col">اسم المستخدم</th>
                                                            <th scope="col">ايميل المستخدم</th>
                                                            <th scope="col">تعديل المستخدم</th>
                                                            <th scope="col">حذف المستخدم</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                            <?php 
                                                                $stmt2 = $con->prepare("SELECT * FROM `users` WHERE GroupID = 0 ORDER BY UserID DESC");

                                                                $stmt2->execute();
                                                        
                                                                $users = $stmt2->fetchAll();

                                                                foreach($users as $user) {?>
                                                                    <tr>
                                                                        <th scope="row"><?php echo $user['UserID']?></th>
                                                                        <td>
                                                                            <img src="data/uploads/users/<?php echo $user['user_image']?>" alt="user_image">
                                                                        </td>
                                                                        <td><?php echo $user['full_name']?></td>
                                                                        <td><?php echo $user['email']?></td>
                                                                        <td>
                                                                            <a href="edit-user.php?userid=<?php echo $user["UserID"]?>" class="btn btn-warning">تعديل</a>
                                                                        </td>
                                                                        <td>
                                                                            <a href="all-users.php?userid=<?php echo $user["UserID"]?>" class="btn btn-danger confirm">حذف</a>
                                                                        </td>
                                                                    </tr>
                                                            <?php
                                                                }
                                                            ?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- table -->
                                </div>
                            </div>
                        </div>
                </div>
            <!-- end dashboard-header-cards -->
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