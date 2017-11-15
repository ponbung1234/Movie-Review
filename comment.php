
<?php
require('connect.php');
require_once('moviedetail.php');




if(isset($_POST['submitcom'])){
    $name = $_SESSION["usernamein"];
    $score = $_POST['score'];
    $content = $_POST['commentContent'];

    if($name&&$content)
    {
        $qu = "SELECT id,usertype from user WHERE username = '$name'";
        $rows = $connect->query($qu)->fetch_array();
        $s = "SELECT u_moviescore,c_moviescore from movies WHERE movieid='$movieid'";
        $row = $connect->query($s)->fetch_array();
        if($rows['usertype']=="User"){
             $newscore = ($row['u_moviescore']+$score)/2;
             $connect->query("UPDATE movies SET u_moviescore = '$newscore' WHERE movieid='$movieid'");
        }
       else{
             $newscore = ($row['c_moviescore']+$score)/2;
             $connect->query("UPDATE movies SET c_moviescore = '$newscore' WHERE movieid='$movieid'");
       }
        $id=$rows['id'];
        $q = "INSERT INTO comment (commenttext,commentofusername,movieid,commentscore
    ) VALUES ('$content','$id','$movieid','$score')";

    $result = $connect->query($q);
}
else
{
    echo "Please fill out";
}

}

?>
<div class="container" style="padding-top:30px">


    <h1 class="text-center">Reviews</h1>
    <br>
    <br>
    <div class="row">
        <?php  
        /*$name = $_SESSION["usernamein"];*/
        /*$q = "SELECT * from comment WHERE movieid = '$movieid'";*/
        $q = "SELECT user.usertype,user.name,comment.commenttext,comment.commentscore from user,comment WHERE user.id = comment.commentofusername AND movieid = '$movieid'";
        /*$result1 = $connect->query($q);*/
        $result = $connect->query($q);
        
        while ($row = $result->fetch_array()) {
            ?>

            <div class="col-sm-6">
                <div id="tb-testimonial" class="testimonial testimonial-default-filled">
                    <div class="testimonial-section">
                        <?php echo $row['commenttext']; ?></a>
                    </div>
                    <div class="testimonial-desc">
                        <img src="images/god/1.jpg" alt="" />
                        <div class="testimonial-writer">
                            <div class="testimonial-writer-name"><?php echo $row['name']; ?></a></div>
                            <div class="testimonial-writer-designation"><?php echo $row['usertype']; ?></div>
                            <b>Score: </b><a class="testimonial-writer-company"><?php echo $row['commentscore']; ?> </a>
                        </div>
                    </div>
                </div>   
            </div>

            <?php
        }
        ?>
        <!-- comment -->    

    </div>
</div>


<br>



<br>
<br>
<?php  
// <!-- Boostrap comment box -->
if (!isset($_SESSION["usernamein"]))
{
    echo "<h1>Please login to comment<h1>";
}
else
{

    ?>
    <!-- comment box -->


    <link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
    <div class="container">
        <div class="row">
            <h3>Comment Box</h3>
        </div>

        <div class="row">

            <div class="col-md-6">

                <div class="widget-area no-padding blank">
                    <div class="status-upload">

                        <form action="comment.php?movieid=<?php echo $movieid; ?>" method="POST">
                            
                            <b>Score:</b> &nbsp<input type= "number" min="0" max="10" name="score"><br>
                            <textarea placeholder="How do you feel or what do you think about this movie?" name="commentContent"></textarea>

                            <button type="submit" class="btn btn-success green" name="submitcom"><i class="fa fa-share"></i> Post</button><br>

                        </form>
                    </div><!-- Status Upload  -->
                </div><!-- Widget Area -->
            </div>

        </div>
    </div>
    <!-- background -->
            <!-- <div id="picture"></div>
            <h1>Misty Background <br> Experiment</h1>
            <div id="layer2"></div>
            <div id="layer1"></div> -->
            <br>
            <?php
        }

?>


