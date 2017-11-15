<?php
require_once('connect.php');

$username = $_POST['usernamein'];
$passwd = $_POST['passwd'];
$q = "select * from user where username = '$username' and password = '$passwd'";

// echo "$q";
$result = $connect->query($q);

$row = mysqli_fetch_array($result);
$count = $result->num_rows;
if($count >0){
	session_start();
	$_SESSION['name'] = $row['name'];
	$_SESSION['usernamein'] = $row['username'];
	
	echo "Login sucessfully!!";
	echo $row['name'];
	
	echo $_SESSION['name'];
	header('Location: mainpage.php');

} 
else{
?>
	
<p id="demo"></p>
<script>
function myFunction() {
    alert("Login Fail!");
    history.go(-1);
}
document.getElementById("demo").innerHTML = myFunction(); 
</script>

<?php

}

?>
