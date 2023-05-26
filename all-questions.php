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
        $questionid = isset($_GET['questionid']) && is_numeric($_GET['questionid']) ? intval($_GET['questionid']) : 0 ;

        $stmt2 = $con->prepare("SELECT * FROM comments WHERE id = ? ");
        $stmt2->execute(array($questionid));
        $count = $stmt2->rowCount();

        if($count > 0) {
            $stmt2 = $con->prepare("DELETE FROM comments WHERE id = :questionid");
            $stmt2->bindParam(":questionid",$questionid);
            $stmt2->execute();

            echo "
                <script>
                    toastr.success('تم حذف السؤال بنجاج.')
                </script>";
    
        }
        ?>
            <!-- start dashboard-header-cards -->
                <div id="addUser" class="signup">
                        <div class="container-fluid">
                            <div class="allContent">
                                <div class="container-fluid">
                                    <h1>الأسئلة</h1>
                                    <ol class="breadcrumb mb-4">
                                        <li class="breadcrumb-item">لوحة التحكم الموقع</li>
                                        <li class="breadcrumb-item active">جميع الأسئلة</li>
                                    </ol>

                                    <!-- table -->

                                    <div class="card mb-4">
                                        <div class="card-header d-flex align-items-center justify-content-end">
                                            جميع الأسئلة
                                            <i class="fas fa-table mr-1 ml-2"></i>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">رقم السؤال</th>
                                                            <th scope="col">المستخدم</th>
                                                            <th scope="col">السؤال</th>
                                                            <th scope="col">تاريخ السؤال</th>
                                                            <th scope="col">حذف الخبر</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                            <?php 
                                                                $stmt2 = $con->prepare("SELECT * FROM comments INNER JOIN users ON comments.userID = users.UserID ORDER BY comments.id DESC");

                                                                $stmt2->execute();
                                                        
                                                                $questions = $stmt2->fetchAll();

                                                                foreach($questions as $question) {?>
                                                                    <tr>
                                                                        <th scope="row"><?php echo $question['id']?></th>
                                                                        <td><?php echo $question['full_name']?></td>
                                                                        <td><?php echo $question['comment']?></td>
                                                                        <td><?php echo $question['createdOn']?></td>
                                                                        <td>
                                                                            <a href="all-questions.php?questionid=<?php echo $question['id']?>" class="btn btn-danger confirm">حذف</a>
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