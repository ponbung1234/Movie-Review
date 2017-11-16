<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Movie Reviews</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
  <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> -->

</head>

<body>

<!--Navigation Bar -->

<?php
  require_once('navbar.php');
  require_once('connect.php');

  $q="SELECT * FROM movies";
  $result=$connect->query($q);

?>

      <!-- Page Content -->
      <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron my-4">
          <h1 class="display-3">Movies Reviews and Ratings!</h1>
          <p class="lead">Current movie reviews and ratings from critics and user on all of the latest movies. Movie discussions, analysis, and much more details.</p>
          
        </header>

        <!-- Page Features -->
        <div class="row text-center">
          <?php
          while ($row = $result->fetch_array()) { ?>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <!-- Poster It Stephen King-->
              <img class="card-img-top" src="<?=$row['moviepic']?>" width="150" height="209">
              <div class="card-body">
                <h4 class="card-title"><?=$row['moviename']?></h4>
                <p class="card-text"><?=$row['moviedetail']?></p>
              </div>
              <div class="card-footer">
                <a href="moviedetail.php?movieid=<?=$row['movieid']?>" class="btn btn-primary">Find Out More!</a>
              </div>
            </div>
          </div>
          <?php 
          }
           ?>
          
        </div>
        <!-- /.row -->

      </div>
    
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Movie Reviews</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

  </html>
