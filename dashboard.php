<?php
    ob_start();
    session_start();
    $Nonav = "";
    if(isset($_SESSION["full_name"])){
        $getTitle = "Dashboard page";
        $style="dashboard.css";
        $js="dashboard.js";
        include "init.php";
        include "includes/template/dash-nav-sidemenu.php";
        ?>

            <!-- start dashboard-header-cards -->
                <div id="addUser" class="signup">
                        <div class="container-fluid">
                            <div class="allContent">
                                    <h1>لوحة التحكم</h1>
                                    <ol class="breadcrumb mb-4">
                                        <li class="breadcrumb-item active ml-auto">لوحة تحكم الموقع</li>
                                    </ol>
                                    <div class="header_cards">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="items">    
                                                    <div class="left col-5">
                                                        <img src="<?php echo $img_path ?>dashboard/users.svg" alt="plan-svgrepo-com.svg">
                                                    </div>
                                                    <div class="right col-7">
                                                        <h3 class="number">
                                                            <?php echo countItems('UserID' , 'users') ?>
                                                        </h3>
                                                        <p class="desc">
                                                            المستخدمين
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="items">    
                                                    <div class="left col-5">
                                                        <img src="<?php echo $img_path ?>dashboard/newspaper.svg" alt="plan-svgrepo-com.svg">
                                                    </div>
                                                    <div class="right col-7">
                                                        <h3 class="number">
                                                            <?php echo countItems('ID' , 'newspaper') ?>
                                                        </h3>
                                                        <p class="desc">
                                                            الأخبار
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="items">    
                                                    <div class="left col-5">
                                                        <img src="<?php echo $img_path ?>dashboard/comments.svg" alt="plan-svgrepo-com.svg">
                                                    </div>
                                                    <div class="right col-7">
                                                        <h3 class="number">
                                                            <?php echo countItems('id' , 'comments') ?>
                                                        </h3>
                                                        <p class="desc">
                                                            الأسئله
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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