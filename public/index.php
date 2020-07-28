<!DOCTYPE html>
<html>
<head><title>Al-Haytham School</title> 
<link rel="stylesheet" href="bootstrap.css"/>
<link rel="stylesheet" href="newstyle.css"/>
</head>
<body>
<?php
include("db_connect.php");
include("header.php");
$marquee="";
$result=mysqli_query($conn,"select * from notification");
while($row=mysqli_fetch_assoc($result))
{
$marquee=$marquee."&nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ".$row['detail'];
}
?>
<marquee class="mt-4" style='color:red'><b><?php echo $marquee ?></b></marquee>
<!-- slide show start-->
<div  class="container" > <!--main image div-->
<div id="demo" class="carousel slide mt-4" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
 <?php $i=0;
 $result=mysqli_query($conn,"select * from slideshows");
while($row=mysqli_fetch_assoc($result))
{
	if($i==0)
		echo "<li data-target='#demo' data-slide-to=".$i." class='active'></li>";
	else
		echo "<li data-target='#demo' data-slide-to=".$i."></li> ";
   // <li data-target="#demo" data-slide-to="0" class="active"></li>
   // <li data-target="#demo" data-slide-to="1"></li>
   // <li data-target="#demo" data-slide-to="2"></li>
$i++;
}
  ?>
    </ul>
  <!-- The slideshow -->
  <div class="carousel-inner">
   <?php $i2=0;
 $result=mysqli_query($conn,"select * from slideshows");
while($row=mysqli_fetch_assoc($result))
{
	if($i2==0){
  echo "  <div class='carousel-item active'>";
  echo "    <img src='../Admin/uploads/slideshows/".$row['picture']."' class='img-responsive' alt='picture not found' width='100%' height='500'> ";
  echo " </div> ";
	}
	else{
		  echo "  <div class='carousel-item'>";
  echo "    <img src='../Admin/uploads/slideshows/".$row['picture']."' class='img-responsive' alt='picture not found' width='100%' height='500'> ";
  echo " </div> ";
	}
	$i2++;
 //   <div class="carousel-item">
 //     <img src="uploads/m22.jpg" class="img-responsive" alt='picture not found' width="100%" height="500">
 //   </div>
 //   <div class="carousel-item">
 //     <img src="uploads/m33.jpg" class="img-responsive" alt='picture not found' width="100%" height="500">
 //   </div>
 }
?>
  </div>
 
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div> <!--slide show close-->
</div>
<br/>
<!--welcome div-->
<div class="container" >
<div class="row">
<div class="col-md-6 col-lg-6 col-sm-6 col-xl-6 mt-5 mt-5">
<h2 style="color:#28166f">Welcome to Al-Haytham</h2>
<p>The Al-Haytham School System has risen from its modest beginnings in 1975 as Les Anges Montessori Academy to become a major force in the education world. With an ever-expanding base, already established in the UK, Malaysia, the Philippines, Pakistan, the UAE, Oman, Belgium and Thailand, Beaconhouse is one of the largest private school networks in the world. </p>
</div>
<div class="col-md-6 col-lg-6 col-sm-6 col-xl-6">
<img src="uploads/students.png" alt='picture not found' class="img-responsive" height='100%' width='100%'/>
</div>
</div>
</div>
<!--welcome div end-->
<br/>
<div class="container-fluid" > <!--top news div-->
<div class="row">
<div class="text col-md-12 col-lg-12 col-sm-12 col-xl-12">
<h3>Top News</h3>
</div>
</div>			
</div>
<br/> 
<div class="container" >
<div class="row text-justify text2">
<?php
$result=mysqli_query($conn,"select id,name,substr(detail,1,100),picture from news order by id desc");
$max = mysqli_num_rows($result);
if(mysqli_num_rows($result)<=0){
	echo "<div class='col-md-12 col-lg-12 col-sm-12 col-xl-12 text-center'>";
	echo "<p>comming soon</p> </div>";
}
else{
$tem=$max-3;
while($row=mysqli_fetch_assoc($result))
{
echo "<div class='col-md-4 col-lg-4 col-sm-4 col-xl-4'>";
echo "<div style='overflow:hidden'>";
echo "<img src='../Admin/uploads/news/".$row["picture"]."' alt='picture not found' class='zoom img-responsive news_pic'/>";
echo "</div>";
echo "<p>".$row["substr(detail,1,100)"]."....<a href='news_detail.php?newsid=".$row["id"]."'>read more</a> </p>";
echo "</div>";
$max--;
if($max==$tem)
	break;
}
}
?>

</div> 			<!--row 1 close-->


</div> 						<!--top news div close-->
<br/>
<div class="container-fluid" > <!--our heroes div-->
<div class="row">
<div class="text col-md-12 col-lg-12 col-sm-12 col-xl-12">
<h3>Our Heroes</h3>
</div>
</div>			
</div>
<br/>
<br/>
<div class="container">
<div class="row">
<?php
$end=0;
include("db_connect.php");
$result=mysqli_query($conn,"select * from heros");
if(mysqli_num_rows($result)<=0){
	echo "<div class='col-md-12 col-lg-12 col-sm-12 col-xl-12 text-center'>";
	echo "<p>comming soon</p> </div>";
}
else{
while($row=mysqli_fetch_assoc($result))
{
	$end++;
echo "<div class='col-md-3 col-lg-3 col-sm-3 col-xl-3'>";
 echo "<div class='hero_card'>";
 echo " <img src='/Admin/uploads/heros/".$row['picture']."' class='img-responsive' alt='picture not found' style='width:100%;height:300px'>";
echo " <h4 class='card-title mt-2'>".$row['name']."</h4>";
 echo " <p class='hero_title'>".$row['position']."</p>";
 echo " <p>".$row['field']."</p>";
echo "</div> </div>";
if($end==3)
	break;
}
}
?>

</div>
</div>		<!--heroes div close-->
<br/>
<div class="container-fluid" > 				<!--location txt div-->
<div class="row">
<div class="text col-md-12 col-lg-12 col-sm-12 col-xl-12">
<h3>Our Location</h3>
</div>
</div>
</div>
</br>
<div class="container text-center text2" >			<!--location div-->
<div class=" row"  >
<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 text-justify text2">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3322.6399591751033!2d73.00296960332543!3d33.61464507390626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95692278b6d5%3A0x76aa9cd7b2ee33c8!2sAl-Haytham+School!5e0!3m2!1sen!2s!4v1538323613230" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
</div>

</div><!--location div close-->
<br/>
<?php
include("footer.php");
?>





</body>
</html>