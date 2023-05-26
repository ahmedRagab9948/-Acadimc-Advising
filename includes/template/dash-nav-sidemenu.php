            <!-- start dashboard-navbar  -->
                <div class="das-nav d-flex align-items-center justify-content-between">
                        <div class="left">
                            <button class="l_bttn">
                                <i class="fas fa-caret-down"></i>
                                <i class="fas fa-user"></i>
                            </button>
                            <div class="hide_menu">
                                <a href="home.php">الموقع</a>
                                <a href="logout.php"><i class="fal fa-sign-out-alt fa-rotate-180"></i> تسجيل الخروج</a>
                            </div>
                        </div>
                        <div class="right mr-4">
                            <button id="bars"><i class="fas fa-bars"></i></button>
                            <a href="dashboard.php">
                                لوحة التحكم  <i class="fas fa-home"></i>
                            </a>
                        </div>
                </div>
            <!-- end dashboard-navbar  -->

            <!-- start dashboard-side-menu  -->
                <div class="dash-side-menu accordion" id="sidenavAccordion">
                    <h4>الاقسام الرئيسيه</h4>
                    <a href="dashboard.php">
                        لوحة تحكم   
                        <i class="far icon fa-tachometer-alt-average"></i>
                    </a>

                    <h4>الاقسام</h4>
                    <a href="#" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="true" aria-controls="collapseLayouts1">
                        <i class="fas arrow fa-chevron-left"></i>
                        الطلاب  
                        <i class="fas icon fa-users"></i>
                    </a>

                    <div class="hide-div collapse pr-3" id="collapseLayouts1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <a href="add-users.php">
                        اضافة طالب  
                        </a>
                        <a href="all-users.php">
                        تعديل / حذف طالب  
                        </a>
                    </div>

                    <a href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="true" aria-controls="collapseLayouts1">
                        <i class="fas arrow fa-chevron-left"></i>
                        الأخبار  
                        <i class="fal icon fa-newspaper"></i>
                    </a>

                    <div class="hide-div collapse pr-3" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <a href="add-newspaper.php">
                        اضافة خبر  
                        </a>
                        <a href="all-newspaper.php">
                        تعديل / حذف خبر  
                        </a>
                    </div>

                    <a href="#" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="true" aria-controls="collapseLayouts1">
                        <i class="fas arrow fa-chevron-left"></i>
                        الأسئله  
                        <i class="fas fa-comment-lines"></i>
                    </a>

                    <div class="hide-div collapse pr-3" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <a href="all-questions.php">
                             حذف سؤال  
                        </a>
                        <a href="all-replies.php">
                             حذف رد  
                        </a>
                    </div>

                    <!-- <h4>ادارة الموقع وعرض البيانات</h4>
                    <a href="all-users.php">
                       جميع الطلاب  
                        <i class="fas icon fa-users"></i>
                    </a>
                    <a href="all-newspaper.php">
                       جميع الأخبار  
                       <i class="fal icon fa-newspaper"></i>
                    </a>
                    <a href="#">
                       جميع الأسئله  
                       <i class="fas icon fa-comment-lines"></i>
                    </a> -->
                </div>
            <!-- end dashboard-side-menu  -->