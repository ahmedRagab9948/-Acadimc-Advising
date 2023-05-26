<?php
    ob_start();
    session_start();
    if(isset($_SESSION["full_name"])){
        $getTitle = "Home page";
		$style="departments.css";
        $js="departments.js";
        include "init.php";

        $department = "";

        if(isset($_GET['department'])){
            $department = $_GET['department'];
        } else {
            $department = "";
        }


        if($department == "mathematics"){?>
            <!-- // if the $department = mathematics show the mathematics department -->
            <!-- START hero SECTION -->
                <div
                    class="hero-section"
                    style="
                        background-image: url(layout/images/departments-images/mathematicshero.jpg);
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                    ">
                    <div class="over-lay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center content">
                                <img src="<?php echo $img_path?>departments-images/mathematics-symbol.png" alt="mathematics" />
                                <h3>اهلا بيك في قسم الرياضيات</h3>
                                <p>
                                    قسم الرياضيات مسؤولاً عن تدريس المقررات الأساسية في الرياضيات
                                    وعلوم الكمبيوتر لجميع الطلاب الجامعيين والخريجين المسجلين في كليات
                                    العلوم، والتعليم والهندسة، والزراعة والصيدلة، وغيرها
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- END hero SECTION -->
            <!-- Start Main-sec -->
                <div class="department-info" id="services">
                    <div class="container">
                        <div class="card">
                            <div class="top"><h2>الرؤية</h2></div>
                            <div class="bottom">
                                <p>
                                    ييتطلع القسم إلى أن يكون رائد فى المجالين التعليمى والبحثى فى علوم
                                    الرياضيات والحاسب الألى بما يتناسب مع متطلبات سوق العمل على
                                    المستوى المحلى والأقليمى
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>الرسالة</h2></div>
                            <div class="bottom">
                                <p>
                                    يقدم القسم برامج تعليمية وبحثية متميزة لآعداد خريج متميز فى علوم
                                    الرياضيات والحاسب الألى والتى تساعد على إظهار وإمتلاك مهارات
                                    الآبداع العلمى فى المجالين التعليمى والبحثى
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>الأهداف</h2></div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        يتبني القسم رؤية الكلية والتي تتبني بدورها رؤية الجامعة وهي بناء
                                        مؤسسة تعليمية بحثية قادرة علي مواكبة واستيعاب التطور المستمر
                                        والمتواصل في العلوم الأساسية وتطبيقاتها المختلفة
                                    </li>
                                    <li>
                                        تخريج أجيال متميزة قادرة علي سوق العمل واستيعاب التكنولوجيا
                                        الحديثة
                                    </li>
                                    <li>
                                        لتطوير والتحديث المستمر للبرامج التعليميه والبحثيه لمواكبة
                                        التطور الدائم في كل انحاء العالم
                                    </li>
                                    <li>
                                        التبادل العلمي والثقافي الداخلي والخارجي من خلال المؤتمرات
                                        العلمية والسيمنارات والقنوات العلمية والإنتدابات بين الأقسام
                                        المناظرة بالجامعات
                                    </li>
                                    <li>المحافظة وتعميق غلي الأعراف الجامعية</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>أهم الخدمات</h2></div>
                            <div class="bottom">
                                <p>
                                    معمل التكنولوجيا يحتوي على العديد من اجهزة الحاسب الالي المتصلة
                                    بالانترنت
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Main-sec -->
        <?php
        }elseif($department == "zoology"){?>
            <!-- // if the $department = zoology show the zoology department -->
            <!-- START hero SECTION -->
                <div
                    class="hero-section"
                    style="
                        background-image: url(layout/images/departments-images/zoologyhero.jpg);
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                    ">
                    <div class="over-lay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center content">
                                <img src="<?php echo $img_path?>departments-images/fox.png" alt="zoology" />
                                <h3>اهلا بيك في قسم الحيوان</h3>
                                <p>
                                    علم الحيوان هو دراسة تطور الحيوانات، وسلوكها، وعلم وظائفها،
                                    وتفاعلاتها البيئية، وكيفية الحفاظ على السكان في مواجهة التغيير
                                    العالمي. أما بالنسبة لعلم الحشرات فهو دراسة الحشرات التي هي علم
                                    حياة متعدد التخصصات يساهم في فهمنا لبيئتنا ورفاهية مجتمعنا.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- END hero SECTION -->
            <!-- Start Main-sec -->
                <div class="department-info">
                    <div class="container">
                        <div class="card">
                            <div class="top"><h2>الرؤية</h2></div>
                            <div class="bottom">
                                <p>
                                    أن يكون قسم علم الحيوان ببرامجه حيوان خاص وحيوان/كيمياء من الأقسام
                                    الرائدة في مصر والشرق الأوسط، وان يكون القسم قادر على تحقيق التميز
                                    عبر إكساب خريجيه أحدث المهارات والمعارف في مجالات علم الحيوان
                                    والكيمياء من خلال تكامل التعلم النشط والذاتى والبحث العلمي ليكون
                                    إضافة متميزة في التخصص وفى خدمة الجامعة والمجتمع، كما يأمل القسم
                                    في إعداد خريج متكامل القدرات يستطيع أن يضيف الجديد لهذه الفروع
                                    والمنافسة في سوق العمل تحت جميع الظروف
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>الرسالة</h2></div>
                            <div class="bottom">
                                <p>
                                    قسم علم الحيوان هو قسم أكاديمي معترف به وطنيًا ودوليًا يقوم بإجراء
                                    البحوث وتقديم خدمة المجتمع في العلوم البيولوجية. يقدم القسم برامج
                                    متنوعة مصممة لتزويد الطلاب بمعرفة واسعة لمبادئ علم الحيوان
                                    بالاشتراك مع العلوم الأساسية الأخرى. بالإضافة إلى أنه يساهم في
                                    التنمية التعليمية، والثقافية، والاجتماعية، والاقتصادية، والمستدامة
                                    لمجتمعات صعيد مصر، وخاصة مجتمعات أسيوط والوادي الجديد
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>الأهداف</h2></div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        تنظيم المؤتمرات وحلقات العمل بشأن قضايا البيئة والتنوع البيولوجي
                                        في علم الحيوان
                                    </li>
                                    <li>وضع خطة بحث علمي مدتها 5 سنوات</li>
                                    <li>تبادل الطلاب والزيارات مع الجامعات العالمية</li>
                                    <li>إيجاد مصادر جديدة لأموال البحث</li>
                                    <li>تطويرالتعاون الوطني والدولي</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>أهم الخدمات</h2></div>
                            <div class="bottom">
                                <ul>
                                    <li>معامل القسم مجهزة بأحدث الأجهزة والأدوات</li>
                                    <li>معمل بيولوجيا الأسماك ومصايد الأسماك</li>
                                    <li>معمل الأنسجة والأجنة</li>
                                    <li>معمل الحشرات</li>
                                    <li>معمل البيئة</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Main-sec -->
        <?php
        }elseif($department == "physics"){?>
            <!-- // if the $department = physics show the physics department -->
            <!-- START hero SECTION -->
                <div
                    class="hero-section"
                    style="
                        background-image: url(layout/images/departments-images/physicshero.jpg);
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                    ">
                    <div class="over-lay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center content">
                                <img src="<?php echo $img_path?>departments-images/einstein.png" alt="physics" />
                                <h3>اهلا بيك في قسم الفيزياء</h3>
                                <p>
                                    علم الفيزياء هو القاعدة الأساسية لمختلف العلوم فهو يقدم التفاصيل
                                    العميقة لفهم كل شيء بدءاً بالجسيمات الأولية إلى النواة والذرة
                                    والجزيئات والخلايا الحية والمواد الصلبة والسائلة والغازات
                                    والبلازما والدماغ البشري والأنظمة المعقدة والغلاف الجوي والكواكب
                                    والنجوم والمجرات والكون نفسه
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
		    <!-- END hero SECTION -->
		    <!-- Start Main-sec -->
                <div class="department-info" id="services">
                    <div class="container">
                        <div class="card">
                            <div class="top"><h2>الرؤية</h2></div>
                            <div class="bottom">
                                <p>
                                    يهدف قسم الفيزياء كلية العلوم جامعة بنها أن يقدم خدمة علمية وبحثية
                                    متميزة على المستوى الإقليمى والدولى فى كافة تخصصات الفيزياء
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>الرسالة</h2></div>
                            <div class="bottom">
                                <p>
                                    إعداد جيل من الكوادر المؤهلة علميا فى مختلف التخصصات الفيزيائية
                                    واكسابها التقنيات العلمية الحديثة لمواكبة العصر وتوفير الفرص
                                    الوظيفية المناسبة لخدمة الوطن والسعى إلى تقدمه وإزدهاره
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>الأهداف</h2></div>
                            <div class="bottom">
                                <ul>
                                    <li>تحقيق معايير الجودة الشاملة للارتقاء بمستوى الخريجين</li>
                                    <li>الارتقاء بالبحث العلمي وتأهيل الخريجين للإلتحاق ببرامجه</li>
                                    <li>
                                        إعداد برامج تعليمية تؤهل الخريجين لمواكبة متطلبات سوق العمل في
                                        المنشآت العلمية والصناعية
                                    </li>
                                    <li>
                                        تشجيع الإبتكارات وإعداد كوادر قادرة على التعامل مع تطبيقات البحث
                                        العلمي المتنوعة
                                    </li>
                                    <li>
                                        تكوين شراكة مع مؤسسات المجتمع المدني وكذلك والأقسام المناظرة على
                                        المستوى المحلي والعالمي
                                    </li>
                                    <li>خدمة المؤسسات الصناعية لحل المشكلات التى تقابلها</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>أهم الخدمات</h2></div>
                            <div class="bottom">
                                <ul>
                                    <li>يوجد بالقسم وحدة إصلاح أجهزة الجامعة</li>
                                    <li>كما توجد وحدة التصحح الإلكترونى</li>
                                    <li>الإشراف على عدد من رسائل الماجستير للطلاب الوافدين</li>
                                    <li>يقوم عدد من أعضاء القسم بعمل مشاريع بحثية تطبيقية متعددة</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
		    <!-- End Main-sec -->
        <?php
        }elseif($department == "geology"){?>
            <!-- // if the $department = geology show the geology department -->
            <!-- START hero SECTION -->
                <div
                    class="hero-section"
                    style="
                        background-image: url(layout/images/departments-images/geologyhero.jpg);
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                    ">
                    <div class="over-lay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center content">
                                <img src="<?php echo $img_path?>departments-images/geology1.png" alt="geology" />
                                <h3>اهلا بيك في قسم الجيولوجيا</h3>
                                <p>
                                    يقوم علماء الجيولوجيا بجمع وتفسير البيانات حول الأرض والكواكب
                                    الأخرى، ويسخرون معرفتهم لزيادة فهمنا لعمليات الأرض وتحسين نوعية
                                    حياة الإنسان. تختلف مسارات عملهم ومساراتهم الوظيفية اختلافًا
                                    كبيرًا لأن علوم الأرض واسعة ومتنوعة جدًا
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- END hero SECTION -->
            <!-- Start Main-sec -->
                <div class="department-info" id="services">
                    <div class="container">
                        <div class="card">
                            <div class="top"><h2>الرؤية</h2></div>
                            <div class="bottom">
                                <p>
                                    قسم الجيولوجيا معنى بدراسة علوم الأرض وتطبيقاتها ويهدف إلى تأهيل
                                    خريج متميز بمهارات متنوعة قادر على الإنخراط فى سوق العمل وعلى
                                    إعداد دراسات متخصصة ونوعية مع إعتبار الموائمة بين الإستغلال الأمثل
                                    لموارد الأرض والمحافظة على البيئة و فضلا على متابعة الجديد فى
                                    التقنيات ذات الصلة بما يحقق تنمية المجتمع ورفع كفاءاته
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>الرسالة</h2></div>
                            <div class="bottom">
                                <p>
                                    يسعى القسم أن يكون رائدا فى تقديم خدمة تعليمية متميزة ومشاركة
                                    مجتمعية فعالة من خلال برامج دراسية متنوعة ومناهج متطورة وتوفير
                                    مناخ متوازن يشجع القدرات البحثية والتعليمية المبتكرة ويدعم القسم
                                    التنسيق والتعاون بين الأقسام العلمية داخل الكلية وخارجها فى مجالات
                                    التعليم والتدريب والبحث العلمى
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>الأهداف</h2></div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        تدريس وتدريب الطلاب لتخريج كوادر مؤهلة لتطبيق الطرق العلمية
                                        المختلفة تطبيقا سليما لإستكشاف مصادر الثروات الطبيعية وكذلك
                                        دراسة الأخطار البيئية
                                    </li>
                                    <li>
                                        المساهمة فى مجال التعامل مع المجتمع من خلال عقد الندوات والحلقات
                                        الدراسية المختلفة بغرض التوعية بالمخاطر وخاصة الطبيعية منها
                                        الهزات الأرضية ( الزلازل ) والإنهيارات الأرضية وغيرها
                                    </li>
                                    <li>
                                        القيام بالمشاريع المختلفة وإجراء الأبحاث التطبيقية على دراسة
                                        مصادر المعادن والبترول والمياه والإستشارات العلمية فى مجال
                                        المحاجر والمناجم
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>أهم الخدمات</h2></div>
                            <div class="bottom">
                                <p>
                                    تتوفر مجموعة واسعة من المرافق المختبرية في مجالات علم الرسوبيات،
                                    والصخور، والمعادن المعدنية، والجيوفيزياء، ونظام المعلومات
                                    الجغرافية، وشمول السوائل، والجيولوجيا الهندسية، والكيمياء البيئية،
                                    ورسم الخرائط، وعلم الجيولوجيا داخل القسم
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Main-sec -->
        <?php
        }elseif($department == "entomology"){?>
            <!-- // if the $department = entomology show the entomology department -->
            <!-- START hero SECTION -->
                <div
                    class="hero-section"
                    style="
                        background-image: url(layout/images/departments-images/Entomologyhero.jpg);
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                    ">
                    <div class="over-lay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center content">
                                <img src="<?php echo $img_path?>departments-images/mosquito.png" alt="entomology" />
                                <h3>اهلا بيك في قسم الحشرات</h3>
                                <p>
                                    لقد تطور علم الحشرات سريعًا بعد خمسينيات القرن الثامن عشر عندما
                                    أوجد عالم النباتات السويدي كارولوس لينيوس نظامًا مفيدًا لتصنيف
                                    النباتات والحيوانات وتسميتها
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- END hero SECTION -->
            <!-- Start Main-sec -->
                <div class="department-info" id="services">
                    <div class="container">
                        <div class="card">
                            <div class="top"><h2>الرؤية</h2></div>
                            <div class="bottom">
                                <p>
                                    يلتزم برنامج حشرات وكيمياء بإعداد خريج متخصص فى مجال علوم الحشرات
                                    والكيمياء ومكتسبا للمعرفة والمهارات التي تؤهله للمنافسة في سوق
                                    العمل وإجراء بحوث علمية متميزة للمساهمة في حل مشكلات البيئة وتنمية
                                    المجتمع مع الالتزام بالقيم الانسانية وأخلاقيات المهنة
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>الرسالة</h2></div>
                            <div class="bottom">
                                <p>
                                    نسعى لتقديم برنامج أكاديمي وبحثي متميز في مجال علم الحشرات بكافة
                                    فروعه وإعداد كوادر مؤهلة علمياً في مجال الحشرات ومكافحتها من خلال
                                    بيئة محفزة للتعلم و البحث العلمي والإبداع لتحقيق متطلبات وخطط
                                    التنمية في وطننا الحبيب
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>الأهداف</h2></div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        تقديم برامج دراسات عليا متطوره ومتميزه وتطبيقيه بما يساهم فى
                                        الارتقاء بمنظومه البحث العلمى والتنميه المستدامه للمجتمع
                                    </li>
                                    <li>
                                        تطوير المقررات الدراسيه بما يتناسب مع معايير الهيئه القوميه
                                        لضمان جودة التعليم و الاعتماد
                                    </li>
                                    <li>تقديم المقررات الدراسيه التي تتناسب مع احتياج سوق العمل .</li>
                                    <li>تحديث مستمر لاستراتيجيات التعليم والتعلم واساليب التدريب</li>
                                    <li>
                                        توظيف البحوث العلمية ونقل التكنولوجيا في خدمة المجتمع والبيئة
                                        المحيطة والصناعة والتنمية
                                    </li>
                                    <li>طلاب وخريجون متميزون وقادرون علي المنافسة والابتكار</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>أهم الخدمات</h2></div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        معامل البيولوجية الجزيئية والهندسة الوراثية، تقدير سمية
                                        المبيدات، ميكروبيولوجيا الحشرات والمكافحة الحيوية، سلوك الحشرات
                                        والحشرات الأجتماعية
                                    </li>
                                    <li>حضانات لتربية الحشرات ودراسة بيولوجيتها</li>
                                    <li>وحدة ذات طابع خاص لبحوث الهندسة الوراثية</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Main-sec -->
        <?php
        }elseif($department == "chemistry"){?>
            <!-- // if the $department = chemistry show the chemistry department -->
            <!-- START hero SECTION -->
                <div
                    class="hero-section"
                    style="
                        background-image: url(layout/images/departments-images/chemistryhero.jpg);
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                    ">
                    <div class="over-lay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center content">
                                <img
                                    src="<?php echo $img_path?>departments-images/experiment.png"
                                    alt="chemistry" />
                                <h3>اهلا بيك في قسم الكيمياء</h3>
                                <p>
                                    قسم الكيمياء يقوم بتدريس مقررات الكيمياء بتخصصاتها المختلفة لطلاب
                                    السنوات الأربع بكليتى العلوم والتربية وكذلك طلاب السنوات الأولى
                                    بكليتى الزراعة والطب البيطرى وطلاب الفرق الاعدادية للصيدلة
                                    والهندسة
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- END hero SECTION -->
            <!-- Start Main-sec -->
                <div class="department-info" id="services">
                    <div class="container">
                        <div class="card">
                            <div class="top"><h2>الرؤية</h2></div>
                            <div class="bottom">
                                <p>
                                    يسعى قسم الكيمياء لتحديث وتطوير البرامج الأكاديمية والمقررات
                                    الدراسية وتحديث طرق التدريس ووسائل تقييم الطلاب حتى يتمكن الخريجون
                                    من المنافسة فى سوق العمل كما أن القسم يضع ضمن استراتيجيته الخطط
                                    المستقبلية فى مجال البحوث وذلك من أجل النهوض بالمجتمع
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>الرسالة</h2></div>
                            <div class="bottom">
                                <p>
                                    تنبثق رسالة قسم الكيمياء من رسالة كلية العلوم جامعة بنها حيث أنها
                                    تهدف الى اعداد خريجين فى تخصصات الكيمياء المختلفة طبقا للمعايير
                                    الأكاديمية التى تفى باحتياجات الصناعة والقطاع الخدمى. ويحرص القسم
                                    على أن يكون الخريج على وعى كامل بأخلاقيات المهنة ومتطلبات حماية
                                    البيئة ويقدم القسم برامج دراسات عليا ( الدبلوم – الماجستير–
                                    الدكتوراة )لاعداد أجيال من الباحثين فى الجامعات ومراكز البحوث
                                    والصناعة لمواجهة التحديات الناتجة عن التطورات العلمية السريعة
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>الأهداف</h2></div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        نشر المعرفة في جميع مجالات الكيمياء والعمل على تطبيقها لخدمة
                                        المجتمع
                                    </li>
                                    <li>
                                        قامة النشاطات العلمية (ندوات , دورات , حلقات نقاشية , ورش العمل)
                                        وبمشاركة اعضاء الهيئة التدريسية وبحضور الطلبة بغية نشر الوعي
                                        العلمي بين كوادر القسم
                                    </li>
                                    <li>
                                        اجراء البحوث العلمية الاكاديمية والتطبيقية لاجل مواكبة التطور
                                        العلمي في الكيمياء
                                    </li>
                                    <li>
                                        اعداد الكوادر البشرية اللازمة من الخريجيين الذين يعملون في عدة
                                        مجالات علمية في الجامعات والوزارات والشركات
                                    </li>
                                    <li>
                                        تبادل الخبرات والكفاءات العلمية مع الاقسام المشابهة داخل البلد
                                        وخارجه
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>أهم الخدمات</h2></div>
                            <div class="bottom">
                                <p>
                                    يوجد بالكلية معامل الكيمياء والتي تحتوي علي كثير من الأدوات
                                    والمواد اللازمة لتخصص الكيمياء
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Main-sec -->
        <?php
        }elseif($department == "botany"){?>
            <!-- // if the $department = botany show the botany department -->
            <!-- START hero SECTION -->
                <div
                    class="hero-section"
                    style="
                        background-image: url(layout/images/departments-images/botany.jpeg);
                        background-position: center;
                        background-repeat: no-repeat;
                        background-size: cover;
                    ">
                    <div class="over-lay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center content">
                                <img src="<?php echo $img_path?>departments-images/biotech.png" alt="botany" />
                                <h3>اهلا بيك في قسم النبات</h3>
                                <p>
                                    نؤدي دورًا أساسيًا في حل المشكلات البيئية وخدمة المجتمع من خلال
                                    التعاون مع الكليات والمنظمات العلمية الأخرى لإعداد جيل متميز من
                                    العلماء في المجالات العلمية والتعليمية والصناعية
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- END hero SECTION -->
            <!-- Start Main-sec -->
                <div class="department-info" id="services">
                    <div class="container">
                        <div class="card">
                            <div class="top"><h2>الرؤية</h2></div>
                            <div class="bottom">
                                <p>
                                    يلتزم قسم النبات بكلية العلوم بالمداومة علي التميز في ابداع ونشر
                                    المعرفة في المجالات الاساسية والتطبيقية لعلوم النبات
                                    والميكروبيولوجيا حتي يكون الخريجين مزودين بالمعارف والمهارات
                                    اللازمة التى يتطلبها سوق العمل . واستنادا الي هذه الرؤية سيتم
                                    توفير بيئة ملائمة يتعاون فيها الطلاب مع اعضاء هيئة التدريس وادارة
                                    الكلية في التعليم والتعلم والبحث العلمى بما يسمح بالعمل معا
                                    للمشاركة في تنمية
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>الرسالة</h2></div>
                            <div class="bottom">
                                <p>
                                    يسعي قسم النبات بكلية العلوم جامعة بنها الي التميز في التعليم
                                    بتقديم برامج تعليمة في علوم النبات والميكروبيولوجيا تمكن الطالب من
                                    اكتساب المعارف الاساسية والمتقدمة و المهارات اللازمة للمنافسة
                                    كمهنيين في سوق العمل. كما يسعي القسم الي الارتقاء بكفاءة اعضاء
                                    هيئة التدريس و الهيئة المعاونة للقيام بابحاث متميزة في المجالات
                                    الاساسية والتطبيقية لعلوم النبات والميكروبيولوجيا تساهم في حل
                                    مشكلات المجتمع علي اسس علمية واخلاقية. وكجزء من مؤسسة قومية ويسعي
                                    القسم للمساهمة في تنمية و خدمة المجتمع ليس علي مستوى منطقة الدلتا
                                    فقط ولكن علي المستوى القومى والاقليمى
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>الأهداف</h2></div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        نيهدف القسم لخريج لديه حصيلة علمية متميزة ينافس بها فى سوق العمل
                                    </li>
                                    <li>
                                        يهدف القسم لخدمة المجتمع والمؤسسات الانتاجية بالقيام بالاستشارات
                                        العلمية ومحاضرات التوعية
                                    </li>
                                    <li>
                                        المشاركة فى اثراء البحث العلمى باجراءالابحاث المتعلقة بالمشاكل
                                        البيئية لحلها
                                    </li>
                                    <li>
                                        اعداد ورش العمل والدورات العلمية والندوات المتخصصة لرفع وتطوير
                                        المستوى العلمى للخريجين
                                    </li>
                                    <li>
                                        نشر ثقافة الوعي البيئى بالقاء المحاضرات والندوات العلمية بقصور
                                        الثقافة المختلفة
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top"><h2>أهم الخدمات</h2></div>
                            <div class="bottom">
                                <ul>
                                    <li>يحتوي قسم النبات علي معملين لطلبة البكلوريوس</li>
                                    <li>خمس معامل درسات عليا</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Main-s
        <?php
        }else{
            header("location: home.php");
        }
?>
<?php include $temp_path . "footer.php";
    } else {
        header("location: index.php");
    }

    ob_end_flush();