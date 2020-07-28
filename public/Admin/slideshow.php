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

if(isset($_POST['btn_slide']))
{
	for($i = 0; $i < count($_FILES['file_img']['name']); $i++)
	{
		$filetmp = $_FILES["file_img"]["tmp_name"][$i];
		$filename = $_FILES["file_img"]["name"][$i];
		$filetype = $_FILES["file_img"]["type"][$i];
		$filepath = "uploads/slideshows/".$filename;
	
	move_uploaded_file($filetmp,$filepath);
	
	$sql = "INSERT INTO slideshows (picture) VALUES ('$filename')";
	$result = mysqli_query($conn,$sql);
	
	}

if($result==true)
{
echo "<script type='text/javascript'>
alert('Photos uploaded successfully');
location='slideshow.php';
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
<div class="container-fluid" > <!--photos div-->
<form  action='' method='post' enctype="multipart/form-data">
<div class="row justify-content-center">
<div class="col-md-3 col-lg-3 col-sm-3 col-xl-3 ml-5">

                <label class="control-label">Select Photos:</label>
            <input type="file" accept="*.jpg"  class="form-control mb-5" name="file_img[]" multiple="multiple" />
			<input class="btn btn-ask mouse float-right" type='submit' value="upload" name="btn_slide"/>
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
        <th class="text-center">Picture</th>
		<th></th>
      </tr>
    </thead>
    <tbody>
<?php
$i=0;
$result=mysqli_query($conn,"select * from slideshows");
while($row=mysqli_fetch_assoc($result))
{
	$i++;
 echo "<tr>
 <td class='text-center'>".$i."</td>
        <td class='text-center'><a href='../Admin/uploads/slideshows/".$row["picture"]."' target='_blank'>
<img class='photo img-responsive' alt='photo not found' src='../Admin/uploads/slideshows/".$row["picture"]."' height='50px' width='100px'/></a> </td>
		<td><a href='deleteslideshows.php?id=".$row['id']."'><img src='uploads/delete.png' alt='picture not found' class='float-right' /></a> </td>
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