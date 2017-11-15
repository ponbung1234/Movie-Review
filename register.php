
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Logincss.css">
</head>

<body>




<!-- login form -->

<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <h1 class="text-center">Signup Form</h1>
        </div>
         <div class="modal-body">
             <form method="POST" action="login.php" >
                 <input type="text" name="usernamein" class="form-control input-lg" placeholder="Username" required/>

                 <input type="text" name="name"  class="form-control input-lg" placeholder="Name" required/>
                <select class="form-control input-lg" name="Utype">
                  <option value="User">User</option>
                  <option value="Top Critic">Top Critic</option>

                </select>



                 <input type="password" name="passwd" class="form-control input-lg" placeholder="Password" required/>

        <!--         <input type="button" name="logins" onclick="check(this.form)" class="btn btn-block btn-lg btn-primary"  value="Login"/>
                -->
                <input type="submit" name="Register" class="btn btn-block btn-lg btn-primary"  value="Signup"/>
                 <span class="pull-right"><a href="login.php">Back To Login</a></span>
                 <span><a href="mainpage.php">Homepage</a></span>

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