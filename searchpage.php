<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movie Reviews</title>

    <!-- Bootstrap core CSS -->
    <link href="rankings/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="rankings/csscss.css">

    <!-- Custom styles for this template -->
    <style>
        body {
            padding-top: 54px;
        }

        @media (min-width: 992px) {
            body {
                padding-top: 56px;
            }
        }

    </style>

</head>

<body>

<?php 
require_once('navbar.php');
require('connect.php');
if(isset($_POST["submit_search"])){
    $search=$_POST["searchMovie"];
    /*echo $search;*/
    $q='SELECT * FROM movies WHERE moviename LIKE "%'.$search.'%"';
   
    $result=$connect->query($q);
    /*echo $row['moviename'];*/
}

?>


<!-- Page Content -->

<div class="container">
    <br>
    <br>
    <h1>Search from -<?=$search?>- </h1>
    <?php
    $count = $result->num_rows;
    if ($count==0) {
        # code...
        ?>
        <br>
        <h3>Sorry, <?=$search?> not found.</h3>
        <?php
    }
    ?>

    <div id="blog" class="row">

        <!-- GODFATHER -->
<?php 
$i=1;
$j=$i+10;
        while ($row = $result->fetch_array()) {
            # code...
        
        $c_score = round($row['c_moviescore']);
        /*echo $score;*/
        $c_scores = ($c_score/10)*200;
        /*echo $scores;*/
        $u_score = round($row['u_moviescore']);
        $u_scores = ($u_score/10)*200;
        if ($c_score>=8) {
            # code...
            $title ="Great movie!";
        }
        elseif ($c_score>=5&&$c_score<8) {
            # code...
            $title ="Moderate!";
        }
        else{
            $title ="Terribly!";
        }

 ?>
        <div class="col-md-10 blogShort">
            <br>
            <h3><?=$row['moviename']?></h3>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <img src="<?=$row['moviepic']?>" alt="post img"
                         class="pull-left img-responsive thumb margin10 img-thumbnail">
                </div>
                <div class="col-md-3">
                    <b><p>CRITICS (<?=$row['c_moviescore']?>)</p></b>
                    
                    <style type="text/css">
                    .outter<?php echo $i ?>{
                        height:25px;
                        width:200px;
                        border:solid 1px #000;

                    }
                    .inner<?php echo $i ?>{
                        height:23px;
                        width:<?php echo $c_scores ?>px;
                        border-right:solid 1px #000;
                    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#d0e4f7+0,73b1e7+24,0a77d5+50,539fe1+79,87bcea+100;Blue+Pipe+%231 */
                    background: rgb(208,228,247); /* Old browsers */
                    background: -moz-linear-gradient(top, rgba(208,228,247,1) 0%, rgba(115,177,231,1) 24%, rgba(10,119,213,1) 50%, rgba(83,159,225,1) 79%, rgba(135,188,234,1) 100%); /* FF3.6-15 */
                    background: -webkit-linear-gradient(top, rgba(208,228,247,1) 0%,rgba(115,177,231,1) 24%,rgba(10,119,213,1) 50%,rgba(83,159,225,1) 79%,rgba(135,188,234,1) 100%); /* Chrome10-25,Safari5.1-6 */
                    background: linear-gradient(to bottom, rgba(208,228,247,1) 0%,rgba(115,177,231,1) 24%,rgba(10,119,213,1) 50%,rgba(83,159,225,1) 79%,rgba(135,188,234,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d0e4f7', endColorstr='#87bcea',GradientType=0 ); /* IE6-9 */
                    }
                    </style>
                    <div class="outter<?php echo $i ?>">
                        <div class="inner<?php echo $i ?>">
                        </div>
                    </div>
                </div>
                <!-- USER SCORE BAR -->
                <div class="col-md-3">
                    <b><p>USER (<?=$row['u_moviescore']?>)</p></b>
                    
                    <style type="text/css">
                    .outter<?php echo $j ?>{
                        height:25px;
                        width:200px;
                        border:solid 1px #000;

                    }
                    .inner<?php echo $j ?>{
                        height:23px;
                        width:<?php echo $u_scores ?>px;
                        border-right:solid 1px #000;
                    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffd65e+0,febf04+100;Yellow+3D+%232 */
background: rgb(255,214,94); /* Old browsers */
background: -moz-linear-gradient(top, rgba(255,214,94,1) 0%, rgba(254,191,4,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(255,214,94,1) 0%,rgba(254,191,4,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(255,214,94,1) 0%,rgba(254,191,4,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffd65e', endColorstr='#febf04',GradientType=0 ); /* IE6-9 */
                    </style>
                    <div class="outter<?php echo $j ?>">
                        <div class="inner<?php echo $j ?>">
                        </div>
                    </div>
                </div>


            </div>

            <article><p><h5>" <?=$title?> "</h5></p></article>
            <a class="btn btn-blog pull-right marginBottom10" href="godfather.php">READ
                MORE</a>
        </div>
    </div>

<?php 
$i++;
$j++;

}
 ?>

    <!-- I don't know what it is -->
    <div class="col-md-12 gap10"></div>
</div>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>