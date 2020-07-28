<?php
session_start();
if($_SESSION['playgroup']==null){
	die('You cannot access this page');
}
else{
include('db_connect.php');
if(!$conn){
	die('the connection is not established');
}
//datesheet
if (isset($_POST['datesheet_photo'])){
	 $picname=$_FILES["datesheet_photo"]["name"];
	move_uploaded_file($_FILES["datesheet_photo"]["tmp_name"],'uploads/playgroup/'.$picname);
$query="update class_content set datesheet_photo='$picname' where class='playgroup'";
$check=mysqli_query($conn,$query);
if($check==true)
{
echo "<script type='text/javascript'>
alert('Photo added successfully');
location='teacherplaygroup.php';
</script>";	
	
}
else{
	die('Sorry, try again');
}
 }

 if (isset($_POST['datesheet_file'])){
	 $filename=$_FILES["datesheet_file"]["name"];
	move_uploaded_file($_FILES["datesheet_file"]["tmp_name"],'uploads/playgroup/'.$filename);
$query="update class_content set datesheet_file='$filename' where class='playgroup'";
$check=mysqli_query($conn,$query);
if($check==true)
{
echo "<script type='text/javascript'>
alert('File added successfully');
location='teacherplaygroup.php';
</script>";	
	
}
else{
	die('Sorry, try again');
}
 }
 //datesheet end
//samplepaper
if (isset($_POST['samplepaper_photo'])){
	 $picname=$_FILES["samplepaper_photo"]["name"];
	move_uploaded_file($_FILES["samplepaper_photo"]["tmp_name"],'uploads/playgroup/'.$picname);
$query="update class_content set samplepaper_photo='$picname' where class='playgroup'";
$check=mysqli_query($conn,$query);
if($check==true)
{
echo "<script type='text/javascript'>
alert('Photo added successfully');
location='teacherplaygroup.php';
</script>";	
	
}
else{
	die('Sorry, try again');
}
 }

 if (isset($_POST['samplepaper_file'])){
	 $filename=$_FILES["samplepaper_file"]["name"];
	move_uploaded_file($_FILES["samplepaper_file"]["tmp_name"],'uploads/playgroup/'.$filename);
$query="update class_content set samplepaper_file='$filename' where class='playgroup'";
$check=mysqli_query($conn,$query);
if($check==true)
{
echo "<script type='text/javascript'>
alert('File added successfully');
location='teacherplaygroup.php';
</script>";	
	
}
else{
	die('Sorry, try again');
}
 }
 //samplepaper end
//course
if (isset($_POST['course_photo'])){
	 $picname=$_FILES["course_photo"]["name"];
	move_uploaded_file($_FILES["course_photo"]["tmp_name"],'uploads/playgroup/'.$picname);
$query="update class_content set course_photo='$picname' where class='playgroup'";
$check=mysqli_query($conn,$query);
if($check==true)
{
echo "<script type='text/javascript'>
alert('Photo added successfully');
location='teacherplaygroup.php';
</script>";	
	
}
else{
	die('Sorry, try again');
}
 }

 if (isset($_POST['course_file'])){
	 $filename=$_FILES["course_file"]["name"];
	move_uploaded_file($_FILES["course_file"]["tmp_name"],'uploads/playgroup/'.$filename);
$query="update class_content set course_file='$filename' where class='playgroup'";
$check=mysqli_query($conn,$query);
if($check==true)
{
echo "<script type='text/javascript'>
alert('File added successfully');
location='teacherplaygroup.php';
</script>";	
	
}
else{
	die('Sorry, try again');
}
 }
 //course end
//syllabus
if (isset($_POST['syllabus_photo'])){
	 $picname=$_FILES["syllabus_photo"]["name"];
	move_uploaded_file($_FILES["syllabus_photo"]["tmp_name"],'uploads/playgroup/'.$picname);
$query="update class_content set syllabus_photo='$picname' where class='playgroup'";
$check=mysqli_query($conn,$query);
if($check==true)
{
echo "<script type='text/javascript'>
alert('Photo added successfully');
location='teacherplaygroup.php';
</script>";	
	
}
else{
	die('Sorry, try again');
}
 }

 if (isset($_POST['syllabus_file'])){
	 $filename=$_FILES["syllabus_file"]["name"];
	move_uploaded_file($_FILES["syllabus_file"]["tmp_name"],'uploads/playgroup/'.$filename);
$query="update class_content set syllabus_file='$filename' where class='playgroup'";
$check=mysqli_query($conn,$query);
if($check==true)
{
echo "<script type='text/javascript'>
alert('File added successfully');
location='teacherplaygroup.php';
</script>";	
	
}
else{
	die('Sorry, try again');
}
 }
 //syllabus end


?>
<html>
<head>
<link rel="stylesheet" href="bootstrap.css"/>
<link rel="stylesheet" href="newstyle.css"/>
<title>Al-Haytham School</title>
<style>
.btn-ask{
    background-color:#28166f;
    border-color:#4E5E30;
	color:#FFFFFF;
}

</style>
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
$result=mysqli_query($conn,"select syllabus_file,syllabus_photo from class_content where class='playgroup'");
while($row=mysqli_fetch_assoc($result))
{
if($row['syllabus_photo']!=null){
echo "<p> <a href='uploads/playgroup/".$row['syllabus_photo']."' target='_blank'>Click here</a> to view syllabus in photo <a href='deletesyllabusphoto.php?class=playgroup&photo=syllabus_photo'><img src='../Admin/uploads/delete.png' alt='picture not found'  /></a></p>";
}
if($row['syllabus_file']!=null){
if($row['syllabus_file']!=null && $row['syllabus_photo']!=null) echo "<p>OR</p>";
echo "<p> <a href='uploads/playgroup/".$row['syllabus_file']."' target='_blank'>Click here</a> to view syllabus in pdf/word <a href='deletesyllabusfile.php?class=playgroup&file=syllabus_file'><img src='../Admin/uploads/delete.png' alt='picture not found'  /></a></p>";
}
if($row['syllabus_file']==null && $row['syllabus_photo']==null){
	echo "<p>No record found</p>";
}
}	
?>
</div>
</div>
<div class="row">
<div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">

<form  action="" method="post" enctype="multipart/form-data">
<label class="control-label">Select Photo:</label>
<input type="file" accept="*.jpg"  class="form-control mb-2" name="syllabus_photo" />
<input class="btn btn-ask mouse float-right" type="submit" value="submit" name="syllabus_photo" />
</form>
</div>
<div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">
</div>
<div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">
<form  action="" method="post" enctype="multipart/form-data">
<label class="control-label">Select pdf/word file:</label>
<input type="file"  class="form-control mb-2" name="syllabus_file" />
<input class="btn btn-ask mouse float-right" type="submit" value="submit" name="syllabus_file" />
</form>
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
$result=mysqli_query($conn,"select course_file,course_photo from class_content where class='playgroup'");
while($row=mysqli_fetch_assoc($result))
{
if($row['course_photo']!=null){
echo "<p> <a href='uploads/playgroup/".$row['course_photo']."' target='_blank'>Click here</a> to view course in photo  <a href='deletesyllabusphoto.php?class=playgroup&photo=course_photo'><img src='../Admin/uploads/delete.png' alt='picture not found'  /></a></p>";
}
if($row['course_file']!=null){
if($row['course_file']!=null && $row['course_photo']!=null) echo "<p>OR</p>";
echo "<p> <a href='uploads/playgroup/".$row['course_file']."' target='_blank'>Click here</a> to view course in pdf/word  <a href='deletesyllabusfile.php?class=playgroup&file=course_file'><img src='../Admin/uploads/delete.png' alt='picture not found'  /></a></p>";
}
if($row['course_file']==null && $row['course_photo']==null){
	echo "<p>No record found</p>";
}
}	
?>
</div>
</div>
<div class="row">
<div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">

<form  action="" method="post" enctype="multipart/form-data">
<label class="control-label">Select Photo:</label>
<input type="file" accept="*.jpg" required class="form-control mb-2" name="course_photo" />
<input class="btn btn-ask mouse float-right" type="submit" value="submit" name="course_photo" />
</form>
</div>
<div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">
</div>
<div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">
<form  action="" method="post" enctype="multipart/form-data">
<label class="control-label">Select pdf/word file:</label>
<input type="file"  class="form-control mb-2" required name="course_file" />
<input class="btn btn-ask mouse float-right" type="submit" value="submit" name="course_file" />
</form>
</div>
</div>				
</div>					<!--course div end-->
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
$result=mysqli_query($conn,"select samplepaper_file,samplepaper_photo from class_content where class='playgroup'");
while($row=mysqli_fetch_assoc($result))
{
if($row['samplepaper_photo']!=null){
echo "<p> <a href='uploads/playgroup/".$row['samplepaper_photo']."' target='_blank'>Click here</a> to view sample paper in photo  <a href='deletesyllabusphoto.php?class=playgroup&photo=samplepaper_photo'><img src='../Admin/uploads/delete.png' alt='picture not found'  /></a></p>";
}
if($row['samplepaper_file']!=null){
if($row['samplepaper_file']!=null && $row['samplepaper_photo']!=null) echo "<p>OR</p>";
echo "<p> <a href='uploads/playgroup/".$row['samplepaper_file']."' target='_blank'>Click here</a> to view sample paper in pdf/word  <a href='deletesyllabusfile.php?class=playgroup&file=samplepaper_file'><img src='../Admin/uploads/delete.png' alt='picture not found'  /></a></p>";
}
if($row['samplepaper_file']==null && $row['samplepaper_photo']==null){
	echo "<p>No record found</p>";
}
}	
?>
</div>
</div>	
<div class="row">
<div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">

<form  action="" method="post" enctype="multipart/form-data">
<label class="control-label">Select Photo:</label>
<input type="file" accept="*.jpg"  class="form-control mb-2" required name="samplepaper_photo" />
<input class="btn btn-ask mouse float-right" type="submit" value="submit" name="samplepaper_photo" />
</form>
</div>
<div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">
</div>
<div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">
<form  action="" method="post" enctype="multipart/form-data">
<label class="control-label">Select pdf/word file:</label>
<input type="file"  class="form-control mb-2" required name="samplepaper_file" />
<input class="btn btn-ask mouse float-right" type="submit" value="submit" name="samplepaper_file" />
</form>
</div>
</div>			
</div>					<!--sample paper div end-->
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
$result=mysqli_query($conn,"select datesheet_file,datesheet_photo from class_content where class='playgroup'");
while($row=mysqli_fetch_assoc($result))
{
if($row['datesheet_photo']!=null){
echo "<p> <a href='uploads/playgroup/".$row['datesheet_photo']."' target='_blank'>Click here</a> to view datesheet in photo  <a href='deletesyllabusphoto.php?class=playgroup&photo=datesheet_photo'><img src='../Admin/uploads/delete.png' alt='picture not found'  /></a></p>";
}
if($row['datesheet_file']!=null){
if($row['datesheet_file']!=null && $row['datesheet_photo']!=null) echo "<p>OR</p>";
echo "<p> <a href='uploads/playgroup/".$row['datesheet_file']."' target='_blank'>Click here</a> to view datesheet in pdf/word  <a href='deletesyllabusfile.php?class=playgroup&file=datesheet_file'><img src='../Admin/uploads/delete.png' alt='picture not found'  /></a></p>";
}
if($row['datesheet_file']==null && $row['datesheet_photo']==null){
	echo "<p>No record found</p>";
}
}	
?>
</div>
</div>	
<div class="row">
<div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">

<form  action="" method="post" enctype="multipart/form-data">
<label class="control-label">Select Photo:</label>
<input type="file" accept="*.jpg" required class="form-control mb-2" name="datesheet_photo" />
<input class="btn btn-ask mouse float-right" type="submit" value="submit" name="datesheet_photo" />
</form>
</div>
<div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">
</div>
<div class="col-md-4 col-lg-4 col-sm-4 col-xl-4">
<form  action="" method="post" enctype="multipart/form-data">
<label class="control-label">Select pdf/word file:</label>
<input type="file"  class="form-control mb-2" required name="datesheet_file" />
<input class="btn btn-ask mouse float-right" type="submit" value="submit" name="datesheet_file" />
</form>
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
<?php
}
?>