<?php
    ob_start();
    session_start();
    if(isset($_SESSION["full_name"])){
        $getTitle = "Home page";
		$style="courses-road-map.css";
        $js="courses-road-map.js";
        include "init.php";

        $course = "";

        if(isset($_GET['course'])){
            $course = $_GET['course'];
        } else {
            $course = "";
        }


        if($course == "Full-Stack-NET"){?>
            <!-- // if the $course = Full-Stack-NET show the Full-Stack-NET course -->
                <div class="course-road-map">
                    <!-- ##################### start header ########################################### -->
                    <header style="background-color: rgb(83, 74, 153)">
                        <div class="head container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="left">
                                        <img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="right">
                                        <small>مسار تعليمي</small>
                                        <h3>Full-Stack.NET</h3>
                                        <p>
                                            ستتعرف في هذا المسار على طريقة تطوير وبناء تطبيقات ويب تفاعلية
                                            متكاملة باستخدام NET.، حيث تبدأ رحلتك بتعلم أساسيات تطوير
                                            وبناء التطبيقات (Back-End) وقواعد البيانات (Database) كما
                                            ستتعرف على طرق هيكلة وتصميم صفحات الويب وتنسيقها وكل ما يخص
                                            تطوير الواجهات (Front-End)، وأخيرًا ستتعرف على مفهوم التحكم
                                            بالإصدارات وعلى طريقة استخدام كل من Git و GitHub.
                                        </p>
                                        <button id="btn">
                                            <a
                                                href="#path-contents"
                                                style="color: #fff; text-decoration: none"
                                                >هيا نبدأ</a
                                            >
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- ##################### end header ########################################### -->
                    <!-- ##################### start section ########################################### -->
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h3>بعد تعلمك لهذا المسار ستصبح قادراً على</h3>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>تطوير وبناء برامج تفاعلية متكاملة وربطها بقواعد البيانات</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>تطوير تطبيقات الويب باستخدام لغة #C</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>تطوير وتصميم واجهات البرامج</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ##################### end section ########################################### -->
                    <!-- ##################### start path-contents ########################################### -->
                    <div class="path-contents" id="path-contents">
                        <div class="container">
                            <h3>محتويات المسار</h3>
                            <div class="row">
                                <!-- START card course HTML -->
                                <div class="col-12">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>1</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/html.png" alt="html" />
                                                <h3>HTML</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات HTML وعلى طريقة
                                                    استخدامها في إنشاء صفحات الويب.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseOne"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAyXCAQMLhDRZsLi_HurqTBZ"
                                                        >CLICK HERE</a
                                                    >
                                                    <h3>قناة <span>Abdelrahman Gamal</span></h3>
                                                    <a
                                                        href="https://www.youtube.com/playlist?list=PLknwEmKsW8OtLRQPTLms79499meY2D6ij"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseOne"
                                                    aria-expanded="true"
                                                    aria-controls="collapseOne"
                                                    >
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course HTML -->

                                <!-- START card course CSS -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>2</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/css.png" alt="css" />
                                                <h3>CSS</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على مفهوم CSS وكيفية إضافته إلى ملف
                                                    HTML لتنسيق صفحات الويب، كما سنتعرف على كيفية التحكم
                                                    بألوان العناصر وأحجامها.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseTwo"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAzjsz06gkzlSrlev53MGIKe"
                                                        >CLICK HERE</a
                                                    >
                                                    <h3>قناة <span>Abdelrahman Gamal</span></h3>
                                                    <h4>css</h4>
                                                    <a
                                                        href="https://www.youtube.com/playlist?list=PLknwEmKsW8Ov6JLhkIO1pOdHHCjdCq-PJ"
                                                        >CLICK HERE</a
                                                    >
                                                    <h5 style="margin-top: 10px">Grid System</h5>
                                                    <a
                                                        href="https://www.youtube.com/playlist?list=PLknwEmKsW8OsdTypb3CCjiM12pg7bXq10"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                    <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseTwo"
                                                    aria-expanded="true"
                                                    aria-controls="collapseTwo">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course CSS -->
                                <!-- START card course BOOTSTRAP -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>3</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img
                                                    src="<?php echo $img_path?>courses-images/bootstrap5.jpg"
                                                    alt="bootstrap5" />
                                                <h3>Bootstrap</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على تنسيق صفحات الويب باستخدام
                                                    Bootstrap ثم ستقوم بتوظيف ماتعلمته في مشروع.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseThree"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAyvm7f--dc6XqkpfDcen_vQ"
                                                        >CLICK HERE</a
                                                    >
                                                    <h3>قناة <span>Abdelrahman Gamal</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLknwEmKsW8OscL9GvjxwL7RYbcwwdIitk"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseThree"
                                                    aria-expanded="true"
                                                    aria-controls="collapseThree">
                                                    <span class="text">عرض المزيد</span>

                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course BOOTSTRAP -->

                                <!-- START card course JS -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>4</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/js.png" alt="JavaScript" />
                                                <h3>JavaScript</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات لغة JavaScript، حيث نقوم
                                                    بالتعرف على عدد من المفاهيم كالتعليقات والمتغيرات والثوابت
                                                    والمصفوفات والجمل الشرطيّة وجمل التكرار بالإضافة إلى
                                                    الدوال.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseFour"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAx3kiplQR_oeDqLDBUDYwVv"
                                                        >CLICK HERE</a
                                                    >
                                                    <h3>قناة <span>Abdelrahman Gamal</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLknwEmKsW8OuTqUDaFRBiAViDZ5uI3VcE"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseFour"
                                                    aria-expanded="true"
                                                    aria-controls="collapseFour">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course JS -->

                                <!-- START card course GIT -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>5</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/git.png" alt="Git" />
                                                <h3>Git</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات مفهوم Git، وأنظمة التحكم
                                                    بالنسخ وأنواعها، وإلى أي نوع من أنواع أنظمة التحكم بالنسخ
                                                    ينتمي Git، بالإضافة إلى طريقة التعامل معه على المستوى
                                                    الفردي.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseFive"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAw4eOj58MZPakHjaO3frVMF"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseFive"
                                                    aria-expanded="true"
                                                    aria-controls="collapseFive">
                                                <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course GIT -->

                                <!-- START card course react -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>6</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/react.png" alt="react" />
                                                <h3>React</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على مكتبة React المستخدمة لتسهيل
                                                    بناء واجهات المستخدم UI في تطبيقات الويب.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseNine"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Unique Coderz Academy</span></h3>
                                                    <a href="https://youtube.com/playlist?list=PLtFbQRDJ11kEjXWZmwkOV-vfXmrEEsuEW">CLICK HERE</a>
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseNine"
                                                    aria-expanded="true"
                                                    aria-controls="collapseNine">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course react -->

                                <!-- START card course SQL -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>7</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/sql.png" alt="sql" />
                                                <h3>SQL</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات SQL في التعامل مع قواعد
                                                    البيانات وإدارة محتوياتها من تخزين البيانات، وعرضها،
                                                    والتعديل عليها، وكذلك حذفها.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseSix"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Wael abo hamza</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PL93xoMrxRJIuicqcd1UpFUYMfWKGp7JmI"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseSix"
                                                    aria-expanded="true"
                                                    aria-controls="collapseSix">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course SQL -->
                                <!-- START card course C# -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>8</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/c-sharp.png" alt="C#" />
                                                <h3>#C</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات لغة #C وكيفية استخدام
                                                    المفاهيم البرمجيّة فيها، والتي تضم تعريف المتغيرات وإنشاء
                                                    جمل طباعة وإدخال واستخدام الجمل الشرطية ومفهوم Loops
                                                    والدوال بالإضافة إلى طرق استدعائها.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseSeven"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Muhammed Essa</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLMYF6NkLrdN-S0ZU-r5cZSJSXk3VJ60VJ"
                                                        >CLICK HERE</a
                                                    >
                                                    <h3>قناة <span>Metigator</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PL4n1Qos4Tb6SWPbJNpiznp-Ok4A8J_23l"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseSeven"
                                                    aria-expanded="true"
                                                    aria-controls="collapseSeven">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course C# -->
                                <!-- START card course ASP.NET -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>9</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img
                                                    src="<?php echo $img_path?>courses-images/asp.net.png"
                                                    alt="asp.net" />
                                                <h3>ASP.NET Core</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على تطوير تطبيقات الويب باستخدام
                                                    ASP.NET Core MVC.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseEight"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Mohamed Ebrahim Saad</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLZyQU-WOzZF1n6fAjEU7X4M4rLepUv5gu"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseEight"
                                                    aria-expanded="true"
                                                    aria-controls="collapseEight">
                                                <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course ASP.NET -->
                            </div>
                        </div>
                    </div>
                    <!-- ##################### end path-contents ########################################### -->
                </div>
        <?php
        }elseif($course == "Full-Stack-Python"){?>
            <!-- // if the $course = Full-Stack-Python show the Full-Stack-Python course -->
                <div class="course-road-map">
                    <!-- ##################### start header ########################################### -->
                    <header style="background-color: rgb(26, 164, 219)">
                        <div class="head container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="left">
                                        <img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="right">
                                        <small>مسار تعليمي</small>
                                        <h3>Full-Stack Python</h3>
                                        <p>
                                            ستتعلم في هذا المسار كيفية تطوير وبناء تطبيقات ويب تفاعلية
                                            متكاملة باستخدام Python، حيث تبدأ رحلتك بتعلم أساسيات تطوير
                                            وبناء التطبيقات (Back-End) وقواعد البيانات (Database) كما
                                            ستتعرف على طرق هيكلة وتصميم صفحات الويب وتنسيقها وكل ما يخص
                                            تطوير الواجهات (Front-End)، وأخيرًا ستتعرف على مفهوم التحكم
                                            بالإصدارات وعلى طريقة استخدام كل من Git و GitHub.
                                        </p>
                                        <button id="btn">
                                            <a href="#path-contents" style="color: #fff; text-decoration: none"
                                                >هيا نبدأ</a
                                            >
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- ##################### end header ########################################### -->
                    <!-- ##################### start section ########################################### -->
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h3>بعد تعلمك لهذا المسار ستصبح قادراً على</h3>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>فهم أساسيات البرمجة باستخدام لغة Python</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>تطوير وتصميم صفحات الويب وتنسيقها</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>ربط صفحات الويب بقواعد البيانات</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ##################### end section ########################################### -->
                    <!-- ##################### start path-contents ########################################### -->
                    <div class="path-contents" id="path-contents">
                        <div class="container">
                            <h3>محتويات المسار</h3>
                            <div class="row">
                                <!-- START card course Python -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>1</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/Python.png" alt="Python" />
                                                <h3>Python</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات لغة Python، حيث نقوم
                                                    بداية بتجهيز بيئة العمل ثم التعرف على طريقة تخزين البيانات
                                                    والتعامل مع أنواع البيانات المختلفة وتنفيذ العمليات
                                                    والأوامر البسيطة عليها مثل الجُمل الشرطيّة، عمليات التكرار
                                                    والتعامل مع الدوال.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseSeven"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Codezilla</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
                                                        >CLICK HERE</a
                                                    >
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs">CLICK HERE</a>
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseSeven"
                                                    aria-expanded="true"
                                                    aria-controls="collapseSeven">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course Python -->
                                <!-- START card course HTML -->
                                <div class="col-12">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>2</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/html.png" alt="html" />
                                                <h3>HTML</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات HTML وعلى طريقة
                                                    استخدامها في إنشاء صفحات الويب.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseOne"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAyXCAQMLhDRZsLi_HurqTBZ"
                                                        >CLICK HERE</a
                                                    >
                                                    <h3>قناة <span>Abdelrahman Gamal</span></h3>
                                                    <a
                                                        href="https://www.youtube.com/playlist?list=PLknwEmKsW8OtLRQPTLms79499meY2D6ij"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseOne"
                                                    aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course HTML -->

                                <!-- START card course CSS -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>3</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/css.png" alt="css" />
                                                <h3>CSS</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على مفهوم CSS وكيفية إضافته إلى ملف
                                                    HTML لتنسيق صفحات الويب، كما سنتعرف على كيفية التحكم
                                                    بألوان العناصر وأحجامها.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseTwo"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAzjsz06gkzlSrlev53MGIKe"
                                                        >CLICK HERE</a
                                                    >
                                                    <h3>قناة <span>Abdelrahman Gamal</span></h3>
                                                    <h4>css</h4>
                                                    <a
                                                        href="https://www.youtube.com/playlist?list=PLknwEmKsW8Ov6JLhkIO1pOdHHCjdCq-PJ"
                                                        >CLICK HERE</a
                                                    >
                                                    <h5 style="margin-top: 10px">Grid System</h5>
                                                    <a
                                                        href="https://www.youtube.com/playlist?list=PLknwEmKsW8OsdTypb3CCjiM12pg7bXq10"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseTwo"
                                                    aria-expanded="true"
                                                    aria-controls="collapseTwo">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course CSS -->
                                <!-- START card course BOOTSTRAP -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>4</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img
                                                    src="<?php echo $img_path?>courses-images/bootstrap5.jpg"
                                                    alt="bootstrap5" />
                                                <h3>Bootstrap</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على تنسيق صفحات الويب باستخدام
                                                    Bootstrap ثم ستقوم بتوظيف ماتعلمته في مشروع.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseThree"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAyvm7f--dc6XqkpfDcen_vQ"
                                                        >CLICK HERE</a
                                                    >
                                                    <h3>قناة <span>Abdelrahman Gamal</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLknwEmKsW8OscL9GvjxwL7RYbcwwdIitk"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseThree"
                                                    aria-expanded="true"
                                                    aria-controls="collapseThree">
                                                    <span class="text">عرض المزيد</span>

                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course BOOTSTRAP -->

                                <!-- START card course JS -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>5</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/js.png" alt="JavaScript" />
                                                <h3>JavaScript</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات لغة JavaScript، حيث نقوم
                                                    بالتعرف على عدد من المفاهيم كالتعليقات والمتغيرات والثوابت
                                                    والمصفوفات والجمل الشرطيّة وجمل التكرار بالإضافة إلى
                                                    الدوال.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseFour"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAx3kiplQR_oeDqLDBUDYwVv"
                                                        >CLICK HERE</a
                                                    >
                                                    <h3>قناة <span>Abdelrahman Gamal</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLknwEmKsW8OuTqUDaFRBiAViDZ5uI3VcE"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseFour"
                                                    aria-expanded="true"
                                                    aria-controls="collapseFour">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course JS -->

                                <!-- START card course GIT -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>6</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/git.png" alt="Git" />
                                                <h3>Git</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات مفهوم Git، وأنظمة التحكم
                                                    بالنسخ وأنواعها، وإلى أي نوع من أنواع أنظمة التحكم بالنسخ
                                                    ينتمي Git، بالإضافة إلى طريقة التعامل معه على المستوى
                                                    الفردي.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseFive"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAw4eOj58MZPakHjaO3frVMF"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseFive"
                                                    aria-expanded="true"
                                                    aria-controls="collapseFive">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course GIT -->

                                <!-- START card course react -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>7</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/react.png" alt="react" />
                                                <h3>React</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على مكتبة React المستخدمة لتسهيل
                                                    بناء واجهات المستخدم UI في تطبيقات الويب.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseNine"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Unique Coderz Academy</span></h3>
                                                    <a href="https://youtube.com/playlist?list=PLtFbQRDJ11kEjXWZmwkOV-vfXmrEEsuEW">CLICK HERE</a>
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseNine"
                                                    aria-expanded="true"
                                                    aria-controls="collapseNine">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course react -->

                                <!-- START card course SQL -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>8</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/sql.png" alt="sql" />
                                                <h3>SQL</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات SQL في التعامل مع قواعد
                                                    البيانات وإدارة محتوياتها من تخزين البيانات، وعرضها،
                                                    والتعديل عليها، وكذلك حذفها.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseSix"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Wael abo hamza</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PL93xoMrxRJIuicqcd1UpFUYMfWKGp7JmI"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseSix"
                                                    aria-expanded="true"
                                                    aria-controls="collapseSix">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course SQL -->
                                <!-- START card course Django -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>9</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/Django.png" alt="Django" />
                                                <h3>Django</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات تطوير تطبيقات الويب
                                                    باستخدام Django Framework.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseEight"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Abdelrahman Gamal</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLknwEmKsW8OtK_n48UOuYGxJPbSFrICxm"
                                                        >CLICK HERE</a
                                                    >
                                                    <h3>قناة <span>Programming Secrets</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLp2eAGIFKMEVnAAJWhGzLc1Nn-tFP1UHP"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseEight"
                                                    aria-expanded="true"
                                                    aria-controls="collapseEight">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course Django-->
                            </div>
                        </div>
                    </div>
                    <!-- ##################### end path-contents ########################################### -->
                </div>
        <?php
        }elseif($course == "Full-Stack-JavaScript"){?>
            <!-- // if the $course = Full-Stack-JavaScript show the Full-Stack-JavaScript course -->
                <div class="course-road-map">
                    <!-- ##################### start header ########################################### -->
                    <header style="background: rgb(67, 67, 67)">
                        <div class="head container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="left">
                                        <img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="right">
                                        <small>مسار تعليمي</small>
                                        <h3>Full-Stack JavaScript</h3>
                                        <p>
                                            سيأخذك هذا المسار في رحلة تتعلم من خلالها تطوير وبناء تطبيقات
                                            ويب تفاعلية متكاملة، تبدأ رحلتك بتعلم أساسيات البرمجة بلغة
                                            JavaScript ثم ستتعرف على طرق هيكلة وتصميم صفحات الويب وتنسيقها
                                            وكل ما يخص تطوير الواجهات (Front-End)، ثم ستنتقل لتعلم أساسيات
                                            تطوير وبناء خلفيات التطبيقات (Back-End) وقواعد البيانات
                                            (Database)، كما ستتعرف على مفهوم التحكم بالإصدارات وعلى طريقة
                                            استخدام كل من Git و GitHub، وأخيرًا ستتعلم طريقة استضافة ورفع
                                            المشاريع على منصة Heroku.
                                        </p>
                                        <button id="btn">
                                            <a href="#path-contents" style="color: #fff; text-decoration: none"
                                                >هيا نبدأ</a
                                            >
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- ##################### end header ########################################### -->
                    <!-- ##################### start section ########################################### -->
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h3>بعد تعلمك لهذا المسار ستصبح قادراً على</h3>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>تطوير وبناء برامج تفاعلية متكاملة وربطها بقواعد البيانات.</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>رفع المشروع واستضافته على منصة Heroku.</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>تطوير وتصميم واجهات البرامج</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ##################### end section ########################################### -->
                    <!-- ##################### start path-contents ########################################### -->
                    <div class="path-contents" id="path-contents">
                        <div class="container">
                            <h3>محتويات المسار</h3>
                            <div class="row">
                                <!-- START card course HTML -->
                                <div class="col-12">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>1</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/html.png" alt="html" />
                                                <h3>HTML</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات HTML وعلى طريقة
                                                    استخدامها في إنشاء صفحات الويب.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseOne"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAyXCAQMLhDRZsLi_HurqTBZ"
                                                        >CLICK HERE</a
                                                    >
                                                    <h3>قناة <span>Abdelrahman Gamal</span></h3>
                                                    <a
                                                        href="https://www.youtube.com/playlist?list=PLknwEmKsW8OtLRQPTLms79499meY2D6ij"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseOne"
                                                    aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course HTML -->

                                <!-- START card course CSS -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>2</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/css.png" alt="css" />
                                                <h3>CSS</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على مفهوم CSS وكيفية إضافته إلى ملف
                                                    HTML لتنسيق صفحات الويب، كما سنتعرف على كيفية التحكم
                                                    بألوان العناصر وأحجامها.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseTwo"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAzjsz06gkzlSrlev53MGIKe"
                                                        >CLICK HERE</a
                                                    >
                                                    <h3>قناة <span>Abdelrahman Gamal</span></h3>
                                                    <h4>css</h4>
                                                    <a
                                                        href="https://www.youtube.com/playlist?list=PLknwEmKsW8Ov6JLhkIO1pOdHHCjdCq-PJ"
                                                        >CLICK HERE</a
                                                    >
                                                    <h5 style="margin-top: 10px">Grid System</h5>
                                                    <a
                                                        href="https://www.youtube.com/playlist?list=PLknwEmKsW8OsdTypb3CCjiM12pg7bXq10"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseTwo"
                                                    aria-expanded="true"
                                                    aria-controls="collapseTwo">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course CSS -->
                                <!-- START card course BOOTSTRAP -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>3</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img
                                                    src="<?php echo $img_path?>courses-images/bootstrap5.jpg"
                                                    alt="bootstrap5" />
                                                <h3>Bootstrap</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على تنسيق صفحات الويب باستخدام
                                                    Bootstrap ثم ستقوم بتوظيف ماتعلمته في مشروع.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseThree"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAyvm7f--dc6XqkpfDcen_vQ"
                                                        >CLICK HERE</a
                                                    >
                                                    <h3>قناة <span>Abdelrahman Gamal</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLknwEmKsW8OscL9GvjxwL7RYbcwwdIitk"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseThree"
                                                    aria-expanded="true"
                                                    aria-controls="collapseThree">
                                                    <span class="text">عرض المزيد</span>

                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course BOOTSTRAP -->

                                <!-- START card course JS -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>4</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/js.png" alt="JavaScript" />
                                                <h3>JavaScript</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات لغة JavaScript، حيث نقوم
                                                    بالتعرف على عدد من المفاهيم كالتعليقات والمتغيرات والثوابت
                                                    والمصفوفات والجمل الشرطيّة وجمل التكرار بالإضافة إلى
                                                    الدوال.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseFour"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAx3kiplQR_oeDqLDBUDYwVv"
                                                        >CLICK HERE</a
                                                    >
                                                    <h3>قناة <span>Abdelrahman Gamal</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLknwEmKsW8OuTqUDaFRBiAViDZ5uI3VcE"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseFour"
                                                    aria-expanded="true"
                                                    aria-controls="collapseFour">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course JS -->

                                <!-- START card course GIT -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>5</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/git.png" alt="Git" />
                                                <h3>Git</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات مفهوم Git، وأنظمة التحكم
                                                    بالنسخ وأنواعها، وإلى أي نوع من أنواع أنظمة التحكم بالنسخ
                                                    ينتمي Git، بالإضافة إلى طريقة التعامل معه على المستوى
                                                    الفردي.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseFive"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAw4eOj58MZPakHjaO3frVMF"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseFive"
                                                    aria-expanded="true"
                                                    aria-controls="collapseFive">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course GIT -->

                                <!-- START card course react -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>6</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/react.png" alt="react" />
                                                <h3>React</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على مكتبة React المستخدمة لتسهيل
                                                    بناء واجهات المستخدم UI في تطبيقات الويب.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseNine"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Unique Coderz Academy</span></h3>
                                                    <a href="https://youtube.com/playlist?list=PLtFbQRDJ11kEjXWZmwkOV-vfXmrEEsuEW">CLICK HERE</a>
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseNine"
                                                    aria-expanded="true"
                                                    aria-controls="collapseNine">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course react -->

                                <!-- START card course Node.js -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>7</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/Node.js.png" alt="Node.js" />
                                                <h3>Node.js</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على مفهوم Node.js بشـكل عـام، ثم
                                                    سنسلط الضوء عـلى الأوامر البرمجية وكيفية التعامل معها
                                                    وتنفيذها في Node.js بالإضافة إلى طريقة استخدامها في
                                                    المشاريع البرمجية الحقيقة.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseSix"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Abdelrahman Gamal</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLeWmXrh0047991IDIBFxKZlzURscnf3t8"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseSix"
                                                    aria-expanded="true"
                                                    aria-controls="collapseSix">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course Node.js -->
                                <!-- START card course MongoDB -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>8</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/MongoDB.png" alt="MongoDB" />
                                                <h3>MongoDB</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على مفهوم قواعد البيانات وأحد أشهر
                                                    أنواعها وهي MongoDB، ثم سنتعرف على طريقة التعامل مع
                                                    البيانات من إضافة وحذف وتعديل. كما سنتعرف على طريقة
                                                    استخدام برنامج MongoDB Compass، بالإضافة إلى طريقة حفظ
                                                    البيانات والتعامل معها باستخدام خدمة MongoDB Atlas
                                                    السحابية.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseSeven"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Algorithm Academy</span></h3>
                                                    <a
                                                        href="https://teracourses.com/en/course/mongodb-course5"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseSeven"
                                                    aria-expanded="true"
                                                    aria-controls="collapseSeven">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course MongoDB -->
                                <!-- START card course Express -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>9</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/Express.png" alt="Express" />
                                                <h3>Express</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على دور Express وأهميته في المشاريع
                                                    البرمجية، وعلى طريقة توظيفه للتفاعل مع استقبال Requests
                                                    وإعطاء Responses.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseEight"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                <h3>قناة <span>Algorithm Academy</span></h3>
                                                    <a
                                                        href="https://www.youtube.com/watch?v=a75eNBtayFc&list=PLfDx4cQoUNOZd0O-lHBZxWJCaIfPMI-UH"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseEight"
                                                    aria-expanded="true"
                                                    aria-controls="collapseEight">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course Express -->
                            </div>
                        </div>
                    </div>
                    <!-- ##################### end path-contents ########################################### -->
                </div>
        <?php
        }elseif($course == "iOS"){?>
            <!-- // if the $course = iOS show the iOS course -->
                <div class="course-road-map">
                    <!-- ##################### start header ########################################### -->
                    <header style="background-color: rgb(245, 175, 6)">
                        <div class="head container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="left">
                                        <img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="right">
                                        <small>مسار تعليمي</small>
                                        <h3>تطوير تطبيقات iOS</h3>
                                        <p>
                                            سيأخذك هذا المسار في رحلة تتعلم من خلالها تطوير تطبيقات iOS،
                                            ستبدأ بتعلّم أساسيات البرمجة بلغة Swift مرورًا بمجموعة من
                                            المفاهيم التي تحتاجها في تطوير التطبيقات باستخدام Xcode.
                                        </p>
                                        <button id="btn">
                                            <a href="#path-contents" style="color: #fff; text-decoration: none"
                                                >هيا نبدأ</a
                                            >
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- ##################### end header ########################################### -->
                    <!-- ##################### start section ########################################### -->
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h3>بعد تعلمك لهذا المسار ستصبح قادراً على</h3>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>اكتساب أهم المهارات التي يحتاجها مطوّري تطبيقات iOS.</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>القدرة على دخول سوق العمل كمطور تطبيقات iOS.</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>فهم أساسيات البرمجة باستخدام لغة Swift.</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ##################### end section ########################################### -->
                    <!-- ##################### start path-contents ########################################### -->
                    <div class="path-contents" id="path-contents">
                        <div class="container">
                            <h3>محتويات المسار</h3>
                            <div class="row">
                                <!-- START card course Swift -->
                                <div class="col-12">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>1</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/swift.png" alt="Swift" />
                                                <h3>Swift</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات المفاهيم البرمجيّة في
                                                    لغة swift 5.2 والتي ستساعدك في تطوير تطبيقات iOS.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseOne"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span> Bambrmj </span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLQaOY10EEc8bNbEBMyiJU1I-GIgs1LQfj"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseOne"
                                                    aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course Swift -->
                                <!-- START card course Firebase -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>2</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img
                                                    src="<?php echo $img_path?>courses-images/firebase.png"
                                                    alt="Firebase" />
                                                <h3>Firebase</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذه الدورة علي firebase وهي منصة تطوير تطبيقات
                                                    الهواتف المحمولة والويب توفر مجموعة أدوات وخدمات لبناء
                                                    تطبيقات قابلة للتوسع بسرعة و تشمل خدمات مثل hosting,
                                                    authentication, and cloud messaging
                                                </p>
                                            </div>
                                            <div
                                                id="collapseFour"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Omar Ahmed</span></h3>
                                                    <a
                                                        href="https://www.youtube.com/playlist?list=PLwWuxCLlF_ucmA5Yq_2u6N9WrDOLWlxh7"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseFour"
                                                    aria-expanded="true"
                                                    aria-controls="collapseFour">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course Firebase -->

                                <!-- START card course GIT -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>3</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/git.png" alt="Git" />
                                                <h3>Git</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات مفهوم Git، وأنظمة التحكم
                                                    بالنسخ وأنواعها، وإلى أي نوع من أنواع أنظمة التحكم بالنسخ
                                                    ينتمي Git، بالإضافة إلى طريقة التعامل معه على المستوى
                                                    الفردي.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseFive"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAw4eOj58MZPakHjaO3frVMF"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseFive"
                                                    aria-expanded="true"
                                                    aria-controls="collapseFive">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course GIT -->
                                <!-- START card course UI -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>4</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/UI-UX.png" alt="UI/UX" />
                                                <h3>UI/UX</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>سنتعرف في هذهِ الدورة على أساسيات واجه المستخدم.</p>
                                            </div>
                                            <div
                                                id="collapseNine"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Alaa Darwish</span></h3>
                                                    <a
                                                        href="https://www.youtube.com/watch?v=EqSd8vXGcBk&list=PLRemWV5koZLBR1khj5OlC_xLkdsI8G5DF"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseNine"
                                                    aria-expanded="true"
                                                    aria-controls="collapseNine">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course UI -->
                            </div>
                        </div>
                    </div>
                    <!-- ##################### end path-contents ########################################### -->
                </div>
        <?php
        }elseif($course == "flutter"){?>
            <!-- // if the $course = flutter show the flutter course -->
                <div class="course-road-map">
                    <!-- ##################### start header ########################################### -->
                    <header style="background-color: rgb(26, 164, 219)">
                        <div class="head container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="left">
                                        <img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="right">
                                        <small>مسار تعليمي</small>
                                        <h3>تطوير تطبيقات Flutter</h3>
                                        <p>
                                            سنتعرف في المسار على طريقة بناء تطبيقات الموبايل والويب
                                            باستخدام Flutter، حيث تبدأ رحلتك بتعلم لغة Dart ثم تنتقل لتعلم
                                            مبادئ وأساسيات بناء التطبيقات باستخدام Flutter، كما ستتعرف على
                                            طريقة استخدام قواعد البيانات واستخدام أنظمة التحكم بالإصدارات
                                            Git و GitHub.
                                        </p>
                                        <button id="btn">
                                            <a href="#path-contents" style="color: #fff; text-decoration: none"
                                                >هيا نبدأ</a
                                            >
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- ##################### end header ########################################### -->
                    <!-- ##################### start section ########################################### -->
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h3>بعد تعلمك لهذا المسار ستصبح قادراً على</h3>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>بناء واجهات التطبيقات باستخدام Flutter</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>إنشاء قواعد البيانات وربطها بالتطبيقات</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>استخدام لغة Dart</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ##################### end section ########################################### -->
                    <!-- ##################### start path-contents ########################################### -->
                    <div class="path-contents" id="path-contents">
                        <div class="container">
                            <h3>محتويات المسار</h3>
                            <div class="row">
                                <!-- START card course Android Studio COURSE -->
                                <div class="col-12">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>1</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img
                                                    src="<?php echo $img_path?>courses-images/Android Studio.png"
                                                    alt="Android Studio" />
                                                <h3>Android Studio COURSE</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات Android Studio COURSE.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseOne"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>TheNewBaghdad</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLF8OvnCBlEY3e0Yg990aAXreEru72_xWN"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseOne"
                                                    aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course Android Studio COURSE -->

                                <!-- START card course Dart -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>2</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/dart.png" alt="Dart" />
                                                <h3>Dart</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات لغة Dart وكيفية استخدام
                                                    المفاهيم البرمجية فيها.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseTwo"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Hassan Fulaih</span></h3>
                                                    <a
                                                        href="https://www.youtube.com/playlist?list=PLDw4Ldr2k_qIwhtJTBFO6DffM7l06pPZg"
                                                        >CLICK HERE</a
                                                    >
                                                    <h3>قناة <span>Asem Saafan</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLMDrOnfT8EAj6Yjdki9OCLSwqdBs4xhQz"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseTwo"
                                                    aria-expanded="true"
                                                    aria-controls="collapseTwo">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course Dart -->
                                <!-- START card course Flutter -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>3</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img
                                                    src="<?php echo $img_path?>courses-images/flutter.png"
                                                    alt="Flutter" />
                                                <h3>Flutter</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على إطار العمل Flutter وعلى أهم
                                                    مميزاته.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseThree"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Asem Saafan</span></h3>
                                                    <a
                                                        href="https://www.youtube.com/watch?v=hCDX5ttbxnw&list=PLMDrOnfT8EAhsiJwkzspHp_Ob6oRCHxv0"
                                                        >CLICK HERE</a
                                                    >
                                                    <h3>قناة <span>freeCodeCamp.org</span></h3>
                                                    <a
                                                        href="https://www.classcentral.com/classroom/freecodecamp-flutter-course-for-beginners-37-hour-cross-platform-app-development-tutorial-104327"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseThree"
                                                    aria-expanded="true"
                                                    aria-controls="collapseThree">
                                                    <span class="text"> عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course Flutter -->
                                <!-- START card course Firebase -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>4</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img
                                                    src="<?php echo $img_path?>courses-images/firebase.png"
                                                    alt="Firebase" />
                                                <h3>Firebase</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذه الدورة علي firebase وهي منصة تطوير تطبيقات
                                                    الهواتف المحمولة والويب توفر مجموعة أدوات وخدمات لبناء
                                                    تطبيقات قابلة للتوسع بسرعة و تشمل خدمات مثل hosting,
                                                    authentication, and cloud messaging
                                                </p>
                                            </div>
                                            <div
                                                id="collapseFour"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Omar Ahmed</span></h3>
                                                    <a
                                                        href="https://www.youtube.com/playlist?list=PLwWuxCLlF_ucmA5Yq_2u6N9WrDOLWlxh7"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseFour"
                                                    aria-expanded="true"
                                                    aria-controls="collapseFour">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course Firebase -->

                                <!-- START card course GIT -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>5</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/git.png" alt="Git" />
                                                <h3>Git</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات مفهوم Git، وأنظمة التحكم
                                                    بالنسخ وأنواعها، وإلى أي نوع من أنواع أنظمة التحكم بالنسخ
                                                    ينتمي Git، بالإضافة إلى طريقة التعامل معه على المستوى
                                                    الفردي.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseFive"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAw4eOj58MZPakHjaO3frVMF"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseFive"
                                                    aria-expanded="true"
                                                    aria-controls="collapseFive">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course GIT -->
                                <!-- START card course UI -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>6</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/UI-UX.png" alt="UI/UX" />
                                                <h3>UI/UX</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>سنتعرف في هذهِ الدورة على أساسيات واجه المستخدم.</p>
                                            </div>
                                            <div
                                                id="collapseNine"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Alaa Darwish</span></h3>
                                                    <a
                                                        href="https://www.youtube.com/watch?v=EqSd8vXGcBk&list=PLRemWV5koZLBR1khj5OlC_xLkdsI8G5DF"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseNine"
                                                    aria-expanded="true"
                                                    aria-controls="collapseNine">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course UI -->
                            </div>
                        </div>
                    </div>
                    <!-- ##################### end path-contents ########################################### -->
                </div>
        <?php
        }elseif($course == "Android"){?>
            <!-- // if the $course = Android show the Android course -->
                <div class="course-road-map">
                    <!-- ##################### start header ########################################### -->
                    <header style="background: rgb(180, 165, 17)">
                        <div class="head container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="left">
                                        <img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="right">
                                        <small>مسار تعليمي</small>
                                        <h3>تطوير تطبيقات Android</h3>
                                        <p>
                                            سيأخذك هذا المسار في رحلة تتعلم من خلالها تطوير تطبيقات
                                            Android، حيث تبدأ رحلتك بتعلّم أساسيات البرمجة بلغة Kotlin
                                            مرورًا بمجموعة من المفاهيم التي تحتاجها في تطوير التطبيقات
                                            باستخدام Android Studio.
                                        </p>
                                        <button id="btn">
                                            <a href="#path-contents" style="color: #fff; text-decoration: none"
                                                >هيا نبدأ</a
                                            >
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- ##################### end header ########################################### -->
                    <!-- ##################### start section ########################################### -->
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h3>بعد تعلمك لهذا المسار ستصبح قادراً على</h3>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>اكتساب أهم المهارات التي يحتاجها مطوّري تطبيقات Android.</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>القدرة على دخول سوق العمل كمطور تطبيقات Android.</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="info d-flex align-items-center justify-content-end">
                                        <p>فهم أساسيات البرمجة باستخدام لغة Kotlin.</p>
                                        <i class="fas fa-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ##################### end section ########################################### -->
                    <!-- ##################### start path-contents ########################################### -->
                    <div class="path-contents" id="path-contents">
                        <div class="container">
                            <h3>محتويات المسار</h3>
                            <div class="row">
                                <!-- START card course Android Studio COURSE -->
                                <div class="col-12">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>1</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img
                                                    src="<?php echo $img_path?>courses-images/Android Studio.png"
                                                    alt="Android Studio" />
                                                <h3>Android Studio COURSE</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات Android Studio COURSE.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseOne"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>TheNewBaghdad</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLF8OvnCBlEY3e0Yg990aAXreEru72_xWN"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseOne"
                                                    aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course Android Studio COURSE -->
                                <!-- START card course kotlin -->
                                <div class="col-12">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>2</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/kotlin.png" alt="kotlin" />
                                                <h3>Kotlin</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذه الدورة علي اساسيات لغة kotlin حيث سنستخدم
                                                    مكتبات جافا لانشاء وتطوير تطبيقات الأندرود و تطبيقات الويب
                                                </p>
                                            </div>
                                            <div
                                                id="collapseOne"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>TheNewBaghdad</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLF8OvnCBlEY2w-zdVPozupapiKzLzpyUZ"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseOne"
                                                    aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course kotlin -->
                                <!-- START card course SQL -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>3</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/sql.png" alt="sql" />
                                                <h3>SQL</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات SQL في التعامل مع قواعد
                                                    البيانات وإدارة محتوياتها من تخزين البيانات، وعرضها،
                                                    والتعديل عليها، وكذلك حذفها.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseSix"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Wael abo hamza</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PL93xoMrxRJIuicqcd1UpFUYMfWKGp7JmI"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseSix"
                                                    aria-expanded="true"
                                                    aria-controls="collapseSix">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course SQL -->
                                                        <!-- START card course JetPack Compose -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>4</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img
                                                    src="<?php echo $img_path?>courses-images/css.png"
                                                    alt="JetPack Compose" />
                                                <h3>JetPack Compose</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على مفهوم CSS وكيفية إضافته إلى ملف
                                                    HTML لتنسيق صفحات الويب، كما سنتعرف على كيفية التحكم
                                                    بألوان العناصر وأحجامها.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseTwo"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Mohamed Tamer</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLStwsNXljjnH1QU4jMXqpJt8SzlrBAXXC"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseTwo"
                                                    aria-expanded="true"
                                                    aria-controls="collapseTwo">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course JetPack Compose -->
                                <!-- START card course Firebase -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>5</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img
                                                    src="<?php echo $img_path?>courses-images/firebase.png"
                                                    alt="Firebase" />
                                                <h3>Firebase</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذه الدورة علي firebase وهي منصة تطوير تطبيقات
                                                    الهواتف المحمولة والويب توفر مجموعة أدوات وخدمات لبناء
                                                    تطبيقات قابلة للتوسع بسرعة و تشمل خدمات مثل hosting,
                                                    authentication, and cloud messaging
                                                </p>
                                            </div>
                                            <div
                                                id="collapseFour"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Omar Ahmed</span></h3>
                                                    <a
                                                        href="https://www.youtube.com/playlist?list=PLwWuxCLlF_ucmA5Yq_2u6N9WrDOLWlxh7"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseFour"
                                                    aria-expanded="true"
                                                    aria-controls="collapseFour">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course Firebase -->

                                <!-- START card course GIT -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>6</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/git.png" alt="Git" />
                                                <h3>Git</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>
                                                    سنتعرف في هذهِ الدورة على أساسيات مفهوم Git، وأنظمة التحكم
                                                    بالنسخ وأنواعها، وإلى أي نوع من أنواع أنظمة التحكم بالنسخ
                                                    ينتمي Git، بالإضافة إلى طريقة التعامل معه على المستوى
                                                    الفردي.
                                                </p>
                                            </div>
                                            <div
                                                id="collapseFive"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Elzero Web School</span></h3>
                                                    <a
                                                        href="https://youtube.com/playlist?list=PLDoPjvoNmBAw4eOj58MZPakHjaO3frVMF"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseFive"
                                                    aria-expanded="true"
                                                    aria-controls="collapseFive">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course GIT -->
                                <!-- START card course UI -->
                                <div class="col-12 mt-4">
                                    <div class="accordion info" id="accordionExample">
                                        <div
                                            class="number d-flex align-items-center justify-content-center">
                                            <span>7</span>
                                        </div>
                                        <div class="information">
                                            <div class="icon d-flex align-items-center">
                                                <img src="<?php echo $img_path?>courses-images/UI-UX.png" alt="UI/UX" />
                                                <h3>UI/UX</h3>
                                            </div>
                                            <div class="text text-right">
                                                <p>سنتعرف في هذهِ الدورة على أساسيات واجه المستخدم.</p>
                                            </div>
                                            <div
                                                id="collapseNine"
                                                class="collapse links mt-3"
                                                aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <h3>الروابط :</h3>
                                                <div class="link">
                                                    <h3>قناة <span>Alaa Darwish</span></h3>
                                                    <a
                                                        href="https://www.youtube.com/watch?v=EqSd8vXGcBk&list=PLRemWV5koZLBR1khj5OlC_xLkdsI8G5DF"
                                                        >CLICK HERE</a
                                                    >
                                                </div>
                                            </div>
                                            <div class="butt d-flex justify-content-end mt-2">
                                                <button
                                                    class="more"
                                                    type="button"
                                                    data-toggle="collapse"
                                                    data-target="#collapseNine"
                                                    aria-expanded="true"
                                                    aria-controls="collapseNine">
                                                    <span class="text">عرض المزيد</span>
                                                    <i class="fas fa-chevron-down icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End card course UI -->
                            </div>
                        </div>
                    </div>
                    <!-- ##################### end path-contents ########################################### -->
                </div>
        <?php
        }elseif($course == "AI"){?>
            <!-- // if the $course = AI show the AI course -->
            <div class="course-road-map">
                <!-- ##################### start header ########################################### -->
                <header style="background-color: rgb(127, 184, 52)">
                    <div class="head container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="left">
                                    <img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="right">
                                    <small>مسار تعليمي</small>
                                    <h3>AI</h3>
                                    <p>
                                        الذكاء الاصطناعي (الذكاء الاصطناعي) هو قدرة الكمبيوتر أو
                                        الروبوت الذي يتحكم فيه الكمبيوتر على القيام بالمهام التي يقوم
                                        بها البشر عادة لأنها تتطلب ذكاء بشريا وتمييزا. على الرغم من
                                        عدم وجود أنظمة ذكاء اصطناعي يمكنها أداء مجموعة متنوعة من
                                        المهام التي يمكن للإنسان العادي القيام بها ، إلا أن بعض الذكاء
                                        الاصطناعي يمكن أن يطابق البشر في مهام محددة.
                                    </p>
                                    <button id="btn">
                                        <a
                                            href="#path-contents"
                                            style="color: #fff; text-decoration: none"
                                            >هيا نبدأ</a
                                        >
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- ##################### end header ########################################### -->
                <!-- ##################### start section ########################################### -->
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3>بعد تعلمك لهذا المسار ستصبح قادراً على</h3>
                                <div class="info d-flex align-items-center justify-content-end">
                                    <p>فهم أساسيات البرمجة باستخدام لغة Python</p>
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="info d-flex align-items-center justify-content-end">
                                    <p>استخدام الذكاء الاصطناعي في تحليل البيانات</p>
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="info d-flex align-items-center justify-content-end">
                                    <p>تطوير البرامج المبينة علي الذكاء الاصطناعي</p>
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ##################### end section ########################################### -->
                <!-- ##################### start path-contents ########################################### -->
                <div class="path-contents" id="path-contents">
                    <div class="container">
                        <h3>محتويات المسار</h3>
                        <div class="row">
                            <!-- START card LINEAR ALGEBRA -->
                            <div class="col-12 mt-4">
                                <div class="accordion info" id="accordionExample">
                                    <div
                                        class="number d-flex align-items-center justify-content-center">
                                        <span>1</span>
                                    </div>
                                    <div class="information">
                                        <div class="icon d-flex align-items-center">
                                            <img
                                                src="<?php echo $img_path?>courses-images/linear algebra.png"
                                                alt="LINEAR ALGEBRA" />
                                            <h3>Linear ALGabra</h3>
                                        </div>
                                        <div class="text text-right">
                                            <p>
                                                سنتعرف في هذه الدورة علي الجبر الخطي و طريقه حل الفضاءات
                                                المتجهية (أَو الفضاءات الخطية) والتحويلات الخطية والنظم
                                                الخطية
                                            </p>
                                        </div>
                                        <div
                                            id="collapseSeven"
                                            class="collapse links mt-3"
                                            aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <h3>الروابط :</h3>
                                            <div class="link">
                                                <h3>قناة <span>Elgohary AI</span></h3>
                                                <a
                                                    href="https://www.youtube.com/playlist?list=PLtsZ69x5q-X_mtZI2heqry-nw3-6apBqm"
                                                    >CLICK HERE</a
                                                >
                                            </div>
                                        </div>
                                        <div class="butt d-flex justify-content-end mt-2">
                                            <button
                                                class="more"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseSeven"
                                                aria-expanded="true"
                                                aria-controls="collapseSeven">
                                                <span class="text">عرض المزيد</span>
                                                <i class="fas fa-chevron-down icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End card course LINEAR ALGEBRA -->
                            <!-- START card course Calculus -->
                            <div class="col-12">
                                <div class="accordion info" id="accordionExample">
                                    <div
                                        class="number d-flex align-items-center justify-content-center">
                                        <span>2</span>
                                    </div>
                                    <div class="information">
                                        <div class="icon d-flex align-items-center">
                                            <img
                                                src="<?php echo $img_path?>courses-images/Calculus.png"
                                                alt="Calculus" />
                                            <h3>Calculus</h3>
                                        </div>
                                        <div class="text text-right">
                                            <p>
                                                سنتعرف في هذهِ الدورة على أساسيات Calculus وعلى طريقة
                                                استخدامها في إنشاء صفحات الويب.
                                            </p>
                                        </div>
                                        <div
                                            id="collapseOne"
                                            class="collapse links mt-3"
                                            aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <h3>الروابط :</h3>
                                            <div class="link">
                                                <h3>قناة <span>Abdelrazek Dawood</span></h3>
                                                <a
                                                    href="https://www.youtube.com/playlist?list=PLOhKtRFpu3j7PUfqX_G3nRF5hdy1ilQCO"
                                                    >CLICK HERE</a
                                                >
                                            </div>
                                        </div>
                                        <div class="butt d-flex justify-content-end mt-2">
                                            <button
                                                class="more"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseOne"
                                                aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <span class="text">عرض المزيد</span>
                                                <i class="fas fa-chevron-down icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End card course Calculus -->

                            <!-- START card course Statistics and Probability -->
                            <div class="col-12 mt-4">
                                <div class="accordion info" id="accordionExample">
                                    <div
                                        class="number d-flex align-items-center justify-content-center">
                                        <span>3</span>
                                    </div>
                                    <div class="information">
                                        <div class="icon d-flex align-items-center">
                                            <img
                                                src="<?php echo $img_path?>courses-images/Statistics and Probability.png"
                                                alt="Statistics and Probability" />
                                            <h3>Statistics and Probability</h3>
                                        </div>
                                        <div class="text text-right">
                                            <p>
                                                سنتعرف في هذه الدوره عل دراسة الاحصاء و الاحتمالات و
                                                علاقتخا بالذكاء الاصطناعي
                                            </p>
                                        </div>
                                        <div
                                            id="collapseTwo"
                                            class="collapse links mt-3"
                                            aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <h3>الروابط :</h3>
                                            <div class="link">
                                                <h3>قناة <span>Professor X</span></h3>
                                                <a
                                                    href="https://www.youtube.com/playlist?list=PLVpJGVBmPnw3eRSzC90oXA6gBcG-nEYIe"
                                                    >CLICK HERE</a
                                                >
                                            </div>
                                        </div>
                                        <div class="butt d-flex justify-content-end mt-2">
                                            <button
                                                class="more"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseTwo"
                                                aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                <span class="text">عرض المزيد</span>
                                                <i class="fas fa-chevron-down icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End card course Statistics and Probability -->
                            <!-- START card course Python -->
                            <div class="col-12 mt-4">
                                <div class="accordion info" id="accordionExample">
                                    <div
                                        class="number d-flex align-items-center justify-content-center">
                                        <span>4</span>
                                    </div>
                                    <div class="information">
                                        <div class="icon d-flex align-items-center">
                                            <img src="<?php echo $img_path?>courses-images/Python.png" alt="Python" />
                                            <h3>Python</h3>
                                        </div>
                                        <div class="text text-right">
                                            <p>
                                                سنتعرف في هذهِ الدورة على أساسيات لغة Python، حيث نقوم
                                                بداية بتجهيز بيئة العمل ثم التعرف على طريقة تخزين البيانات
                                                والتعامل مع أنواع البيانات المختلفة وتنفيذ العمليات
                                                والأوامر البسيطة عليها مثل الجُمل الشرطيّة، عمليات التكرار
                                                والتعامل مع الدوال.
                                            </p>
                                        </div>
                                        <div
                                            id="collapseSeven"
                                            class="collapse links mt-3"
                                            aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <h3>الروابط :</h3>
                                            <div class="link">
                                                <h3>قناة <span>Codezilla</span></h3>
                                                <a
                                                    href="https://youtube.com/playlist?list=PLuXY3ddo_8nzrO74UeZQVZOb5-wIS6krJ"
                                                    >CLICK HERE</a
                                                >
                                                <h3>قناة <span>Elzero Web School</span></h3>
                                                <a
                                                    href="https://youtube.com/playlist?list=PLDoPjvoNmBAyE_gei5d18qkfIe-Z8mocs"
                                                    >CLICK HERE</a
                                                >
                                            </div>
                                        </div>
                                        <div class="butt d-flex justify-content-end mt-2">
                                            <button
                                                class="more"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseSeven"
                                                aria-expanded="true"
                                                aria-controls="collapseSeven">
                                                <span class="text">عرض المزيد</span>
                                                <i class="fas fa-chevron-down icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End card course Python -->
                            <!-- START card course SQL -->
                            <div class="col-12 mt-4">
                                <div class="accordion info" id="accordionExample">
                                    <div
                                        class="number d-flex align-items-center justify-content-center">
                                        <span>5</span>
                                    </div>
                                    <div class="information">
                                        <div class="icon d-flex align-items-center">
                                            <img src="<?php echo $img_path?>courses-images/sql.png" alt="sql" />
                                            <h3>SQL</h3>
                                        </div>
                                        <div class="text text-right">
                                            <p>
                                                سنتعرف في هذهِ الدورة على أساسيات SQL في التعامل مع قواعد
                                                البيانات وإدارة محتوياتها من تخزين البيانات، وعرضها،
                                                والتعديل عليها، وكذلك حذفها.
                                            </p>
                                        </div>
                                        <div
                                            id="collapseSix"
                                            class="collapse links mt-3"
                                            aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <h3>الروابط :</h3>
                                            <div class="link">
                                                <h3>قناة <span>Wael abo hamza</span></h3>
                                                <a
                                                    href="https://youtube.com/playlist?list=PL93xoMrxRJIuicqcd1UpFUYMfWKGp7JmI"
                                                    >CLICK HERE</a
                                                >
                                            </div>
                                        </div>
                                        <div class="butt d-flex justify-content-end mt-2">
                                            <button
                                                class="more"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseSix"
                                                aria-expanded="true"
                                                aria-controls="collapseSix">
                                                <span class="text">عرض المزيد</span>
                                                <i class="fas fa-chevron-down icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End card course SQL -->
                            <!-- START card course machine learning -->
                            <div class="col-12 mt-4">
                                <div class="accordion info" id="accordionExample">
                                    <div
                                        class="number d-flex align-items-center justify-content-center">
                                        <span>6</span>
                                    </div>
                                    <div class="information">
                                        <div class="icon d-flex align-items-center">
                                            <img
                                                src="<?php echo $img_path?>courses-images/machine learning.png"
                                                alt="machine learning5" />
                                            <h3>Machine Learning</h3>
                                        </div>
                                        <div class="text text-right">
                                            <p>
                                                سنتعرف في هذه الدورة علي عِلم تطوير الخوارزميات والنماذج
                                                الإحصائية التي تستخدمها أنظمة الحاسوب لأداء المهام بدون
                                                تعليمات واضحة، اعتمادًا على الأنماط والاستدلال
                                            </p>
                                        </div>
                                        <div
                                            id="collapseThree"
                                            class="collapse links mt-3"
                                            aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <h3>الروابط :</h3>
                                            <div class="link">
                                                <h3>قناة <span>Farisology</span></h3>
                                                <a
                                                    href="https://www.youtube.com/playlist?list=PLH2enzYTUDTuWsXCqwBzfDC3sLn39QxEN"
                                                    >CLICK HERE</a
                                                >
                                            </div>
                                        </div>
                                        <div class="butt d-flex justify-content-end mt-2">
                                            <button
                                                class="more"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseThree"
                                                aria-expanded="true"
                                                aria-controls="collapseThree">
                                                <span class="text">عرض المزيد</span>

                                                <i class="fas fa-chevron-down icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End card course machine learning -->

                            <!-- START card course deep learning -->
                            <div class="col-12 mt-4">
                                <div class="accordion info" id="accordionExample">
                                    <div
                                        class="number d-flex align-items-center justify-content-center">
                                        <span>7</span>
                                    </div>
                                    <div class="information">
                                        <div class="icon d-flex align-items-center">
                                            <img
                                                src="<?php echo $img_path?>courses-images/deep learning.png"
                                                alt="deep learning" />
                                            <h3>Deep Learning</h3>
                                        </div>
                                        <div class="text text-right">
                                            <p>
                                                سنتعرف في هذه الدورة علي أجهزة الكمبيوتر و معالجة البيانات
                                                بطريقة مستوحاة من الدماغ البشري
                                            </p>
                                        </div>
                                        <div
                                            id="collapseFour"
                                            class="collapse links mt-3"
                                            aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <h3>الروابط :</h3>
                                            <div class="link">
                                                <h3>قناة <span>Hesham Asem</span></h3>
                                                <a
                                                    href="https://www.youtube.com/playlist?list=PL6-3IRz2XF5UiBoBDgeu5T3TyOIrgQ3r9"
                                                    >CLICK HERE</a
                                                >
                                            </div>
                                        </div>
                                        <div class="butt d-flex justify-content-end mt-2">
                                            <button
                                                class="more"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseFour"
                                                aria-expanded="true"
                                                aria-controls="collapseFour">
                                                <span class="text">عرض المزيد</span>
                                                <i class="fas fa-chevron-down icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End card course deep learning -->
                        </div>
                    </div>
                </div>
                <!-- ##################### end path-contents ########################################### -->
            </div>
        <?php
        }elseif($course == "Data-Science"){?>
            <!-- // if the $course = AI show the AI course -->
            <div class="course-road-map">
                <!-- ##################### start header ########################################### -->
                <header style="background-color: rgb(10, 136, 58)">
                    <div class="head container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="left">
                                    <img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="right">
                                    <small>مسار تعليمي</small>
                                    <h3>Data Science</h3>
                                    <p>
                                        يجمع علم البيانات بين الرياضيات والإحصاء والبرمجة المتخصصة
                                        والتحليلات المتقدمة والذكاء الاصطناعي (الذكاء الاصطناعي)
                                        والتعلم الآلي مع خبرة موضوعية محددة للكشف عن رؤى قابلة للتنفيذ
                                        مخبأة في بيانات المؤسسة. يمكن استخدام هذه الأفكار لتوجيه عملية
                                        صنع القرار والتخطيط الاستراتيجي.
                                    </p>
                                    <button id="btn">
                                        <a
                                            href="#path-contents"
                                            style="color: #fff; text-decoration: none"
                                            >هيا نبدأ</a
                                        >
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- ##################### end header ########################################### -->
                <!-- ##################### start section ########################################### -->
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3>بعد تعلمك لهذا المسار ستصبح قادراً على</h3>
                                <div class="info d-flex align-items-center justify-content-end">
                                    <p>قياس جوده أداء الخوارزميات وتحسين نتائجها</p>
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="info d-flex align-items-center justify-content-end">
                                    <p>التنبؤ بقيم معينه بناءً على بيانات قديمة </p>
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="info d-flex align-items-center justify-content-end">
                                    <p> وتحليل البيانات الخاصة</p>
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ##################### end section ########################################### -->
                <!-- ##################### start path-contents ########################################### -->
                <div class="path-contents" id="path-contents">
                    <div class="container">
                        <h3>محتويات المسار</h3>
                        <div class="row">
                            <!-- START card Xamarin forms course -->
                            <div class="col-12 mt-4">
                                <div class="accordion info" id="accordionExample">
                                    <div
                                        class="number d-flex align-items-center justify-content-center">
                                        <span>1</span>
                                    </div>
                                    <div class="information">
                                        <div class="icon d-flex align-items-center">
                                            <img
                                                src="<?php echo $img_path?>courses-images/Xamarin forms.png"
                                                alt="Xamarin forms course" />
                                            <h3>Xamarin forms course</h3>
                                        </div>
                                        <div class="text text-right">
                                            <p>
                                                سنتعرف في هذه الدوره علي تقنية للبرمجة على عدة أنظمة
                                                التشغيل بلغة برمجة واحدة، تتوفر في لغة سي شارب #c وشركة
                                                برمجيات زامارين تملكها مايكروسوفت.
                                            </p>
                                        </div>
                                        <div
                                            id="collapseSeven"
                                            class="collapse links mt-3"
                                            aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <h3>الروابط :</h3>
                                            <div class="link">
                                                <h3>قناة <span>Xamarin Forms</span></h3>
                                                <a
                                                    href="https://www.youtube.com/playlist?list=PL-MJct5Tahbmh-AXiRE1rCRhyATSXqzcD"
                                                    >CLICK HERE</a
                                                >
                                            </div>
                                        </div>
                                        <div class="butt d-flex justify-content-end mt-2">
                                            <button
                                                class="more"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseSeven"
                                                aria-expanded="true"
                                                aria-controls="collapseSeven">
                                                <span class="text">عرض المزيد</span>
                                                <i class="fas fa-chevron-down icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End card course Xamarin forms course -->
                            <!-- START card course asp.net mvc course -->
                            <div class="col-12">
                                <div class="accordion info" id="accordionExample">
                                    <div
                                        class="number d-flex align-items-center justify-content-center">
                                        <span>2</span>
                                    </div>
                                    <div class="information">
                                        <div class="icon d-flex align-items-center">
                                            <img
                                                src="<?php echo $img_path?>courses-images/asp.net.png"
                                                alt="asp.net mvc course" />
                                            <h3>asp.net mvc course</h3>
                                        </div>
                                        <div class="text text-right">
                                            <p>
                                                سنتعرف في هذه الدورة علي طار لتطبيقات الويب تم تطويره
                                                وتسويقه من خلال شركة مايكروسوفت، من أجل إعطاء القدرة
                                                للمبرمجين على بناء مواقع ويب ديناميكية، تطبيقات ويب وخدمات
                                                ويب
                                            </p>
                                        </div>
                                        <div
                                            id="collapseOne"
                                            class="collapse links mt-3"
                                            aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <h3>الروابط :</h3>
                                            <div class="link">
                                                <h3>قناة <span>Mohamed Ebrahim Saad</span></h3>
                                                <a
                                                    href="https://www.youtube.com/playlist?list=PLZyQU-WOzZF3gU6j9hi2bz3NhV6KOw9Jo"
                                                    >CLICK HERE</a
                                                >
                                            </div>
                                        </div>
                                        <div class="butt d-flex justify-content-end mt-2">
                                            <button
                                                class="more"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseOne"
                                                aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <span class="text">عرض المزيد</span>
                                                <i class="fas fa-chevron-down icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End card course asp.net mvc course -->

                            <!-- START card course C++ -->
                            <div class="col-12 mt-4">
                                <div class="accordion info" id="accordionExample">
                                    <div
                                        class="number d-flex align-items-center justify-content-center">
                                        <span>3</span>
                                    </div>
                                    <div class="information">
                                        <div class="icon d-flex align-items-center">
                                            <img src="<?php echo $img_path?>courses-images/C++.png" alt="C++" />
                                            <h3>C++</h3>
                                        </div>
                                        <div class="text text-right">
                                            <p>
                                                سنتعرف في هذه الدورة علي مبادئ لغه البرمجة c++ و البرمجه
                                                الشيئية و هياكل البيانات
                                            </p>
                                        </div>
                                        <div
                                            id="collapseTwo"
                                            class="collapse links mt-3"
                                            aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <h3>الروابط :</h3>
                                            <div class="link">
                                                <h3>قناة <span>Elzero Web School</span></h3>
                                                <a
                                                    href="https://www.youtube.com/playlist?list=PLDoPjvoNmBAwy-rS6WKudwVeb_x63EzgS"
                                                    >CLICK HERE</a
                                                >
                                            </div>
                                        </div>
                                        <div class="butt d-flex justify-content-end mt-2">
                                            <button
                                                class="more"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseTwo"
                                                aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                <span class="text">عرض المزيد</span>
                                                <i class="fas fa-chevron-down icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End card course C++ -->
                        </div>
                    </div>
                </div>
                <!-- ##################### end path-contents ########################################### -->
            </div>
        <?php
        }elseif($course == "Cyber-Security"){?>
            <!-- // if the $course = AI show the AI course -->
            <div class="course-road-map">
                <!-- ##################### start header ########################################### -->
                <header style="background-color: rgb(4, 85, 51)">
                    <div class="head container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="left">
                                    <img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="right">
                                    <small>مسار تعليمي</small>
                                    <h3>cyber security</h3>
                                    <p>
                                        الأمن السيبراني هو ممارسة حماية الأنظمة الحيوية والمعلومات
                                        الحساسة من الهجمات الرقمية. تعرف تدابير الأمن السيبراني أيضا
                                        باسم أمن تكنولوجيا المعلومات (IT) ، وهي مصممة لمكافحة
                                        التهديدات ضد الأنظمة والتطبيقات الشبكية ، سواء كانت هذه
                                        التهديدات تنشأ من داخل المؤسسة أو خارجها.
                                    </p>
                                    <button id="btn">
                                        <a
                                            href="#path-contents"
                                            style="color: #fff; text-decoration: none"
                                            >هيا نبدأ</a
                                        >
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- ##################### end header ########################################### -->
                <!-- ##################### start section ########################################### -->
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3>بعد تعلمك لهذا المسار ستصبح قادراً على</h3>
                                <div class="info d-flex align-items-center justify-content-end">
                                    <p>حماية الأنظمة وأجهزة معالجة المعلومات</p>
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="info d-flex align-items-center justify-content-end">
                                    <p>إدارة أمن الشبكات</p>
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="info d-flex align-items-center justify-content-end">
                                    <p>التداول والدردشة وتصفح الإنترنت بشكل موثوق </p>
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ##################### end section ########################################### -->
                <!-- ##################### start path-contents ########################################### -->
                <div class="path-contents" id="path-contents">
                    <div class="container">
                        <h3>محتويات المسار</h3>
                        <div class="row">
                            <!-- START card course network -->
                            <div class="col-12">
                                <div class="accordion info" id="accordionExample">
                                    <div
                                        class="number d-flex align-items-center justify-content-center">
                                        <span>1</span>
                                    </div>
                                    <div class="information">
                                        <div class="icon d-flex align-items-center">
                                            <img
                                                src="<?php echo $img_path?>courses-images/network.png"
                                                alt="Network" />
                                            <h3>Learn Basics for Network</h3>
                                        </div>
                                        <div class="text text-right">
                                            <p>
                                                سنتعرف في هذه الدورة علي دراسه الشبكات المعقدة مثل شبكات
                                                الاتصالات وشبكات الحاسوب والشبكات البيولوجية والشبكات
                                                المعرفية والدلالية والشبكات الاجتماعية، مع الأخذ في
                                                الاعتبار العناصر أو الجهات الفاعلة المتميزة التي تمثلها
                                                العقد والصلات بين العناصر أو الجهات الفاعلة كروابط
                                            </p>
                                        </div>
                                        <div
                                            id="collapseOne"
                                            class="collapse links mt-3"
                                            aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <h3>الروابط :</h3>
                                            <div class="link">
                                                <h3>قناة <span>احمد الحفني</span></h3>
                                                <a
                                                    href="https://www.youtube.com/playlist?list=PLpwHU9rNXAVurp2h2Jh-cd4-8XjkT5osu"
                                                    >CLICK HERE</a
                                                >
                                            </div>
                                        </div>
                                        <div class="butt d-flex justify-content-end mt-2">
                                            <button
                                                class="more"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseOne"
                                                aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <span class="text">عرض المزيد</span>
                                                <i class="fas fa-chevron-down icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End card course network -->

                            <!-- START card course linux (kali) -->
                            <div class="col-12 mt-4">
                                <div class="accordion info" id="accordionExample">
                                    <div
                                        class="number d-flex align-items-center justify-content-center">
                                        <span>2</span>
                                    </div>
                                    <div class="information">
                                        <div class="icon d-flex align-items-center">
                                            <img
                                                src="<?php echo $img_path?>courses-images/Kali-linuxicon.svg.png"
                                                alt="Linux (kali)" />
                                            <h3>Linux (kali)</h3>
                                        </div>
                                        <div class="text text-right">
                                            <p>
                                                سنتعرف في هذه الدوره علي ما هو نظام لينكس و اهميته بالنسبه
                                                لهذا المجال
                                            </p>
                                        </div>
                                        <div
                                            id="collapseTwo"
                                            class="collapse links mt-3"
                                            aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <h3>الروابط :</h3>
                                            <div class="link">
                                                <h3>قناة <span>Linuxtopia</span></h3>
                                                <a
                                                    href="https://www.youtube.com/playlist?list=PLAZ__zcDB1IaNaVNOckNpgEpjghSHr8Gg"
                                                    >CLICK HERE</a
                                                >
                                            </div>
                                        </div>
                                        <div class="butt d-flex justify-content-end mt-2">
                                            <button
                                                class="more"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseTwo"
                                                aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                <span class="text">عرض المزيد</span>
                                                <i class="fas fa-chevron-down icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End card course linux (kali) -->
                            <!-- START card course ethical hacking -->
                            <div class="col-12 mt-4">
                                <div class="accordion info" id="accordionExample">
                                    <div
                                        class="number d-flex align-items-center justify-content-center">
                                        <span>3</span>
                                    </div>
                                    <div class="information">
                                        <div class="icon d-flex align-items-center">
                                            <img
                                                src="<?php echo $img_path?>courses-images/ethical hacking.png"
                                                alt="Ethical Hacking" />
                                            <h3>Ethical Hacking</h3>
                                        </div>
                                        <div class="text text-right">
                                            <p>
                                                سنتعرف في هذه الدوره علي إبراز المعرفة بتقييم معايير أمنية
                                                في أنظمة الحاسب وذلك من عبر البحث عن نقاط الضعف والثغرات
                                                الأمنية المتواجدة في الأنظمة المستهدفة. يتم استخدام نفس
                                                المعرفة والأدوات التي يستخدمها المتسلل أو المخترق الخبيث
                                                (الغير أخلاقي)، ولكن هنا تتم ممارسة الاختراق بطريقة
                                                قانونية ومشروعة لتقييم الموقف الأمني للنظام المستهدف
                                            </p>
                                        </div>
                                        <div
                                            id="collapseThree"
                                            class="collapse links mt-3"
                                            aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <h3>الروابط :</h3>
                                            <div class="link">
                                                <h3>قناة <span>ياسر رمزي</span></h3>
                                                <a
                                                    href="https://www.youtube.com/playlist?list=PLCIJjtzQPZJ-gm80_z7Svq4UlJSbOKdM4"
                                                    >CLICK HERE</a
                                                >
                                                <h3>قناة <span>احمد سيد</span></h3>
                                                <a
                                                    href="https://www.youtube.com/playlist?list=PLCecIlPD9Hi6QhbUcInStu4roKGvP0Oul"
                                                    >CLICK HERE</a
                                                >
                                            </div>
                                        </div>
                                        <div class="butt d-flex justify-content-end mt-2">
                                            <button
                                                class="more"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseThree"
                                                aria-expanded="true"
                                                aria-controls="collapseThree">
                                                <span class="text">عرض المزيد</span>
                                                <i class="fas fa-chevron-down icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End card course ethical hacking -->

                            <!-- START card course threat intelligence -->
                            <div class="col-12 mt-4">
                                <div class="accordion info" id="accordionExample">
                                    <div
                                        class="number d-flex align-items-center justify-content-center">
                                        <span>4</span>
                                    </div>
                                    <div class="information">
                                        <div class="icon d-flex align-items-center">
                                            <img
                                                src="<?php echo $img_path?>courses-images/threat intelligence.png"
                                                alt="Threat Intelligence" />
                                            <h3>Threat Intelligence</h3>
                                        </div>
                                        <div class="text text-right">
                                            <p>
                                                سنتعرف في هذه الدورة علي معرفة واسئل او طرق الضغط و
                                                التهدايات التي تواجه اي متصل بالانترنت
                                            </p>
                                        </div>
                                        <div
                                            id="collapseFour"
                                            class="collapse links mt-3"
                                            aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <h3>الروابط :</h3>
                                            <div class="link">
                                                <h3>قناة <span>تكناوي دوت نيت</span></h3>
                                                <a
                                                    href=" https://www.youtube.com/live/Marqx7z-vyQ?feature=share"
                                                    >CLICK HERE</a
                                                >
                                            </div>
                                        </div>
                                        <div class="butt d-flex justify-content-end mt-2">
                                            <button
                                                class="more"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseFour"
                                                aria-expanded="true"
                                                aria-controls="collapseFour">
                                                <span class="text">عرض المزيد</span>
                                                <i class="fas fa-chevron-down icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End card course threat intelligence -->

                            <!-- START card course inceident handling -->
                            <div class="col-12 mt-4">
                                <div class="accordion info" id="accordionExample">
                                    <div
                                        class="number d-flex align-items-center justify-content-center">
                                        <span>5</span>
                                    </div>
                                    <div class="information">
                                        <div class="icon d-flex align-items-center">
                                            <img
                                                src="<?php echo $img_path?>courses-images/inceident handling.png"
                                                alt="Inceident Handling" />
                                            <h3>Inceident Handling</h3>
                                        </div>
                                        <div class="text text-right">
                                            <p>
                                                سنتعرف في هذه الدورة علي كيفية منع التهديدات المقدمة من
                                                الهاكر
                                            </p>
                                        </div>
                                        <div
                                            id="collapseFive"
                                            class="collapse links mt-3"
                                            aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <h3>الروابط :</h3>
                                            <div class="link">
                                                <h3>قناة <span>مصطفي محمود</span></h3>
                                                <a
                                                    href="https://www.youtube.com/playlist?list=PLZwUtxcKO4zjTq8GsnUVq27zWiZ7sHOf7"
                                                    >CLICK HERE</a
                                                >
                                            </div>
                                        </div>
                                        <div class="butt d-flex justify-content-end mt-2">
                                            <button
                                                class="more"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapseFive"
                                                aria-expanded="true"
                                                aria-controls="collapseFive">
                                                <span class="text">عرض المزيد</span>
                                                <i class="fas fa-chevron-down icon"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End card course inceident handling -->
                        </div>
                    </div>
                </div>
                <!-- ##################### end path-contents ########################################### -->
            </div>
 <?php
        }else{
            header("location: courses.php");
        }
?>
<?php include $temp_path . "footer.php";
    } else {
        header("location: index.php");
    }

    ob_end_flush();