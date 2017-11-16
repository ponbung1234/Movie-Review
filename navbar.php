 <!--Navigation Bar -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <img src="images/logo.png" width="25" height="25">
      <a class="navbar-brand" href="mainpage.php">&nbsp;Movie Reviews</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<form action="searchpage.php" method="POST" >  
      <div class="input-group">
        <input type="text" name="searchMovie" placeholder="Search"></input>
       
        <input type="submit" name="submit_search"  value="Search"></input>

        </div>
</form>

      



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
                        
                        <a class="nav-link" href="Editprofile.php?id=<?=$_SESSION['usernamein']?>"><?= $_SESSION['usernamein']; ?></a>
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