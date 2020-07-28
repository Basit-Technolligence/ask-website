<?php
include('db_connect.php');
if(!$conn){
	die('the connection is not established');
}

$id=$_GET['id'];
$query="delete from faculty where id=$id";
$check=mysqli_query($conn,$query);
if($check==true){
	echo "<script type='text/javascript'>
alert('Faculty deleted successfully');
location='faculty.php';
</script>";
}
else{
	die('Sorry, try again');
}
mysqli_close($conn);
?>