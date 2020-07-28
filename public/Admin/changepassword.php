<?php
session_start();
if($_SESSION['duser']==null){
	header('location:index.php');
}
else{
include('db_connect.php');
if(!$conn){
	die('the connection is not established');
}

if(isset($_POST['password']))
{
	 $pwd1=$_POST["pwd1"];
	 $pwd2=$_POST["pwd2"];
	 
if($pwd1==$pwd2){
$query="update admin set password='$pwd1'  where id=1";
$check=mysqli_query($conn,$query);
if($check==true)
{
	echo "<script type='text/javascript'>
alert('Password updated successfully');
location='changepassword.php';
</script>";
}
else{
	die('Sorry, try again');
}

}
else{
	echo "<script type='text/javascript'>
alert('Sorry, password not match');
location='changepassword.php';
</script>";
}
 }



?>
<html>
<head>
<link rel="stylesheet" href="bootstrap.css"/>
<link rel="stylesheet" href="adminStyle.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Al-Haytham School</title>
</head>
<body>
<?php
include("header.php");
?>

<br/>
<br/>
<div class="container-fluid" > <!--photos div-->
<form  action='' method='post' enctype="multipart/form-data">
<div class="row justify-content-center">
<div class="col-md-3 col-lg-3 col-sm-3 col-xl-3 ml-5">
<table>
<tr><td>
<label>Enter new password:</label></td></tr>
<tr><td>
<input type="password" id='pass' name="pwd1" required />
<br/><br/>
</td></tr>
<tr><td>
<label>Confirm password:</label></td></tr>
<tr><td>
<input type="password" id='pass' name="pwd2" required />
<br><br>
</td></tr>
<tr><td>
<input class="btn btn-ask mouse float-right" type='submit' value="change" name="password"/><br/><br/>
</td></tr>
</table>
              
            </div>

</div>
</form>
</div>	
<br/>
<br>
<br>
</body>
</html>
<?php
}
?>