<?php
    ob_start();
    session_start();
    if(isset($_SESSION["full_name"])){
        $getTitle = "newspaper-details page";
        $style="newspaper.css";
        $js="newspaper.js";
        include "init.php";

        $reportid = isset($_GET['reportid']) && is_numeric($_GET['reportid']) ? intval($_GET['reportid']) : 0 ;

        $stmt = $con->prepare("SELECT * FROM newspaper WHERE ID = ? ");
        $stmt->execute(array($reportid));
        $report = $stmt->fetch();
		?>

		<div class="report-details">
            <div class="container">
                <div class="header text-right">
                    <h2><?php echo $report["title"]?></h2>
                    </div>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <img src="data/uploads/newspaper/<?php echo $report["image"]?>" alt="<?php echo $report["image"]?>">
                    </div>
                    <div class="col-md-8">
                        <div class="date text-right">
                            <p><?php echo $report["date"]?><i class="fas fa-calendar-alt ml-2"></i></p>
                        </div>
                        <div class="description text-right">
                            <p><?php echo $report["description"]?></p>
                        </div>
                    </div>
                    
                </div>

                <div class="row">
                        <div class="sub-desc1 text-right">
                            <p><?php echo $report["sub_desc1"]?></p><br>
                        </div>
                        <div class="sub-desc2 text-right">
                            <p><?php echo $report["sub_desc2"]?></p><br>
                        </div>
                        <div class="sub-desc3 text-right">
                            <p><?php echo $report["sub_desc3"]?></p><br>
                        </div>
                        <div class="sub-desc4 text-right">
                            <p><?php echo $report["sub_desc4"]?></p>
                        </div>
                </div>
            </div>
        </div>
		<!-- end Newspaper -->
        <?php include $temp_path . "footer.php";
    } else {
        header("location: index.php");
    }

    ob_end_flush();