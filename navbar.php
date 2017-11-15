<!--Navigation Bar -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="mainpage.php">Movie Reviews</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="input-group">
        <input class="form-control" placeholder="Search" id="movieSearch" data-provide="typeahead"
        autocomplete="off">
        <div class="input-group-btn">
          <button id="searchButton" class="btn btn-default"><!-- <i
            class=" glyphicon glyphicon-search"></i></button> -->
            <img src="https://image.ibb.co/dxU5KQ/698956_icon_111_search_128.png" class="img-circle" alt="Cinque Terre" width="20" height="20">

          </div>
        </div>


      



        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="mainpage.php">Home

                <span class="sr-only">(current)</span>
              </a>


            </li>
              <li class="nav-item active">
              <a class="nav-link" href="ranking.php">Rankings
              </a>
            </li>
            <li class="nav-item">
<?php
                    // If user press logout, then remove the value of session out
                    session_start();
                    if (isset($_POST['logout'])) {
                      # code...
                      unset($_SESSION['name']);
                      unset($_SESSION['usernamein']);
                    }

                    if (!isset($_SESSION['name'])) {
                        
                        ?>

                        <a class="nav-link" href="login.php">Login</a>
                        <span class="sr-only">(current)</span>

                        <?php
                    } else {
                        ?>
                        
                        <a class="nav-link" href="login.php"><?= $_SESSION['name']; ?></a>
                        <li class="nav-item active">
                        <form action="mainpage.php" method="POST" class="nav-link">
                          <input type="submit" name="logout"  value="Logout">

                        </form>
                      </li>
                        <?php
                        
                    }
?>


              </li>
            </ul>
          </div>
        </div>
      </nav>