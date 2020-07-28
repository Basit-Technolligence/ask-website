<?php 
include("db_connect.php");

if(isset($_POST['usr']) && isset($_POST['pwd']))
{
	$user=$_POST['usr'];
	$pass=$_POST['pwd'];
	

$result=mysqli_query($conn,"select * from academy_admin where id=1");
while($row=mysqli_fetch_assoc($result))
{
$duser=$row['username'];
$dpass=$row['password'];

}
if($user==$duser && $pass==$dpass){
	header('location:computercourses.php');
	session_start();
$_SESSION['auser']=$duser;
}
else
	echo "<script>
alert('invalid username or password');
</script>";

}

?>


<html>
<head><title>Al-Haytham School</title> 
<link rel="stylesheet" href="bootstrap.css"/>
<link rel="stylesheet" href="newstyle.css"/>
<style>
.top_icon{
width:200px;
height:100px;
}

</style>
</head>
<body id="body_color">
</br>
</br>
</br>
<div class="container text-center" style="background-color:#F6F4FB">       <!--first div-->
<div class="row">
<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12" >
<br/>
<img class="top_icon pl-2 mt-2 img-responsive" alt='picture not found' src="http://ask.edu.pk/Academy%20Admin/uploads/Logo2.PNG" />
</div>
</div>
<center>
<div class="row">
<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12"  >
<form action="index.php" method="POST">
<table>
<tr>
<td><label>Username:</label></td>
</tr>
<tr>
<td><input type="text" id='name' name="usr"  required></td>
</tr>
<br/>
<tr><td>
<label>Password:</label></td></tr>
<tr><td>
<input type="password" id='pass' name="pwd" required>
<p style="color-red" id="wrong"></p>

</td></tr>
<tr><td>
<input class="float-right btn-primary"  type="submit"  value="login"><br/><br/>
</td></tr>
</table>
</form>
<br/><br/>
</div>
</div>
</div>
</body>
</html>