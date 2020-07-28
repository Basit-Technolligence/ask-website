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
	$result=mysqli_query($conn,"select * from news where id=$id");
while($row=mysqli_fetch_assoc($result))
{
	$updateNewsName=$row["name"];
	$updateNewsDetail=$row['detail'];
	$updateNewsPhoto=$row['picture'];
	$updateNewsButton="update";
	
}
}
 if (isset($_POST['updateNews'])){
	 $newNewsName=$_POST["name"];
	 $hiddenPhotoValue=$_POST['hiddenPhotoValue'];
	 $newNewsDetail=$_POST["detail"];
	 $picname=$_FILES["photo"]["name"];
	move_uploaded_file($_FILES["photo"]["tmp_name"],'uploads/news/'.$picname);
	if($picname==null)
	{
		$newNewsPicname=$hiddenPhotoValue;
	}
	else
	{
		$newNewsPicname=$picname;
	}
$query="update news set name='$newNewsName',detail='$newNewsDetail',picture='$newNewsPicname' where id=$id";
$check=mysqli_query($conn,$query);
if($check==true)
{
	echo "<script type='text/javascript'>
alert('News updated successfully');
location='news.php';
</script>";
}
else{
	die('Sorry, try again');
}
	 
 }
 if (isset($_POST['news'])){
	 $name=$_POST["name"];
	 $detail=$_POST["detail"];
	 $picname=$_FILES["photo"]["name"];
	move_uploaded_file($_FILES["photo"]["tmp_name"],'uploads/news/'.$picname);
$query="INSERT INTO news (name,detail,picture) values ('$name','$detail','$picname')";
$check=mysqli_query($conn,$query);
if($check==true)
{
echo "<script type='text/javascript'>
alert('News added successfully');
location='news.php';
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
<div class="col-md-7 col-lg-7 col-sm-7 col-xl-7 ml-5 ">
                <label class="control-label">Name:</label>
                
                    <input type="text" class="form-control"  placeholder="Enter Name" required  name="name" value="<?php 
					if (isset($_REQUEST['id'])){ echo $updateNewsName;
					}
					else {echo "";
					}
					?>" />
           
            </div>
<div class="col-md-3 col-lg-3 col-sm-3 col-xl-3">

                <label class="control-label">Photo:</label>
            <input type="file" accept="*.jpg"  class="form-control mb-5" name="photo" />
					<input type="hidden" name="hiddenPhotoValue" value="<?php echo $updateNewsPhoto;?>"/>
            </div>
<div class="col-md-10 col-lg-10 col-sm-10 col-xl-10 ml-5 ">
<textarea cols="15" rows="10" class="form-control" name='detail' required placeholder="write detail here"><?php 
					if (isset($_REQUEST['id'])){ echo $updateNewsDetail;
					}
					
					?></textarea><br/>
		  
<input class="btn btn-ask mouse float-right" type='submit'value="<?php 
					if (isset($_REQUEST['id'])){ echo $updateNewsButton;
					}
					else {echo "submit";
					}
					?>" name="<?php 
					if (isset($_REQUEST['id'])){ echo "updateNews";
					}
					else {echo "news";
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
		<th>Detail</th>
		<th>Picture</th>
		<th> </th>
      </tr>
    </thead>
    <tbody>
<?php
$i=0;
$result=mysqli_query($conn,"select * from news");
while($row=mysqli_fetch_assoc($result))
{
	$i++;
 echo "<tr>
 <td class='text-center'>".$i."</td>
 <td>".$row["name"]."</td>
        <td>".$row["detail"]."</td>
		<td><img class='img-responsive' alt='picture not found' src='uploads/news/".$row["picture"]."' height='50px' width='100px'/></td>
		<td><a href='news.php?id=".$row['id']."'><img src='uploads/edit.png' alt='picture not found' class='float-right' /></a><a href='deletenews.php?id=".$row['id']."'><img src='uploads/delete.png' alt='picture not found' class='float-right' /></a> </td>
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