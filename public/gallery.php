
<html>
<head>
<link rel="stylesheet" href="bootstrap.css"/>
<link rel="stylesheet" href="newstyle.css"/>
<title>Al-Haytham School</title>
</head>
<body>
<?php
include('header.php');
include("db_connect.php");
?>
<br/>
<br/>
<?php
$result=mysqli_query($conn,"select DISTINCT section from gallery");
if(mysqli_num_rows($result)<=0){
	echo "<div class='col-md-12 col-lg-12 col-sm-12 col-xl-12 text-center'>";
	echo "<p>comming soon</p> </div>";
}
else{
while($row=mysqli_fetch_assoc($result))
{
$section=$row["section"];
?>
<div class="container-fluid" > <!--year section div-->
<div class="row">
<div class="text col-md-12 col-lg-12 col-sm-12 col-xl-12">
<?php echo "<h3>$section</h3>"; ?>
</div>
</div>			
</div>
<br>
<div class="container" >		<!--photo div-->
<div class="row">


<?php
$check=mysqli_query($conn,"select * from gallery where section=$section");
while($row=mysqli_fetch_assoc($check))
{
echo "
<div class='col-sm-4 col-md-4 col-lg-4 col-xl-4'>
<a href='../Admin/uploads/gallery_photos/".$row["picture"]."' target='_blank'>
<img class='photo img-responsive' alt='photo not found' src='../Admin/uploads/gallery_photos/".$row["picture"]."'/></a> 
<br/><br/><br/>
</div>
  ";
}

?>

</div>
</div>						<!--photo div close-->

<?php 
}
}
?>
<br>

<?php
include('footer.php');
?>


</body>
</html>
