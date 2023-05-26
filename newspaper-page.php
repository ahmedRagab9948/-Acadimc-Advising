<?php
    ob_start();
    session_start();
    if(isset($_SESSION["full_name"])){
        $getTitle = "newspaper page";
		$style="newspaper.css";
        $js="newspaper.js";
        include "init.php";
        ?>

            <!-- ##################### start hero ########################################### -->
            <div class="hero-section">
            <div class="over-lay"></div>
            <div class="container">
                <div class="row">
                <div class="col-lg-12 text-center content">
                    <img src="<?php echo $img_path?>newspaper-hero.svg" alt="reading" />
                    <h3>اهلا بيك في أهم الأخبار</h3>
                    <p>
                        هنا يمكنك متابعه جميع أخبار الكلية القديمه او الحديثه
                    </p>
                </div>
                </div>
            </div>
            </div>
    <!-- ##################### end hero ########################################### -->

		<!-- START Newspaper -->
	<?php

		$stmt2 = $con->prepare("SELECT * FROM newspaper ORDER BY date DESC");

		$stmt2->execute();

		$newspaper = $stmt2->fetchAll();
		
		?>

		<div class="newspaper-page">
			<div class="container">
				<div class="row text-center mt-4">
						<?php 
							foreach($newspaper as $report) {?>
                                    <div class="col-md-4 col-sm-12">
										<div class="item">
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
                                    </div>
						<?php
								}
						?>	
				</div>
			</div>
		</div>
		<!-- end Newspaper -->
        <?php include $temp_path . "footer.php";
    } else {
        header("location: index.php");
    }

    ob_end_flush();