<?php
include('db_connect.php');
if(!$conn){
	die('the connection is not established');
}

$section=$_GET['section'];
$query="delete from gallery where section=$section";
$check=mysqli_query($conn,$query);
if($check==true){
	echo "<script type='text/javascript'>
alert('Section deleted successfully');
location='gallery.php';
</script>";
}
else{
	die('Sorry, try again');
}
mysqli_close($conn);
?>