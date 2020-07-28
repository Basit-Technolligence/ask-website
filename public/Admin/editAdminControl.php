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
if (isset($_REQUEST['id'])){
	$id=$_GET['id'];
	$result=mysqli_query($conn,"select username from admin where id=$id");
while($row=mysqli_fetch_assoc($result))
{
	$username=$row["username"];
	
}
}
if (isset($_POST['updatePassword'])){
	 $password1=$_POST["password1"];
	  $password2=$_POST["password2"];
	 if($password1==$password2){
		 $query="update admin set password='$password1' where id=$id";
		$check=mysqli_query($conn,$query);
		if($check==true)
		{
			echo "<script type='text/javascript'>
			alert('Password changed successfully');
			location='adminControl.php';
			</script>";
		}
		else{
			die('Sorry, try again');
		}
	 }
	else{
		echo "<script type='text/javascript'>
		alert('Sorry, password not match');
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
<div class="container-fluid" > <!--edit password div-->
<div class="row">
<div class="col-md-3 col-lg-3 col-sm-3 col-xl-3 ml-3">
</div>
<div class="col-md-5 col-lg-5 col-sm-5 col-xl-5 ml-5">
 <label class="control-label"><b>Username: <?php echo $username ?></b></label>
<form  action='' method='post'>
<input type="password" class="form-control"  placeholder="Enter new password" required  name="password1" /><br/>
<input type="password" class="form-control"  placeholder="Enter new password again" required  name="password2" /><br/>		  
<input class="btn btn-ask mouse float-right" type='submit' value="change" name="updatePassword"/>
</form>
</div>
</div>	
<br/>			
</div>
<br>
<br>
</body>
</html>
<?php
}
?>