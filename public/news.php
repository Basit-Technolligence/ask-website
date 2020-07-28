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
<div class="container text2 text-justify" >
<!--php code-->
<?php
include("db_connect.php");
$result=mysqli_query($conn,"select id,name,substr(detail,1,200),picture from news order by id desc");
if(mysqli_num_rows($result)<=0){
	echo "<div class='col-md-12 col-lg-12 col-sm-12 col-xl-12 text-center'>";
	echo "<p>comming soon</p> </div>";
}
else{
while($row=mysqli_fetch_assoc($result))
{
echo "<div class=' row'  >";
echo "<div class='col-md-3 col-lg-3 col-sm-3 col-xl-3'>";
echo "<a href='news_detail.php?newsid=".$row["id"]."'>";
echo "<div style='overflow:hidden'>";
echo "<img class='news_pg_pic img-responsive zoom' alt='picture not found' src='../Admin/uploads/news/".$row["picture"]."'></a>";
echo "</div>";
echo "</div>";
echo "<div class='col-md-9 col-lg-9 col-sm-9 col-xl-9'>";
echo "<h4 >".$row["name"]."</h4>";
echo "<p>".$row["substr(detail,1,200)"]."...<a href='news_detail.php?newsid=".$row["id"]."'>read more</a> </p>";
echo "</div></div><hr/>";
}
}
?>
<!--php code-->
</div>
<br>
<br>

<?php
include('footer.php');
?>


</body>
</html>
