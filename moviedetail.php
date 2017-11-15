<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movie Review</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/portfolio-item.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body bgcolor="#E6E6FA">

    <!--Navigation Bar -->

<?php
  require_once('navbar.php');
  require_once('connect.php');
  $movieid = $_GET['movieid'];
    $q = "SELECT * FROM movies WHERE movieid = '$movieid'";
    $result = $connect->query($q);
    if(!$result){
        echo "Cannot get current record<br>".$q;
        exit();
    }
    $row = mysqli_fetch_array($result);


?>






<!-- Page Content -->
<div class="container">

  <!-- Portfolio Item Heading -->
   
  <h1 class="my-4"><a> <?php echo $row['moviename']; ?></a>

</h1>

<!-- Portfolio Item Row -->
<div class="row">



    <div class="col-md-8">
      <img class="img-fluid" src="<?php echo $row['moviepic']; ?>" alt="" >
  </div>

  <div class="col-md-4">


    <!-- Score Bar -->
    <h3 class="my-3">

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    score
                    <div class="progress blue">
                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">2%</div>

                    </div>
                </div>

            </div>



        </h3>



        <h3 class="my-3">Storyline</h3>
        <?php echo $row['moviedetail']; ?>





    </div>

</div>
<!-- /.row -->
<br>







<!-- x Row -->
<h1 class="my-4">Related Movie</h1>


<div class="row text-center">

  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card">
      <!-- Poster It Stephen King-->
      <img class="card-img-top" src="https://image.ibb.co/hdEmUF/It.png" alt="">
      <div class="card-body">
        <h4 class="card-title">IT</h4>
        <p class="card-text">The latest adaptation of Stephen King's classic horror novel privileges CGI scares over dread and nuance.</p>
    </div>
    <div class="card-footer">
        <a href="#" class="btn btn-primary">Find Out More!</a>
    </div>
</div>
</div>
<!--Spiderman poster-->
<div class="col-lg-3 col-md-6 mb-4">
    <div class="card">
      <img class="card-img-top" src="https://image.ibb.co/id35pF/spiderman_homecoming.jpg" alt="">
      <div class="card-body">
        <h4 class="card-title">Spider-Man: Homecoming</h4>
        <p class="card-text">A young Peter Parker/Spider-Man begins to navigate his newfound identity as the web-slinging superhero.</p>
    </div>
    <div class="card-footer">
        <a href="#" class="btn btn-primary">Find Out More!</a>
    </div>
</div>
</div>
<!--God of Egypt-->
<div class="col-lg-3 col-md-6 mb-4">
    <div class="card">
      <img class="card-img-top" src="https://image.ibb.co/dCpd9F/God_of_Egypt.jpg" alt="">
      <div class="card-body">
        <h4 class="card-title">Gods of Egypt</h4>
        <p class="card-text">An Egyptian god battles his vengeful uncle with the aid of a mortal in Alex Proyas' fantasy-adventure film.</p>
    </div>
    <div class="card-footer">
        <a href="#" class="btn btn-primary">Find Out More!</a>
    </div>
</div>
</div>
<!--The Godfather -->
<div class="col-lg-3 col-md-6 mb-4">
    <div class="card">
      <img class="card-img-top" src="https://image.ibb.co/nLL1gv/The_Godfather.png" alt="">
      <div class="card-body">
        <h4 class="card-title">The Godfather</h4>
        <p class="card-text">The aging patriarch of an organized crime dynasty transfers control of his clandestine. </p>
    </div>
    <div class="card-footer">
        <a href="godfather.php" class="btn btn-primary">Find Out More!</a>
    </div>
</div>
</div>

</div>






<!-- /.row -->


<!-- /.container -->
<br>

<?php
require_once('comment.php');
?>





<!-- Bootstrap core JavaScript -->
<script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>



</body>

</html>



