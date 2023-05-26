<?php
    ob_start();
    session_start();
    if(isset($_SESSION["full_name"])){
        $getTitle = "Home page";
		$style="home.css";
        $js="home.js";
        include "init.php";
        ?>
<!-- START FIRST SECTION -->
    <div class="landing">
        <div class="first-section" id="main">
				<div class="container">
					<div class="main row">
						<div class="left-side col-6">
							<div class="image">
							<img src="<?php echo $img_path?>/home/arshadak-logo.png" alt="header logo" />
								<i class="fa-light fa-ellipsis-stroke"></i>
							</div>
						</div>
						<div class="right-side col-6">
							<p>أهلا وسهلا بكم في موقع</p>
							<h1>إرشادك</h1>
							<p>تحت اشراف/ كلية العلوم جامعة بنها</p>
						</div>
					</div>
				</div>
			</div>
			<a href="#scnd-section" class="go-down">
				<i class="fas fa-angle-double-down fa 2x"></i>
			</a>
		</div>
	</div>
		<!-- END FIRST SECTION -->
		<!-- START SECOND SECTION -->
		<div class="scnd-section" id="scnd-section">
			<div class="container">
				<div class="sec-title wow bounceInDown" data-wow-duration="1s" data-wow-offset="200">
					<img src="<?php echo $img_path?>/home/benha-university-logo (1).png" alt="" />
					<h3 data-aos="fade-up">كلية العلوم</h3>
				</div>
				<p>
					كلية العلوم جامعة بنها أنشأت فى 1981 وكانت تابعة لجامعة الزقازيق
					وأصبحت الجامعة مستقله سنة 2005 وتضم الكلية سبعة أقسام علمية هي قسم
					الرياضيات و قسم الفيزياء و قسم الكيمياء و قسم الجيولوجيا و قسم النبات
					و قسم علم الحيوان و قسم علم الحشرات وتحتوى على 22 برنامج أكاديمي
					وتطبيق نظام الساعات المعتمدة وتقوم الكليه بتدريس العلوم الأساسية
					لمختلف كليات الجامعة من (الحاسبات والمعلومات - التربية - الطب البيطري)
				</p>
			</div>
		</div>
		<!-- END SECOND SECTION -->
		<!-- START THIRD SECTION -->
		<div class="third-section">
			<div class="container">
				<div class="sec-title">
					<h3 data-aos="fade-up">عميد الكلية</h3>
				</div>
				<div class="row">
					<div class="left-side col-lg-6 col-md-12">
						<div class="img-style">
							<img src="<?php echo $img_path?>/home/dean-dr.lotfy.jpg" alt="" />
						</div>
					</div>
					<div class="right-side col-lg-6 col-md-12">
						<h2>كلمة عميد الكلية</h2>
						<p style="line-height: 1.9;">
							أرحب بالسادة زوار موقع الكلية وأتقدم لطلابنا الأعزاء بخالص التهاني
							بنجاحهم في المراحل الدراسية السابقة وتمنياتى لهم بالتوفيق والنجاح
							في المرحلة الجامعية الحالية. فطالب كلية العلوم يمثل نواة للباحث
							والعالم المصري والذي نأمل أن يكون علي قدر المسئولية وأن يندمج
							سريعاً في مناخ العلم والعلماء فالدراسة في كلية العلوم بجامعة بنها
							بنظام الساعات المعتمدة لجميع البرامج الأكاديمية فى مرحلة
							البكالوريوس والدراسات العليا
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- END THIRD SECTION -->

		<!-- START Newspaper -->
	<?php
		$stmt2 = $con->prepare("SELECT * FROM newspaper ORDER BY date DESC LIMIT 8");
		$stmt2->execute();
		$newspaper = $stmt2->fetchAll();
		?>
		<div class="newspaper">
			<div class="container">
				<div class="sec-title">
					<h3>الأخبار</h3>
				</div>
				<div class="swiper mySwiper text-center mt-4">
					<div class="swiper-wrapper">
						<?php 
							foreach($newspaper as $report) {?>
										<div class="item swiper-slide">
											<div class="image">
												<div class="overlay">
													<div class="overlay-content">
														<a href="newspaper-details.php?reportid=<?php echo $report['ID']?>">التفاصيل</a>
													</div>
												</div>
												<img src="data/uploads/newspaper/<?php echo $report['image']?>" alt="">
											</div>
											<div class="title">
												<p>
													<i class="fas fa-calendar-alt"></i>
													<?php echo $report['date']?>
												</p>
												<a href="newspaper-details.php?reportid=<?php echo $report['ID']?>">
													<h2> <?php echo $report["title"]?> </h2>
												</a>
											</div>
										</div>
						<?php
								}
						?>	
					</div>
					<div class="swiper-pagination"></div>
				</div>
				<div class="more text-center">
					<a href="newspaper-page.php"
					   class="btn btn-primary btn-animate all_eve_small" 
					   style="background-color: #007bff !important">مزيد من الأخبار
					</a>
				</div>
			</div>
		</div>
		<!-- end Newspaper -->

		<!-- START SERVICES -->
		<div class="services" id="services">
			<div class="container">
				<div class="sec-title">
					<h3 data-aos="fade-up">الخدمات</h3>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="card">
							<img src="<?php echo $img_path?>/home/qa (3).png" class="card-img-top" alt="..." />
							<div class="card-body">
								<h5 class="card-title">سؤال و جواب</h5>
								<div class="text-box">
									<a href="comments.php" class="btn btn-white btn-animate all_com_small  "
										>المزيد</a
									>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="card">
							<img src="<?php echo $img_path?>/home/webinar.png" class="card-img-top" alt="..." />
							<div class="card-body">
								<h5 class="card-title">كورسات مجانية</h5>
								<div class="text-box">
									<a href="courses.php" class="btn btn-white btn-animate all_com_small"
										>المزيد</a
									>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="card">
							<img src="<?php echo $img_path?>/home/books.png" class="card-img-top" alt="..." />
							<div class="card-body">
								<h5 class="card-title">كتب و مراجع</h5>
								<div class="text-box">
									<a href="courses.php" class="btn btn-white btn-animate all_com_small"
										>المزيد</a
									>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END SERVICES -->
		<!-- START departments -->
		<div class="departments" id="departments">
			<div class="sec-title">
				<h3 data-aos="fade-up">الأقسام</h3>
			</div>
			<div class="owl-carousel" data-aos="fade-up" data-aos-delay="400">
				<div class="content" style="border-color: rgb(112, 154, 231)">
					<div class="content-img" style="background-color: rgb(112, 154, 231)">
						<img
							src="<?php echo $img_path?>departments-images/geology.png"
							class="card-img-top"
							alt="..." />
					</div>
					<div class="bottom">
						<h3 style="font-size: 24px">قسم الجيولوجيا</h3>
						<p>
							قسم الجيولوجيا هو أحد أقسام الكلية وهو معنى بدراسة علوم الأرض
							وتطبيقاتها
						</p>
						<div class="text-box">
							<a
								href="departments.php?department=geology"
								class="btn btn-white btn-animate all_eve_small"
								style="background-color: rgb(112, 154, 231) !important"
								>المزيد</a
							>
						</div>
					</div>
				</div>
				<div class="content" style="border-color: rgb(233, 62, 0)">
					<div class="content-img" style="background-color: rgb(233, 62, 0)">
						<img
							src="<?php echo $img_path?>departments-images/entomology.png"
							class="card-img-top"
							alt="..."
							style="width: 110%; top: 15px; left: -9px" />
					</div>
					<div class="bottom">
						<h3>قسم الحشرات</h3>
						<p>
							قسم الحشرات هو أحد أقسام الكلية وهو معنى بدراسة بيولوجيا الحشرات
							المعقدة
						</p>
						<div class="text-box">
							<a
								href="departments.php?department=entomology"
								class="btn btn-white btn-animate all_eve_small"
								style="background-color: rgb(233, 62, 0) !important"
								>المزيد</a
							>
						</div>
					</div>
				</div>
				<div class="content" style="border-color: rgb(171, 162, 248)">
					<div class="content-img" style="background-color: rgb(171, 162, 248)">
						<img
							src="<?php echo $img_path?>departments-images/physics.png"
							class="card-img-top"
							alt="..."
							style="width: 170%; top: -5px; left: -40px" />
					</div>
					<div class="bottom">
						<h3>قسم الفيزياء</h3>
						<p>
							قسم الفيزياء هو أحد أقسام الكلية معنى بدراسة الظواهر الطبيعية
							والقوى والحركة
						</p>
						<div class="text-box">
							<a
								href="departments.php?department=physics"
								class="btn btn-white btn-animate all_eve_small"
								style="background-color: rgb(171, 162, 248) !important"
								>المزيد</a
							>
						</div>
					</div>
				</div>
				<div class="content" style="border-color: rgb(44, 21, 255)">
					<div class="content-img" style="background-color: rgb(44, 21, 255)">
						<img
							src="<?php echo $img_path?>departments-images/mathematics.png"
							class="card-img-top"
							alt="..."
							style="width: 170%; top: -25px; left: -32px" />
					</div>
					<div class="bottom">
						<h3 style="font-size: 27px">قسم الرياضيات</h3>
						<p style="font-size: 13px">
							قسم الرياضيات هو أحد أقسام الكلية معنى بالدراسة المنهجية للأشكال
							وحركات الأشياء المادية
						</p>
						<div class="text-box">
							<a
								href="departments.php?department=mathematics"
								class="btn btn-white btn-animate all_eve_small"
								style="background-color: rgb(44, 21, 255) !important"
								>المزيد</a
							>
						</div>
					</div>
				</div>
				<div class="content" style="border-color: rgb(170, 235, 66)">
					<div class="content-img" style="background-color: rgb(170, 235, 66)">
						<img
							src="<?php echo $img_path?>departments-images/botany.png"
							class="card-img-top"
							alt="..."
							style="width: 170%; top: 0px; left: -45px" />
					</div>
					<div class="bottom">
						<h3>قسم النبات</h3>
						<p>
							قسم النبات هو أحد أقسام الكلية وهو معنى بدراسة الأشجار والأزهار
							والأعشاب
						</p>
						<div class="text-box">
							<a
								href="departments.php?department=botany"
								class="btn btn-white btn-animate all_eve_small"
								style="background-color: rgb(170, 235, 66) !important"
								>المزيد</a
							>
						</div>
					</div>
				</div>
				<div class="content" style="border-color: rgb(203, 203, 216)">
					<div class="content-img" style="background-color: rgb(203, 203, 216)">
						<img
							src="<?php echo $img_path?>departments-images/zoology.png"
							class="card-img-top"
							alt="..."
							style="top: 1px" />
					</div>
					<div class="bottom">
						<h3>قسم الحيوان</h3>
						<p>
							قسم الحيوان هو أحد أقسام الكلية وهو معنى بدراسة أي كائن حي على سطح
							الأرض
						</p>
						<div class="text-box">
							<a
								href="departments.php?department=zoology"
								class="btn btn-white btn-animate all_eve_small"
								style="background-color: rgb(203, 203, 216) !important"
								>المزيد</a
							>
						</div>
					</div>
				</div>
				<div class="content" style="border-color: rgb(0, 190, 248)">
					<div class="content-img" style="background-color: rgb(0, 190, 248)">
						<img
							src="<?php echo $img_path?>departments-images/chemistry.png"
							class="card-img-top"
							alt=""
							style="width: 110%; top: 15px; left: -8px" />
					</div>
					<div class="bottom">
						<h3>قسم الكيمياء</h3>
						<p style="font-size: 12 px">
							قسم الكيمياء هو أحد أقسام الكلية وهو معنى بدراسة المادة
							والتغيُّرات التي تطرأ عليها
						</p>
						<div class="text-box">
							<a
								href="departments.php?department=chemistry"
								class="btn btn-white btn-animate all_eve_small"
								style="background-color: rgb(0, 190, 248) !important"
								>المزيد</a
							>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END departments -->
		<!-- Start Contact -->
		<div class="contact">
			<div class="container">
				<div class="sec-title">
					<h3 data-aos="fade-up">تواصل معنا</h3>
				</div>
				<div class="row">
					<div class="left-side col-lg-6 col-md-12">
						<div class="map">
							<p>
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13755.96487778888!2d31.1864826!3d30.4646868!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7df5902898f4d%3A0x72cb12dd7f063978!2sFaculty%20of%20Science%2C%20Benha%20University!5e0!3m2!1sen!2seg!4v1682633404359!5m2!1sen!2seg"
									width="500"
									height="380"
									style="
										border-radius: 5%;
										box-shadow: 0.4px 0.4px 12px 6px #333 !important;
									"
									allowfullscreen=""
									loading="lazy"
									referrerpolicy="no-referrer-when-downgrade"></iframe>
							</p>
						</div>
					</div>
					<div class="right-side col-lg-6 col-md-12">
						<ul style="list-style: none">
							<li>
								<h4 class="first-h4">
									كلية العلوم جامعة بنها - محافظة القليوبية بنها مصر
								</h4>
								<i class="fas fa-map-marker-alt" style="margin-top: 20px"></i>
							</li>
							<li>
								<h4>013-3222578</h4>
								<i class="far fa-phone-rotary" style="padding: 10px"></i>
							</li>
							<li>
								<h4>013-3225494</h4>
								<i class="fal fa-mobile" style="padding: 10px 15px"></i>
							</li>
							<li>
								<h4>info@fsci.bu.edu.eg</h4>
								<i class="fal fa-envelope" style="padding: 10px"></i>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Contact -->

		<!-- START about -->
		<div class="about" id="about">
			<div class="container">
				<div class="sec-title">
					<h3 data-aos="fade-up">إرشادك</h3>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="card">
							<img src="<?php echo $img_path?>/home/Get-Close.png" class="card-img-top" alt="..." />
							<div class="card-body">
								<h4 class="card-title">ازاي تستفاد من موقع ارشادك</h4>
								<p>
									اسئله كتير هتلاقي اجابتها في موقع ارشادك و كمان هتلاقي كورسات
									لمجالات زي البرمجة بكل فروعها ولو عايز كورس لمجال معين تقدر
									تطلبه و هنوفره ليك و نساعدك تبدأ فيه
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="card">
							<img
								src="<?php echo $img_path?>/home/Get-in-Front.png"
								class="card-img-top"
								alt="..." />
							<div class="card-body">
								<h4 class="card-title">
								 ليه محتاج ارشاد اكاديمي 
								</h4>
								<p>
									كلية العلوم كلية بحثية يعني الطالب في أي قسم فيها بيبقي محتاج
									يدور علي معلومات كتير بنفسه بس الأهم انه يعرف ازاي يدور علي
									المعلومة دي علشان كدة عملنا موقع ارشادك
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="card">
							<img
								src="<?php echo $img_path?>/home/Get-Organized.png"
								class="card-img-top"
								alt="..." />
							<div class="card-body">
								<h4 class="card-title">يعني ايه ارشاد اكاديمي</h4>
								<p>
									الهدف الأساسي من الارشاد الأكاديمي هو مساعدة الطلبة في الفترة
									الجامعية علي اختيار التخصص المناسب ليهم في الكلية وده طبعا علي
									أساس امكانياتهم و اهتماماتهم العلمية وكمان يهيئهم لسوق العمل
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- END about -->
        <?php include $temp_path . "footer.php";
    } else {
        header("location: index.php");
    }

    ob_end_flush();