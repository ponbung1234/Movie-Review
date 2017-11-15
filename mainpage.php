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

  if (isset($_POST['Register'])) {
    $usernamein = $_POST['usernamein'];
    $passwd = $_POST['passwd'];
    $name = $_POST['name'];
    $Utype = $_POST['Utype'];
    $query = "INSERT INTO user (username, password, name, usertype) VALUES('$usernamein', '$passwd', '$name', '$Utype')";
    $connect->query($query);
//    if ($connect->query($query) === TRUE)
//        echo "success";
  }

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

          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
              <!-- Poster It Stephen King-->
              <img class="card-img-top" src="https://image.ibb.co/hdEmUF/It.png" alt="">
              <div class="card-body">
                <h4 class="card-title">IT</h4>
                <p class="card-text">The latest adaptation of Stephen King's classic horror novel privileges CGI scares over dread and nuance.</p>
              </div>
              <div class="card-footer">
                <a href="It.php" class="btn btn-primary">Find Out More!</a>
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
                <a href="godofegypts.php" class="btn btn-primary">Find Out More!</a>
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
                <a href="moviedetail.php?movieid=1" class="btn btn-primary">Find Out More!</a>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
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
