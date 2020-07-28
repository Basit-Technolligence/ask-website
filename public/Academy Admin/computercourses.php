<?php
session_start();
if($_SESSION['auser']==null){
	header('location:index.php');
}
else{
include('db_connect.php');
if(!$conn){
	die('the connection is not established');
}

if (isset($_REQUEST['id'])){
	$id=$_GET['id'];
	$result=mysqli_query($conn,"select * from academy_computercourses where id=$id");
while($row=mysqli_fetch_assoc($result))
{
	$updateTitle=$row["title"];
	$updateCode=$row['code'];
	$updateFile=$row['file'];
	$updateCourseButton="update";
	
}
}
 if (isset($_POST['update'])){
	 $newCourseTitle=$_POST["title"];
	 $hiddenFileValue=$_POST['hiddenFileValue'];
	 $newCourseCode=$_POST["code"];
	 $filename=$_FILES["file"]["name"];
	move_uploaded_file($_FILES["file"]["tmp_name"],'uploads/computercourses/'.$filename);
	if($filename==null)
	{
		$newCourseFilename=$hiddenFileValue;
	}
	else
	{
		$newCourseFilename=$filename;
	}
$query="update academy_computercourses set title='$newCourseTitle',code='$newCourseCode',file='$newCourseFilename' where id=$id";
$check=mysqli_query($conn,$query);
if($check==true)
{
	echo "<script type='text/javascript'>
alert('Data updated successfully');
location='computercourses.php';
</script>";
}
else{
	die('Sorry, try again');
}
	 
 }
 if (isset($_POST['course'])){
	 $title=$_POST["title"];
	 $code=$_POST["code"];
	 $filename=$_FILES["file"]["name"];
	move_uploaded_file($_FILES["file"]["tmp_name"],'uploads/computercourses/'.$filename);
$query="INSERT INTO academy_computercourses (title,code,file) values ('$title','$code','$filename')";
$check=mysqli_query($conn,$query);
if($check==true)
{
echo "<script type='text/javascript'>
alert('Data added successfully');
location='computercourses.php';
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
<div class="container-fluid" > <!--news div-->
<form  action='' method='post' enctype="multipart/form-data">
<div class="row">
<div class="col-md-5 col-lg-5 col-sm-5 col-xl-5 ml-5 ">
               <label class="control-label">Code:</label>
                
                    <input type="text" class="form-control"  placeholder="Enter Course Code" required  name="code" value="<?php 
					if (isset($_REQUEST['id'])){ echo $updateCode;
					}
					else {echo "";
					}
					?>" />
           
            </div>
<div class="col-md-5 col-lg-5 col-sm-5 col-xl-5">

                <label class="control-label">Choose word/pdf file</label>
            <input type="file"   class="form-control mb-5" name="file" />
					<input type="hidden" name="hiddenFileValue" value="<?php echo $updateFile;?>"/>
            </div>
<div class="col-md-10 col-lg-10 col-sm-10 col-xl-10 ml-5 ">
                  <label class="control-label">Title:</label>
                
                    <input type="text" class="form-control"  placeholder="Enter Course Title" required  name="title" value="<?php 
					if (isset($_REQUEST['id'])){ echo $updateTitle;
					}
					else {echo "";
					}
					?>" />
		  <br/>
<input class="btn btn-ask mouse float-right" type='submit'value="<?php 
					if (isset($_REQUEST['id'])){ echo $updateCourseButton;
					}
					else {echo "submit";
					}
					?>" name="<?php 
					if (isset($_REQUEST['id'])){ echo "update";
					}
					else {echo "course";
					}
					?>" />
</div>

</div>
</form>
<br/>
<div class="row">
<div class="col-md-10 col-lg-10 col-sm-10 col-xl-10 ml-5 ">
<table class="table table-hover">
    <thead>
      <tr>
	  <th  class="text-center">Sr.</th>
        <th>Title</th>
		<th>Code</th>
		<th></th>
		<th> </th>
      </tr>
    </thead>
    <tbody>
<?php
$i=0;
$result=mysqli_query($conn,"select * from academy_computercourses");
while($row=mysqli_fetch_assoc($result))
{
	$i++;
 echo "<tr>
 <td class='text-center'>".$i."</td>
 <td>".$row["title"]."</td>
        <td>".$row["code"]."</td>
		<td><a href='uploads/computercourses/".$row['file']."' target='_blank'>view details </a></td>
		<td><a href='computercourses.php?id=".$row['id']."'><img src='uploads/edit.png' alt='picture not found' class='float-right' /></a><a href='deletecomputercourses.php?id=".$row['id']."'><img src='uploads/delete.png' alt='picture not found' class='float-right' /></a> </td>
      </tr>";
}
?>
   </tbody>
  </table>
</div>
</div>		
<br>
<br>
</body>
</html>
<?php
}
?>