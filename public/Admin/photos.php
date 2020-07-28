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

 if (isset($_POST['delete'])){
	 $id=$_POST["id"];
$query="delete from gallery where id=$id";
$check=mysqli_query($conn,$query);
if($check==true)
{
	
$section=$_GET['section'];
echo "<script type='text/javascript'>
alert('Photo deleted successfully');
location='photos.php?section=$section';
</script>";	
	
}
else{
	die('Sorry, try again');
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
<div class="container-fluid " >		<!--photo div-->
<div class="row" style="margin-left:200px;">


<?php
include("db_connect.php");
$section=$_GET['section'];
$result=mysqli_query($conn,"select * from gallery where section=$section");
while($row=mysqli_fetch_assoc($result))
{
echo "
<div class='col-sm-4 col-md-4 col-lg-4 col-xl-4'>
<form action='' method='POST'>
<input type='hidden' value='".$row["id"]."' name='id'/>
<div class='gallery_photo_container'>
  <img src='../Admin/uploads/gallery_photos/".$row["picture"]."' alt='No photo found' class='gallery_photo' style='width:100%'>
  <div class='gallery_photo_middle'>
    <div class='gallery_photo_text'><input class='btn btn-ask mouse float-right' type='submit' value='delete' name='delete' />
           </div>
  </div>
</div>
</form>
</div>";
//<img class='gallery_photo img-responsive' alt='no photo found' style='height:200px;width:300px;' src='../Admin/uploads/gallery_photos/".$row["picture"]."'/></a> 
//<input class='btn btn-ask mouse float-center mt-1 ml-5 ml-5' type='submit' value='delete' name='delete' />
           //<a href='.$row['picture'].' target='_blank'>
//<br/><br/><br/>
//</div>
//  ";
}

?>

</div>
</div>						<!--photo div close-->
<br>
<br>
</body>
</html>
<?php
}
?>