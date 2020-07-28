<?php
include("db_connect.php");
if(!$conn){
	die('the connection is not established');
}

$class=$_GET['class'];
$file=$_GET['file'];
$query="update class_content set $file='' where class='$class'";
$check=mysqli_query($conn,$query);
if($check==true){
	echo "<script type='text/javascript'>
alert('File deleted successfully');
location='".$_SERVER['HTTP_REFERER']."';
</script>";
}
else{
	die('Sorry, try again');
}
mysqli_close($conn);
?>