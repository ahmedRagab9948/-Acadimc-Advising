
			<!-- START NAV-BAR -->
			<div class="nnav">
				<nav class="navbar navbar-expand-lg navbar-light bg-light first_nav">
					<button
						style="border: unset"
						class="navbar-toggler"
						type="button"
						data-toggle="collapse"
						data-target="#navbarNav"
						aria-controls="navbarNav"
						aria-expanded="false"
						aria-label="Toggle navigation">
						<img src="<?php echo $img_path?>/home/Menu.png" alt="menu" />
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav mr-auto">
						<a class="btn btn-danger mr-4 px-3" href="logout.php"> تسجيل الخروج </a>
							<li class="nav-item">
								<a class="nav-link" href="contactus.php">تواصل معنا</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="courses.php">الكورسات</a>
							</li>
							<li class="nav-item dropdown">
								<a
									class="nav-link"
									href="#"
									role="button"
									data-toggle="dropdown"
									aria-expanded="false">
									<i
										class="far fa-sort-down"
										style="padding-right: 5px; padding-bottom: 6px"></i
									>الأقسام
								</a>
								<div
									class="dropdown-menu dropdownn scnd-dropdown "
									style="
										margin-left: -15px;
										margin-top: 15px;
										font-size: 10px !important;
										transition: all 0.5s ease-in-out;
									">
									<a
										class="dropdown-item"
										href="physics.php"
										style="color: #333 !important">
										قسم الفيزياء</a
									>
									<div class="dropdown-divider"></div>
									<a
										class="dropdown-item"
										href="chemistry.php"
										style="color: #333 !important">
										قسم الكيمياء</a
									>
									<div class="dropdown-divider"></div>
									<a
										class="dropdown-item"
										href="mathematics.php"
										style="color: #333 !important"
										>قسم الرياضيات</a
									>
									<div class="dropdown-divider"></div>
									<a
										class="dropdown-item"
										href="geology.php"
										style="color: #333 !important"
										>قسم الجيولوجيا</a
									>
									<div class="dropdown-divider"></div>
									<a
										class="dropdown-item"
										href="entomology.php"
										style="color: #333 !important"
										>قسم الحشرات</a
									>
									<div class="dropdown-divider"></div>
									<a
										class="dropdown-item"
										href="zoology.php"
										style="color: #333 !important"
										>قسم الحيوان</a
									>
									<div class="dropdown-divider"></div>
									<a
										class="dropdown-item"
										href="botany.php"
										style="color: #333 !important"
										>قسم النبات</a
									>
								</div>
							</li>
							<li class="nav-item active">
								<a class="nav-link active" href="home.php">الرئيسية</a>
							</li>
						</ul>
					</div>
					<a class="navbar-brand" href="home.php">
						<img src="<?php echo $img_path?>/home/arshadak-logo.png" alt="header logo" />
					</a>
				</nav>
			</div>
			<!-- END NAV-BAR -->