<?php
session_start();
include('db_connect.php');
if(!$conn){
	die('the connection is not established');
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
<br/>
<div class="container-fluid" > <!--Syllabus div-->
<div class="row">
<div class="text col-md-12 col-lg-12 col-sm-12 col-xl-12">
<h3>Syllabus</h3>
</div>
</div>			
</div>
<br>
<div class="container" >
<div class="row">
<div class="col-md-12 col-lg-12 col-sm-12 col-xl-12 text-center">
<?php
$result=mysqli_query($conn,"select syllabus_file,syllabus_photo from class_content where class='class3'");
while($row=mysqli_fetch_assoc($result))
{
if($row['syllabus_photo']!=null){
echo "<p> <a href='uploads/class3/".$row['syllabus_photo']."' target='_blank'>Click here</a> to view syllabus in photo</p>";
}
if($row['syllabus_file']!=null){
if($row['syllabus_file']!=null && $row['syllabus_photo']!=null) echo "<p>OR</p>";
echo "<p> <a href='uploads/class3/".$row['syllabus_file']."' target='_blank'>Click here</a> to view syllabus in pdf/word</p>";
}
if($row['syllabus_file']==null && $row['syllabus_photo']==null){
	echo "<p>Comming soon</p>";
}
}	
?>
</div>
</div>	
</div>					<!--syllabus div end-->
<br>
<br/>
<div class="container-fluid" > <!--course div-->
<div class="row">
<div class="text col-md-12 col-lg-12 col-sm-12 col-xl-12">
<h3>Course</h3>
</div>
</div>			
</div>
<br>
<div class="container" >
<div class="row">
<div class="col-md-12 col-lg-12 col-sm-12 col-xl-12 text-center">
<?php
$result=mysqli_query($conn,"select course_file,course_photo from class_content where class='class3'");
while($row=mysqli_fetch_assoc($result))
{
if($row['course_photo']!=null){
echo "<p> <a href='uploads/class3/".$row['course_photo']."' target='_blank'>Click here</a> to view course in photo</p>";
}
if($row['course_file']!=null){
if($row['course_file']!=null && $row['course_photo']!=null) echo "<p>OR</p>";
echo "<p> <a href='uploads/class3/".$row['course_file']."' target='_blank'>Click here</a> to view course in pdf/word</p>";
}
if($row['course_file']==null && $row['course_photo']==null){
	echo "<p>Comming soon</p>";
}
}	
?>
</div>
</div>	
</div>								<!--course div end-->
<br>
<br/>
<div class="container-fluid" > <!--Sample paper div-->
<div class="row">
<div class="text col-md-12 col-lg-12 col-sm-12 col-xl-12">
<h3>Sample Paper</h3>
</div>
</div>			
</div>
<br>
<div class="container" >
<div class="row">
<div class="col-md-12 col-lg-12 col-sm-12 col-xl-12 text-center">
<?php
$result=mysqli_query($conn,"select samplepaper_file,samplepaper_photo from class_content where class='class3'");
while($row=mysqli_fetch_assoc($result))
{
if($row['samplepaper_photo']!=null){
echo "<p> <a href='uploads/class3/".$row['samplepaper_photo']."' target='_blank'>Click here</a> to view sample paper in photo</p>";
}
if($row['samplepaper_file']!=null){
if($row['samplepaper_file']!=null && $row['samplepaper_photo']!=null) echo "<p>OR</p>";
echo "<p> <a href='uploads/class3/".$row['samplepaper_file']."' target='_blank'>Click here</a> to view sample paper in pdf/word</p>";
}
if($row['samplepaper_file']==null && $row['samplepaper_photo']==null){
	echo "<p>Comming soon</p>";
}
}	
?>
</div>
</div>	
</div>							<!--sample paper div end-->
<br>
<br/>
<div class="container-fluid" > <!--Datesheet div-->
<div class="row">
<div class="text col-md-12 col-lg-12 col-sm-12 col-xl-12">
<h3>Datesheet</h3>
</div>
</div>			
</div>
<br>
<div class="container" >
<div class="row">
<div class="col-md-12 col-lg-12 col-sm-12 col-xl-12 text-center">
<?php
$result=mysqli_query($conn,"select datesheet_file,datesheet_photo from class_content where class='class3'");
while($row=mysqli_fetch_assoc($result))
{
if($row['datesheet_photo']!=null){
echo "<p> <a href='uploads/class3/".$row['datesheet_photo']."' target='_blank'>Click here</a> to view datesheet in photo</p>";
}
if($row['datesheet_file']!=null){
if($row['datesheet_file']!=null && $row['datesheet_photo']!=null) echo "<p>OR</p>";
echo "<p> <a href='uploads/class3/".$row['datesheet_file']."' target='_blank'>Click here</a> to view datesheet in pdf/word</p>";
}
if($row['datesheet_file']==null && $row['datesheet_photo']==null){
	echo "<p>Comming soon</p>";
}
}	
?>
</div>
</div>	
</div>					<!--datesheet div end-->
<br/>
<br/>
<?php
include('footer.php');
?>


</body>
</html>
