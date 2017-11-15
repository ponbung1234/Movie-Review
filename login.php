
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Logincss.css">
</head>

<body>

<!-- login form -->
<?php
require_once('connect.php');
    if (isset($_POST['Register'])) {

    $usernamein = $_POST['usernamein'];
    $passwd = $_POST['passwd'];
    $name = $_POST['name'];
    $Utype = $_POST['Utype'];
    $q = "select * from user where username = '$usernamein'";

// echo "$q";
    $result = $connect->query($q);
    $count = $result->num_rows;
    if($usernamein=""){
        header('Location: mainpage.php');
    }
    if($count >0){
?>    
    <p id="demo"></p>
<script>
function myFunction() {
    alert("This Username has been use!");
    history.go(-1);
}
document.getElementById("demo").innerHTML = myFunction(); 
</script>


<?php
    }
    else{
        $query = "INSERT INTO user (username, password, name, usertype) VALUES('$usernamein', '$passwd', '$name', '$Utype')";
        $connect->query($query);
    }

  }


?>

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="text-center">Welcome to Movie Review</h1>
        </div>
         <div class="modal-body">
             <form action="checkpas.php" method="post">
                 <input type="text" name="usernamein"  class="form-control input-lg" placeholder="Username"/>

                 <input type="password" name="passwd" class="form-control input-lg" placeholder="Password"/>
        <!--         <input type="button" name="logins" onclick="check(this.form)" class="btn btn-block btn-lg btn-primary"  value="Login"/>
                -->
                <input type="submit" id="login-submit" class="btn btn-block btn-lg btn-primary"  value="Login"/>
                 <span class="pull-right"><a href="register.php">Register</a></span>
                 <span><a href="mainpage.php">Homepage</a></span>
                 <span class="pull-right"><a href="#">Forgot Password&nbsp; &nbsp;</a></span>
              </form>
         </div>
    </div>
 </div>
<!--  <script language="javascript">
    function check(form)
    {
        if(form.usernamein.value == "pun" && form.passwd.value == "123")
        {
            window.open('mainpage.html')
            window.close('login.html')
        }
        else
        {
            alert("The username and password is incorrect!!")
        }

    }


 </script> -->
</body>

</html>
