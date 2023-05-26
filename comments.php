<?php
    ob_start();
    session_start();
    if(isset($_SESSION["full_name"])){
        $getTitle = "comments page";
        $style="question.css";
        $js="index.js";
        include "init.php";
        if(isset($_POST['submit'])){
            $message = filter_var($_POST["message"],FILTER_SANITIZE_STRING);

             // create form errors
             $formErrors = array();

             if(strlen($message) == 0){
                $formErrors[] = "
                                    <script>
                                        toastr.error('.لا يجب ان يكون هذا الحقل فارغ')
                                    </script>";
            }

            if(empty($formErrors)){
        
                $_SESSION["message"] = $message;
                $t = time();  
                global $con;
                $stmt = $con->prepare("INSERT INTO comments (userID,comment,createdOn) VALUES (:UserID ,:comment , :createdOn )");
                $stmt->execute(array(
                    ":UserID" => $_SESSION['UserID'],
                    ":comment" => $message,
                    ":createdOn" => date("Y-m-d",$t),
                ));
            }
        }
        if(isset($_POST['reply'])){
            $id = $_POST["commentid"];
            // $uid = $_POST["uid"];
            $reply = filter_var($_POST["reply-comment"],FILTER_SANITIZE_STRING);

             // create form errors
             $formErrors = array();

             if(strlen($reply) == 0){
                $formErrors[] = "
                                    <script>
                                        toastr.error('.لا يجب ان يكون هذا الحقل فارغ')
                                    </script>";
            }

            if(empty($formErrors)){
                $t = time(); 
                global $con;
                $stmt = $con->prepare("INSERT INTO replies (commentID,Reply,createdOn,userID) VALUES (:commentID ,:Reply , :createdOn,:userID )");
                $stmt->execute(array(
                    ":commentID" => $id,
                    ":Reply" => $reply,
                    ":createdOn" => date("Y-m-d",$t),
                    ":userID" => $_SESSION['UserID'],
                ));
                $_SESSION["commentid"] = $id;
            }
        }
?>

            <!-- ##################### start hero ########################################### -->
            <div class="questions">
                <div class="hero-section">
                    <div class="over-lay"></div>
                    <div class="container">
                        <div class="row">
                        <div class="col-lg-12 text-center content">
                            <img src="<?php echo $img_path?>questions.svg" alt="hero-img" />
                            <h3>اهلا بيك في الأسئله</h3>
                            <p class="mb-5">
                                هنا يمكنك متابعه جميع الأسئلة التي يتم سؤالها مع الإجابة المفصلة الخاصة بها
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- ##################### end hero ########################################### -->

<?php 
    if($_SESSION['GroupID']==0) {?>
        <!-- // add question -->
        <div class="add-comment">
            <div class="container">

                <form class="form" action="comments.php" method="POST" enctype="multipart/form-data">

                <?php if(isset($formErrors)) {
                        foreach($formErrors as $error){
                             echo $error;
                        }
                } ?>

                <div class="form-group d-flex align-items-start">

                    <img src="data/uploads/users/<?php echo  $_SESSION['user_image']?>" alt="image">

                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Type your comment here..." name="message"></textarea>

                </div>

                <button type="submit" class="btn btn-primary butt" name="submit">Add comment</button>

                </form>

            </div>
        </div>
<?php
    } ?>

<?php

$stmt2 = $con->prepare("SELECT * FROM comments INNER JOIN users ON comments.userID = users.UserID ORDER BY comments.id DESC");

$stmt2->execute();

$comments = $stmt2->fetchAll();?>

<!-- add question -->
<div class="container mt-5">
    <h2>(<?php echo countItems('id' , 'comments') ?>) Questions</h2>
</div>
<?php
foreach($comments as $comment) {?>
    <div class="comments">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="info w-100 d-flex align-items-start">
                        <img src="data/uploads/users/<?php echo  $comment['user_image']?>" alt="image">
                        <div class="text w-100"  class="info">
                            <h3 class="d-inline-block"><?php echo  $comment["full_name"]?></h3><span class="ml-4"><?php echo  $comment["createdOn"]?></span>
                            <p><?php echo  $comment["comment"]?></p>
                            <form action="comments.php" method="POST" enctype="multipart/form-data">
                                
                                <div class="reply reply_row w-75 mt-3 d-flex" id="replyRow">
                                    <input type="hidden" name="commentid" value="<?php echo $comment["id"] ?>">
                                    <input type="hidden" name="uid" value="<?php echo $comment["userID"] ?>">
                                    <textarea class="form-control mr-2 pl-3 w-75" 
                                              rows="1" id="exampleFormControlTextarea1" 
                                              placeholder="Add Reply..." 
                                              name="reply-comment"></textarea>
                                    <button class="btn-primary btn" 
                                            name="reply"
                                            id="addReply"><i class="fas fa-paper-plane mr-2"></i>Add Reply</button>
                                </div>
                            </form>
                            <div class="reply-message mt-5">
                                <div class="row">
                                    <?php
                                    $stmt3 = $con->prepare("SELECT * FROM replies INNER JOIN users ON replies.userID = users.UserID WHERE replies.commentID = ? ORDER BY replies.id DESC");
                                    $stmt3->execute(array($comment["id"]));
                                    $replies = $stmt3->fetchAll();
                                    foreach($replies as $reply) {?>
                                            <div class="info w-100 d-flex align-items-start mb-4">
                                                <img src="data/uploads/users//<?php echo  $reply['user_image']?>" alt="image">
                                                <div class="text w-100"  class="info">
                                                    <h3 class="d-inline-block"><?php echo  $reply["full_name"]?></h3><span class="ml-4"><?php echo  $reply["createdOn"]?></span>
                                                    <p><?php echo  $reply["Reply"]?></p>
                                                </div>
                                            </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
<?php
}
?>



<?php include $temp_path . "footer.php";?>
<?php
    } else {
        header("location: index.php");
    }

    ob_end_flush();