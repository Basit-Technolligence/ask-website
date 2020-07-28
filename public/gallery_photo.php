<html>
<head>
<head><title>Real madrid</title> 
<link rel="stylesheet" href="bootstrap.css"/>
<link rel="stylesheet" href="newstyle.css"/>
</head>

<body id="body_color">
<?php include('header.php'); ?>
<br/>
<div class="container" >		<!--photo div-->
<div class="row">


<?php
include("db_connect.php");
$result=mysqli_query($conn,"select * from photos");
while($row=mysqli_fetch_assoc($result))
{
echo "
<div class='col-sm-4 col-md-4 col-lg-4 col-xl-4'>
<a href='".$row["picture"]."' target='_blank'>
<img class='photo img-responsive' src='".$row["picture"]."'/></a> 
<br/><br/><br/>
</div>
  ";
}

?>

</div>
</div>						<!--photo div close-->
<br/>
<?php include('footer.php'); ?>
</body>
</html>