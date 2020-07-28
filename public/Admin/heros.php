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

if (isset($_REQUEST['id'])){
	$id=$_GET['id'];
	$result=mysqli_query($conn,"select * from heros where id=$id");
while($row=mysqli_fetch_assoc($result))
{
	$updateName=$row["name"];
	$updatePosition=$row['position'];
	$updateField=$row['field'];
	$updatePhoto=$row['picture'];
	$updateHeroButton="update";
	
}
}
 if (isset($_POST['update'])){
	 $newHeroName=$_POST["name"];
	 $hiddenPhotoValue=$_POST['hiddenPhotoValue'];
	 $newHeroPosition=$_POST["position"];
	 $newHeroField=$_POST["field"];
	 $picname=$_FILES["photo"]["name"];
	move_uploaded_file($_FILES["photo"]["tmp_name"],'uploads/heros/'.$picname);
	if($picname==null)
	{
		$newHeroPicname=$hiddenPhotoValue;
	}
	else
	{
		$newHeroPicname=$picname;
	}
$query="update heros set name='$newHeroName',field='$newHeroField',picture='$newHeroPicname',position='$newHeroPosition' where id=$id";
$check=mysqli_query($conn,$query);
if($check==true)
{
	echo "<script type='text/javascript'>
alert('Data updated successfully');
location='heros.php';
</script>";
}
else{
	die('Sorry, try again');
}
	 
 }
 if (isset($_POST['hero'])){
	 $name=$_POST["name"];
	 $position=$_POST["position"];
	 $field=$_POST["field"];
	 $picname=$_FILES["photo"]["name"];
	move_uploaded_file($_FILES["photo"]["tmp_name"],'uploads/heros/'.$picname);
$query="INSERT INTO heros (name,position,field,picture) values ('$name','$position','$field','$picname')";
$check=mysqli_query($conn,$query);
if($check==true)
{
echo "<script type='text/javascript'>
alert('Data added successfully');
location='heros.php';
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
                <label class="control-label">Name:</label>
                
                    <input type="text" class="form-control"  placeholder="Enter Name" required  name="name" value="<?php 
					if (isset($_REQUEST['id'])){ echo $updateName;
					}
					else {echo "";
					}
					?>" />
           
            </div>
<div class="col-md-5 col-lg-5 col-sm-5 col-xl-5">

                <label class="control-label">Photo:</label>
            <input type="file" accept="*.jpg"  class="form-control mb-5" name="photo" />
					<input type="hidden" name="hiddenPhotoValue" value="<?php echo $hiddenPhotoValue;?>"/>
            </div>
<div class="col-md-5 col-lg-5 col-sm-5 col-xl-5 ml-5 ">
                <label class="control-label">Position:</label>
                
                    <input type="text" class="form-control"  placeholder="Enter Position" required  name="position" value="<?php 
					if (isset($_REQUEST['id'])){ echo $updatePosition;
					}
					else {echo "";
					}
					?>" />
</div>
<div class="col-md-5 col-lg-5 col-sm-5 col-xl-5 ">
                <label class="control-label">Field:</label>
                
                    <input type="text" class="form-control"  placeholder="Enter Field e.g, class, game etc" required  name="field" value="<?php 
					if (isset($_REQUEST['id'])){ echo $updateField;
					}
					else {echo "";
					}
					?>" />
					
					<br/>
		  
<input class="btn btn-ask mouse float-right" type='submit'value="<?php 
					if (isset($_REQUEST['id'])){ echo $updateHeroButton;
					}
					else {echo "submit";
					}
					?>" name="<?php 
					if (isset($_REQUEST['id'])){ echo "update";
					}
					else {echo "hero";
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
		<th>Field</th>
		<th>Position</th>
		<th>Picture</th>
		<th> </th>
      </tr>
    </thead>
    <tbody>
<?php
$i=0;
$result=mysqli_query($conn,"select * from heros");
while($row=mysqli_fetch_assoc($result))
{
	$i++;
 echo "<tr>
 <td class='text-center'>".$i."</td>
 <td>".$row["name"]."</td>
        <td>".$row["field"]."</td>
		<td>".$row["position"]."</td>
		<td><img class='img-responsive' alt='picture not found' src='uploads/heros/".$row["picture"]."' height='50px' width='100px'/></td>
		<td><a href='heros.php?id=".$row['id']."'><img src='uploads/edit.png' alt='picture not found' class='float-right' /></a><a href='deleteheros.php?id=".$row['id']."'><img src='uploads/delete.png' alt='picture not found' class='float-right' /></a> </td>
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