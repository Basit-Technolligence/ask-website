<?php
include("db_connect.php");
$id=$_GET["newsid"];
$query="select * from news where id=".$id;
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{
	$detail=$row["detail"];
	$pic=$row["picture"];
}

?>
<html>
<head>
<link rel="stylesheet" href="bootstrap.css"/>
<link rel="stylesheet" href="newstyle.css"/>
<title>Al-Haytham School</title>
</head>
<body>
<?php
include('header.php');
?>
<br/>
<div class="container text-center">
<div class=" row" >
<div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
<img id="news_detail_pic" class='img-responsive' alt='picture not found' src="../Admin/uploads/news/<?php echo $pic; ?>">
</div>
</div>
<br/>
<div class="row">
<div class="col-md-12 col-lg-12 col-sm-12 col-xl-12 text-justify text2">
 <p> <?php echo "$detail"; ?> </p>


</div>
</div>
</div>
<br/>
<?php
include('footer.php');
?>
</body>
</html>
