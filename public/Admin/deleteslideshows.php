<?php

include('db_connect.php');
if(!$conn){
	die('the connection is not established');
}

$id=$_GET['id'];
$query="delete from slideshows where id=$id";
$check=mysqli_query($conn,$query);
if($check==true){
	echo "<script type='text/javascript'>
alert('Photo deleted successfully');
location='slideshow.php';
</script>";
}
else{
	die('Sorry, try again');
}
mysqli_close($conn);
?>