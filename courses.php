<?php
    ob_start();
    session_start();
    if(isset($_SESSION["full_name"])){
        $getTitle = "Home page";
		$style="courses.css";
        $js="courses.js";
        include "init.php";
        ?>

		<!-- ##################### start hero ########################################### -->
		<div class="hero-section">
			<div class="over-lay"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center content">
						<img
							src="<?php echo $img_path?>courses-images/coding (1).png"
							alt="reading"
							style="width: 150px" />
						<h3>اهلا بيك في الكورسات</h3>
						<p>
							هنا هتلاقي كورسات كتير في مجالات مختلفه زي تصميم المواقع و تصميم
							تطبيقات الهاتف و غيرها من الكوسات الي هتساعدك في اختيار و تعلم
							مجال شغلك في المستقبل
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- ##################### end hero ########################################### -->

		<!-- ##################### start features ########################################### -->
		<div id="courses" class="courses section">
			<div class="container">
				
				<div class="sec-title text-center">
					<h2>مسارات تعليمية</h2>
					<p>
						اختار تراك من ضمن التراكات الي موجوده او دور علي الكورس الي انت
						عايزه
					</p>
				</div>
				<ul class="text-center">
					<li class="show filter" data-filter="all" id="add">
						<img
							src="<?php echo $img_path?>courses-images/all.jpg"
							alt=""
							style="width: 35px; border-radius: 5px" />
						All Tracks
					</li>
					<li class="filter" data-filter=".android">
						<img
							src="<?php echo $img_path?>courses-images/android.jpg"
							alt=""
							style="width: 40px; border-radius: 5px;height: 40px;" />
						Android
					</li>
					<li class="filter" data-filter=".web">
						<img
							src="<?php echo $img_path?>courses-images/Web design.jpg"
							alt=""
							style="width: 35px; border-radius: 5px"
							;
							height="35px;" />
						Web Design
					</li>
					<li class="filter" data-filter=".network">
						<img
							src="<?php echo $img_path?>courses-images/Network.jpg"
							alt=""
							style="width: 35px; border-radius: 5px" />
						Network
					</li>
					<li class="filter" data-filter=".data">
						<img
							src="<?php echo $img_path?>courses-images/data.jpg"
							alt=""
							style="width: 35px; border-radius: 5px" />
						Data Science
					</li>
					<li class="filter" data-filter=".ai">
						<img
							src="<?php echo $img_path?>courses-images/ui.jpg"
							alt=""
							style="width: 35px; border-radius: 5px; height: 35px" />
						AI
					</li>
				</ul>
				<div class="row" id="Container">
					<div class="col-lg-4 col-md-6 col-sm-12 mix web">
						<a href="courses-road-map.php?course=Full-Stack-NET">
							<div class="contants" style="background-color: rgb(83, 74, 153)">
								<img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
								<div class="desc">
									<h3>Full-Stack .NET</h3>
									<p>
										ستتعرف في هذا المسار على طريقة تطوير وبناء تطبيقات ويب
										تفاعلية متكاملة باستخدام NET.، حيث تبدأ رحلتك بتعلم أساسيات
										تطوير وبناء التطبيقات (Back-End)...
									</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mix android">
						<a href="courses-road-map.php?course=flutter">
							<div class="contants" style="background-color: rgb(26, 164, 219)">
								<img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
								<div class="desc">
									<h3>تطوير تطبيقات Flutter</h3>
									<p>
										سنتعرف في المسار على طريقة بناء تطبيقات الموبايل والويب
										باستخدام Flutter، حيث تبدأ رحلتك بتعلم لغة Dart ثم تنتقل
										لتعلم مبادئ وأساسيات بناء التطبيق...
									</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mix web">
						<a href="courses-road-map.php?course=Full-Stack-JavaScript">
							<div class="contants" style="background-color: rgb(67, 67, 67)">
								<img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
								<div class="desc">
									<h3>Full-Stack JavaScript</h3>
									<p>
										سيأخذك هذا المسار في رحلة تتعلم من خلالها تطوير وبناء
										تطبيقات ويب تفاعلية متكاملة، تبدأ رحلتك بتعلم أساسيات
										البرمجة بلغة JavaScript ثم ستتعرف على ط...
									</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mix android">
						<a href="courses-road-map.php?course=Android">
							<div class="contants" style="background-color: rgb(180, 165, 17)">
								<img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
								<div class="desc">
									<h3>تطوير تطبيقات Android</h3>
									<p>
										سيأخذك هذا المسار في رحلة تتعلم من خلالها تطوير تطبيقات
										Android، حيث تبدأ رحلتك بتعلّم أساسيات البرمجة بلغة Kotlin
										مرورًا بمجموعة من المفاهيم التي ...
									</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mix web">
						<a href="courses-road-map.php?course=Full-Stack-Python">
							<div class="contants" style="background-color: rgb(5, 166, 180)">
								<img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
								<div class="desc">
									<h3>Full-Stack Python</h3>
									<p>
										ستتعلم في هذا المسار كيفية تطوير وبناء تطبيقات ويب تفاعلية
										متكاملة باستخدام Python، حيث تبدأ رحلتك بتعلم أساسيات تطوير
										وبناء التطبيقات (Back-End) و...
									</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mix android">
						<a href="courses-road-map.php?course=iOS">
							<div class="contants" style="background-color: rgb(245, 175, 6)">
								<img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
								<div class="desc">
									<h3>تطوير تطبيقات iOS</h3>
									<p>
										سيأخذك هذا المسار في رحلة تتعلم من خلالها تطوير تطبيقات iOS،
										ستبدأ بتعلّم أساسيات البرمجة بلغة Swift مرورًا بمجموعة من
										المفاهيم التي تحتاجها في تط...
									</p>
								</div>
							</div>
						</a>
					</div>

					<div class="col-lg-4 col-md-6 col-sm-12 mix network">
						<a href="courses-road-map.php?course=Cyber-Security">
							<div class="contants" style="background-color: rgb(4, 85, 51)">
								<img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
								<div class="desc">
									<h3>Cyber Security</h3>
									<p>
										الأمن السيبراني هو ممارسة حماية الأنظمة الحيوية والمعلومات
										الحساسة من الهجمات الرقمية. تعرف تدابير الأمن السيبراني أيضا
										باسم أمن تكنولوجيا المعلومات (IT)...
									</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mix data science">
						<a href="courses-road-map.php?course=Data-Science">
							<div class="contants" style="background-color: rgb(10, 136, 58)">
								<img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
								<div class="desc">
									<h3>Data Science</h3>
									<p>
										يجمع علم البيانات بين الرياضيات والإحصاء والبرمجة المتخصصة
										والتحليلات المتقدمة والذكاء الاصطناعي (الذكاء الاصطناعي)
										و...
									</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mix ai">
						<a href="courses-road-map.php?course=AI">
							<div class="contants" style="background-color: rgb(127, 184, 52)">
								<img src="<?php echo $img_path?>courses-images/code.png" alt="code" />
								<div class="desc">
									<h3>AI</h3>
									<p>
										الذكاء الاصطناعي (الذكاء الاصطناعي) هو قدرة الكمبيوتر أو
										الروبوت الذي يتحكم فيه الكمبيوتر على القيام بالمهام التي
										يقوم بها البشر عادة لأنها...
									</p>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>


		<!-- ##################### end courses ########################################### -->

<?php include $temp_path . "footer.php";
    } else {
        header("location: index.php");
    }

    ob_end_flush();