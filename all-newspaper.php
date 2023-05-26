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
        $newspaperid = isset($_GET['newspaperid']) && is_numeric($_GET['newspaperid']) ? intval($_GET['newspaperid']) : 0 ;

        $stmt2 = $con->prepare("SELECT * FROM newspaper WHERE ID = ? ");
        $stmt2->execute(array($newspaperid));
        $count = $stmt2->rowCount();

        if($count > 0) {
            $stmt2 = $con->prepare("DELETE FROM newspaper WHERE ID = :newspaperid");
            $stmt2->bindParam(":newspaperid",$newspaperid);
            $stmt2->execute();

            echo "
                <script>
                    toastr.success('تم حذف الخبر بنجاج.')
                </script>";
    
        }
        ?>
            <!-- start dashboard-header-cards -->
                <div id="addUser" class="signup">
                        <div class="container-fluid">
                            <div class="allContent">
                                <div class="container-fluid">
                                    <h1>الأخبار</h1>
                                    <ol class="breadcrumb mb-4">
                                        <li class="breadcrumb-item">لوحة التحكم الموقع</li>
                                        <li class="breadcrumb-item active">جميع الأخبار</li>
                                    </ol>

                                    <!-- table -->

                                    <div class="card mb-4">
                                        <div class="card-header d-flex align-items-center justify-content-end">
                                            جميع الأخبار
                                            <i class="fas fa-table mr-1 ml-2"></i>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">رقم الخبر</th>
                                                            <th scope="col">صوره الخبر</th>
                                                            <th scope="col">عنوان الخبر</th>
                                                            <th scope="col">وصف الخبر</th>
                                                            <th scope="col">تاريخ الخبر</th>
                                                            <th scope="col">تعديل الخبر</th>
                                                            <th scope="col">حذف الخبر</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                            <?php 
                                                                $stmt2 = $con->prepare("SELECT * FROM newspaper ORDER BY date DESC");

                                                                $stmt2->execute();
                                                        
                                                                $newspaper = $stmt2->fetchAll();

                                                                foreach($newspaper as $report) {?>
                                                                    <tr>
                                                                        <th scope="row"><?php echo $report['ID']?></th>
                                                                        <td>
                                                                            <img src="data/uploads/newspaper/<?php echo $report['image']?>" alt="user_image">
                                                                        </td>
                                                                        <td><?php echo $report['title']?></td>
                                                                        <td><?php echo $report['description']?></td>
                                                                        <td><?php echo $report['date']?></td>
                                                                        <td>
                                                                            <a href="edit-newspaper.php?newspaperid=<?php echo $report["ID"]?>" class="btn btn-warning">تعديل</a>
                                                                        </td>
                                                                        <td>
                                                                            <a href="all-newspaper.php?newspaperid=<?php echo $report["ID"]?>" class="btn btn-danger confirm">حذف</a>
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