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
        $replyid = isset($_GET['replyid']) && is_numeric($_GET['replyid']) ? intval($_GET['replyid']) : 0 ;

        $stmt2 = $con->prepare("SELECT * FROM replies WHERE id = ? ");
        $stmt2->execute(array($replyid));
        $count = $stmt2->rowCount();

        if($count > 0) {
            $stmt2 = $con->prepare("DELETE FROM replies WHERE id = :replyid");
            $stmt2->bindParam(":replyid",$replyid);
            $stmt2->execute();

            echo "
                <script>
                    toastr.success('تم حذف الاجابه بنجاج.')
                </script>";
    
        }
        ?>
            <!-- start dashboard-header-cards -->
                <div id="addUser" class="signup">
                        <div class="container-fluid">
                            <div class="allContent">
                                <div class="container-fluid">
                                    <h1>الاجابات</h1>
                                    <ol class="breadcrumb mb-4">
                                        <li class="breadcrumb-item">لوحة التحكم الموقع</li>
                                        <li class="breadcrumb-item active">جميع الاجابات</li>
                                    </ol>

                                    <!-- table -->

                                    <div class="card mb-4">
                                        <div class="card-header d-flex align-items-center justify-content-end">
                                            جميع الاجابات
                                            <i class="fas fa-table mr-1 ml-2"></i>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">رقم الاجابه</th>
                                                            <th scope="col">المستخدم</th>
                                                            <th scope="col">الاجابه</th>
                                                            <th scope="col">تاريخ الاجابه</th>
                                                            <th scope="col">حذف الاجابه</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                            <?php 
                                                                $stmt2 = $con->prepare("SELECT * FROM replies INNER JOIN users ON replies.userID = users.UserID ORDER BY replies.id DESC");

                                                                $stmt2->execute();
                                                        
                                                                $replies = $stmt2->fetchAll();

                                                                foreach($replies as $reply) {?>
                                                                    <tr>
                                                                        <th scope="row"><?php echo $reply['id']?></th>
                                                                        <td><?php echo $reply['full_name']?></td>
                                                                        <td><?php echo $reply['Reply']?></td>
                                                                        <td><?php echo $reply['createdOn']?></td>
                                                                        <td>
                                                                            <a href="all-replies.php?replyid=<?php echo $reply['id']?>" class="btn btn-danger confirm">حذف</a>
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