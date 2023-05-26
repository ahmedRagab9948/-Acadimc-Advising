<?php
    ob_start();
    session_start();
    if(isset($_SESSION["full_name"])){
        $getTitle = "Home page";
		$style="contactus.css";
        $js="contactus.js";
        include "init.php";
        ?>
			<!-- Start Contact -->
		<div class="team" id="team" style="margin-top: 150PX;">
			<div class="container">
				<div class="sec-title">
					<h3 data-aos="fade-up">MENTORS</h3>
				</div>
				<div class="owl-carousel " data-aos="fade-up" data-aos-delay="400">
					<div class="content">
							<div
								data-aos="fade-up"
								data-aos-duration="1900"
								class="align-items-stretch aos-init aos-animate">
								<div class="people"> 
									<div class="img-po">
										<img
											src="<?php echo $img_path?>team/ahmedhafez.jpg"
											class="img-fluid"
											alt="team member" />
										<div class="social">
											<a
												href="https://twitter.com/ahmedhafez001?t=mva58cBeGDxDd_EHv2Bt3g&s=09"
												target="_blank"
												><i class="fab fa-twitter"></i
											></a>
											<a
												href="https://www.facebook.com/ahmedhafeez8?mibextid=ZbWKwL"
												target="blank"
												><i class="fab fa-facebook"></i>
											</a>
											<a href="https://instagram.com/vhmed_hafez?igshid=ZGUzMzM3NWJiOQ==">
												<i class="fab fa-instagram" target="_blank"></i
											></a>
											<a
												href="https://www.linkedin.com/in/ahmed-hafez-333250198"
												target="_blank"
												><i class="fab fa-linkedin"></i
											></a>
										</div>
									</div>
									<div class="name">
										<h4>Ahmed Hafez</h4>
										<span>UI/UX Designer</span>
									</div>
								</div>
							</div>
						</div>
						<div class="content">
							<div
								data-aos="fade-up"
								data-aos-duration="1900"
								class="align-items-stretch aos-init aos-animate">
								<div class="people">
									<div class="img-po">
										<img
											src="<?php echo $img_path?>team/ahmedragab.jpg"
											class="img-fluid"
											alt="team member" />
										<div class="social">
											<a
												href="https://twitter.com/AhmedRa42271300"
												target="_blank"
												><i class="fab fa-twitter"></i
											></a>
											<a
												href="https://www.facebook.com/profile.php?id=100008610211401"
												target="blank"
												><i class="fab fa-facebook"></i>
											</a>
											<a href="https://www.instagram.com/a7med_ragab45/">
												<i class="fab fa-instagram" target="_blank"></i
											></a>
											<a
												href="https://www.linkedin.com/in/ahmed-ragab-299466228"
												target="_blank"
												><i class="fab fa-linkedin"></i
											></a>
										</div>
									</div>
									<div class="name">
										<h4>Ahmed Ragab</h4>
										<span>Web Developer</span>
									</div>
								</div>
							</div>
						</div>	
						<div class="content">
							<div
								data-aos="fade-up"
								data-aos-duration="1900"
								class="align-items-stretch aos-init aos-animate">
								<div class="people">
									<div class="img-po">
										<img
											src="<?php echo $img_path?>team/ahmedtalat.jpg"
											class="img-fluid"
											alt="team member" />
										<div class="social">
											<a
												href="https://twitter.com/ill_5odaabiiyaa"
												target="_blank"
												><i class="fab fa-twitter"></i
											></a>
											<a
												href="https://www.facebook.com/ahmed.talat.7186?mibextid=ZbWKwL"
												target="blank"
												><i class="fab fa-facebook"></i>
											</a>
											<a href="https://www.instagram.com/itsglory_69?utm_source=qr">
												<i class="fab fa-instagram" target="_blank"></i
											></a>
											<a
												href="https://www.linkedin.com/in/ahmed-talat-b9a039223/"
												target="_blank"
												><i class="fab fa-linkedin"></i
											></a>
										</div>
									</div>
									<div class="name">
										<h4>Ahmed Talat</h4>
										<span>Web Developer</span>
									</div>
								</div>
							</div>
						</div><div class="content">
							<div
								data-aos="fade-up"
								data-aos-duration="1900"
								class="align-items-stretch aos-init aos-animate">
								<div class="people">
									<div class="img-po">
										<img
											src="<?php echo $img_path?>team/ahmedeslam.jpg"
											class="img-fluid"
											alt="team member" />
										<div class="social">
											<a
												href="https://twitter.com/eslamishere?t=Qn_TT2NuAFfP6mZa2-vodA&s=09"
												target="_blank"
												><i class="fab fa-twitter"></i
											></a>
											<a
												href="https://www.facebook.com/ahmed.eslam.967422?mibextid=ZbWKwL"
												target="blank"
												><i class="fab fa-facebook"></i>
											</a>
											<a href="https://instagram.com/eslamishere?igshid=ZGUzMzM3NWJiOQ==">
												<i class="fab fa-instagram" target="_blank"></i
											></a>
											<a
												href="https://www.linkedin.com/in/ahmed-eslam-1b74b4227"
												target="_blank"
												><i class="fab fa-linkedin"></i
											></a>
										</div>
									</div>
									<div class="name">
										<h4>Ahmed Eslam</h4>
										<span>App Developer</span>
									</div>
								</div>
							</div>
						</div><div class="content">
							<div
								data-aos="fade-up"
								data-aos-duration="1900"
								class="align-items-stretch aos-init aos-animate">
								<div class="people">
									<div class="img-po">
										<img
											src="<?php echo $img_path?>team/abdelrahmantaher.jpg"
											class="img-fluid"
											alt="team member" />
										<div class="social">
											<a
												href="https://twitter.com/Abdelrahma57491?s=09"
												target="_blank"
												><i class="fab fa-twitter"></i
											></a>
											<a
												href="https://www.facebook.com/3rosii?mibextid=ZbWKwL"
												target="blank"
												><i class="fab fa-facebook"></i>
											</a>
											<a href="https://instagram.com/l_3rosii?igshid=ZGUzMzM3NWJiOQ==">
												<i class="fab fa-instagram" target="_blank"></i
											></a>
											<a
												href="https://www.linkedin.com/in/abdelrahman-elarousy-b41509251"
												target="_blank"
												><i class="fab fa-linkedin"></i
											></a>
										</div>
									</div>
									<div class="name">
										<h4>Abdelrahman Elarousy</h4>
										<span>Presentation Designer</span>
									</div>
								</div>
							</div>
						</div><div class="content">
							<div
								data-aos="fade-up"
								data-aos-duration="1900"
								class="align-items-stretch aos-init aos-animate">
								<div class="people">
									<div class="img-po">
										<img
											src="<?php echo $img_path?>team/ahmedradwan.jpg"
											class="img-fluid"
											alt="team member" />
										<div class="social">
											<a
												href="https://twitter.com/AhmedRadwa1395"
												target="_blank"
												><i class="fab fa-twitter"></i
											></a>
											<a
												href="https://www.facebook.com/ahmed.m.rdwan"
												target="blank"
												><i class="fab fa-facebook"></i>
											</a>
											<a href="https://www.instagram.com/ahmed.m.rdwan/">
												<i class="fab fa-instagram" target="_blank"></i
											></a>
											<a
												href="https://www.linkedin.com/in/ahmed-radwan-1a7b94273/"
												target="_blank"
												><i class="fab fa-linkedin"></i
											></a>
										</div>
									</div>
									<div class="name">
										<h4>Ahmed Radwan</h4>
										<span>App Developer</span>
									</div>
								</div>
							</div>
						</div><div class="content">
							<div
								data-aos="fade-up"
								data-aos-duration="1900"
								class="align-items-stretch aos-init aos-animate">
								<div class="people">
									<div class="img-po">
										<img
											src="<?php echo $img_path?>team/ahmedelmeshad.jpg"
											class="img-fluid"
											alt="team member" />
										<div class="social">
											<a
												href="https://twitter.com/meshad_ahmed?t=7hkM_X7xPjjNneAaKNIqFg&s=08"
												target="_blank"
												><i class="fab fa-twitter"></i
											></a>
											<a
												href="https://www.facebook.com/ahmed.elmeshad.77?mibextid=ZbWKwL"
												target="blank"
												><i class="fab fa-facebook"></i>
											</a>
											<a href="https://www.instagram.com/meshadahmedel/">
												<i class="fab fa-instagram" target="_blank"></i
											></a>
											<a
												href="https://www.linkedin.com/in/ahmed-el-meshad-309345274/?originalSubdomain=eg"
												target="_blank"
												><i class="fab fa-linkedin"></i
											></a>
										</div>
									</div>
									<div class="name">
										<h4>Ahmed Elmeshad</h4>
										<span>Presentation Designer</span>
									</div>
								</div>
							</div>
						</div><div class="content">
							<div
								data-aos="fade-up"
								data-aos-duration="1900"
								class="align-items-stretch aos-init aos-animate">
								<div class="people">
									<div class="img-po">
										<img
											src="<?php echo $img_path?>team/nourhanayman.jpg"
											class="img-fluid"
											alt="team member" />
										<div class="social">
											<a
												href="https://www.facebook.com/profile.php?id=100008414719019&mibextid=LQQJ4d"
												target="blank"
												><i class="fab fa-facebook"></i>
											</a>									
											<a
												href="https://www.linkedin.com/in/nourhan-ayman-47761b253/?locale=en_US"
												target="_blank"
												><i class="fab fa-linkedin"></i
											></a>
										</div>
									</div>
									<div class="name">
										<h4>Nourhan Ayman</h4>
										<span>Web Developer</span>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<!-- End Contact --> 
		<!-- start mail -->
		<div class="contact_us" style="margin-top: 100px;">
        <div class="container-fluid">
            <div class="row pt-4 contact">
                <div data-aos="fade-up" data-aos-duration="1900" class="col-12 text-center aos-init aos-animate">
         		<div class="sec-title">
				<h3 data-aos="fade-up">CONTACT US</h3>
				<img src="<?php echo $img_path?>/homeline.png" alt="" />
			</div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1900" class="col-sm-12 col-md-6 col-lg-8 pt-3 right_side text-center aos-init aos-animate">
                    <div class="message">
                        <input type="text" placeholder="Name" class="input mb-3">
                        <input type="email" placeholder="Email" class="input mb-3">
                        <input type="text" placeholder="Subject" class="input mb-3">
                        <textarea class="area mb-3" placeholder="Message" style=" height: 110px;"></textarea> <br>
                    <div class="text-box">
							<a
								href="#"
								class="btn btn-white btn-animate all_eve_small"
								style="background-color: rgba(6, 6, 255, 0.801) !important; color: #fefefe; font-weight: 600;"
								>Send Message</a
							>
						</div>
                   </div>
                </div>
            </div>
        </div>
    </div>
		<!-- end mail -->
<?php include $temp_path . "footer.php";
    } else {
        header("location: index.php");
    }

    ob_end_flush();
