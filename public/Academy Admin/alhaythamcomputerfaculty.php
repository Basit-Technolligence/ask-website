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
	$result=mysqli_query($conn,"select * from academy_alhaytham_computer_faculty where id=$id");
while($row=mysqli_fetch_assoc($result))
{
	$updateFacultyName=$row["name"];
	$updateFacultyLong=$row['long_description'];
	$updateFacultyShort=$row['short_description'];
	$updateFacultyPhoto=$row['picture'];
	$updateFacultyButton="update";
	
}
}
 if (isset($_POST['updateFaculty'])){
	 $newFacultyName=$_POST["name"];
	 $hiddenPhotoValue=$_POST['hiddenPhotoValue'];
	 $newFacultyLong=$_POST["long_description"];
	 $newFacultyShort=$_POST["short_description"];
	 $picname=$_FILES["photo"]["name"];
	move_uploaded_file($_FILES["photo"]["tmp_name"],'uploads/alhaytham_computer_faculty/'.$picname);
	if($picname==null)
	{
		$newFacultyPicname=$hiddenPhotoValue;
	}
	else
	{
		$newFacultyPicname=$picname;
	}
$query="update academy_alhaytham_computer_faculty set name='$newFacultyName',long_description='$newFacultyLong',picture='$newFacultyPicname',short_description='$newFacultyShort' where id=$id";
$check=mysqli_query($conn,$query);
if($check==true)
{
	echo "<script type='text/javascript'>
alert('Faculty updated successfully');
location='alhaythamcomputerfaculty.php';
</script>";
}
else{
	die('Sorry, try again');
}
	 
 }
 if (isset($_POST['faculty'])){
	 $name=$_POST["name"];
	 $short=$_POST["short_description"];
	 $long=$_POST["long_description"];
	 $picname=$_FILES["photo"]["name"];
	move_uploaded_file($_FILES["photo"]["tmp_name"],'uploads/alhaytham_computer_faculty/'.$picname);
$query="INSERT INTO academy_alhaytham_computer_faculty (name,long_description,short_description,picture) values ('$name','$long','$short','$picname')";
$check=mysqli_query($conn,$query);
if($check==true)
{
echo "<script type='text/javascript'>
alert('Faculty added successfully');
location='alhaythamcomputerfaculty.php';
</script>";	
	
}
else{
	die ('Sorry, try again'); //(mysqli_error($conn));  
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
<div class="col-md-7 col-lg-7 col-sm-7 col-xl-7 ml-5 ">
                <label class="control-label">Name:</label>
                
                    <input type="text" class="form-control"  placeholder="Enter Name" required  name="name" value="<?php 
					if (isset($_REQUEST['id'])){ echo $updateFacultyName;
					}
					else {echo "";
					}
					?>" />
           
            </div>
<div class="col-md-3 col-lg-3 col-sm-3 col-xl-3">

                <label class="control-label">Photo:</label>
            <input type="file" accept="*.jpg"  class="form-control mb-5" name="photo" />
					<input type="hidden" name="hiddenPhotoValue" value="<?php echo $updateFacultyPhoto;?>"/>
            </div>
<div class="col-md-10 col-lg-10 col-sm-10 col-xl-10 ml-5 ">
 <label class="control-label">Short Description:</label>
          <input type="text" class="form-control"  placeholder="Enter short description" required  name="short_description" value="<?php 
					if (isset($_REQUEST['id'])){ echo $updateFacultyShort;
					}
					else {echo "";
					}
					?>" /><br/>

</div>
<div class="col-md-10 col-lg-10 col-sm-10 col-xl-10 ml-5 ">
<textarea cols="15" rows="10" class="form-control" name='long_description' required placeholder="write long description"><?php 
					if (isset($_REQUEST['id'])){ echo $updateFacultyLong;
					}
					
					?></textarea><br/>
		  
<input class="btn btn-ask mouse float-right" type='submit'value="<?php 
					if (isset($_REQUEST['id'])){ echo $updateFacultyButton;
					}
					else {echo "submit";
					}
					?>" name="<?php 
					if (isset($_REQUEST['id'])){ echo "updateFaculty";
					}
					else {echo "faculty";
					}
					?>" />
</div>

</div>
</form>
</div>	
<br/>
<div class="row">
<div class="col-md-10 col-lg-10 col-sm-10 col-xl-10 ml-5 ">
<table class="table table-hover">
    <thead>
      <tr>
	  <th  class="text-center">Sr.</th>
        <th>Name</th>
		<th>Short Des</th>
		<th>Long Des</th>
		<th>Picture</th>
		<th> </th>
      </tr>
    </thead>
    <tbody>
<?php
$i=0;
$result=mysqli_query($conn,"select * from academy_alhaytham_computer_faculty");
while($row=mysqli_fetch_assoc($result))
{
	$i++;
 echo "<tr>
 <td class='text-center'>".$i."</td>
 <td>".$row["name"]."</td>
        <td>".$row["short_description"]."</td>
		<td>".$row["long_description"]."</td>
		<td><img class='img-responsive' alt='picture not found' src='uploads/alhaytham_computer_faculty/".$row["picture"]."' height='50px' width='100px'/></td>
		<td><a href='alhaythamcomputerfaculty.php?id=".$row['id']."'><img src='uploads/edit.png' alt='picture not found' class='float-right' /></a><a href='deletealhaythamcomputerfaculty.php?id=".$row['id']."'><img src='uploads/delete.png' alt='picture not found' class='float-right' /></a> </td>
      </tr>";
}
?>
   </tbody>
  </table>
</div>
</div>			
</div>
<br>
<br>
</body>
</html>
<?php
}
?>