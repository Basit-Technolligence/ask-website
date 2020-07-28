<?php
	include('db_connect.php');
	if(!$conn){
	die('the connection is not established');
}


?> 

<html>
<head><title>Al-Haytham School</title> 
<link rel="stylesheet" href="bootstrap.css"/>
<link rel="stylesheet" href="newstyle.css"/>
</head>
<body>
<?php
include("db_connect.php");
include("header.php");
?>
<br/>

<div class="container-fluid" > 	
<div class="row">
<div class="text col-md-12 col-lg-12 col-sm-12 col-xl-12">
<h3> Special Classes </h3>

</div>
</div>
</div>
<br/>
<div class="container" > 	
<div class="row">
<div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">

<table class="table table-hover">
    <thead>
      <tr>
	  <th  class="text-center">Sr.</th>
        <th>Title</th>
		<th>Code</th>
		<th></th>
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
		<td><a href='../Academy Admin/uploads/computercourses/".$row['file']."' target='_blank'>view details </a></td>
	</tr>";
}
?>
   </tbody>
  </table>
  </div>
</div>
</div>
<br/>
<div class="container-fluid" > 	
<div class="row">
<div class="text col-md-12 col-lg-12 col-sm-12 col-xl-12">
<h3> Faculty </h3>

</div>
</div>
</div>
<br/>
  <div class="container">
		<div class="row">
<?php
$result=mysqli_query($conn,"select * from academy_alhaytham_computer_faculty");
while($row=mysqli_fetch_assoc($result))
{
echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4'>
                <div class='image-flip' ontouchstart='this.classList.toggle('hover');'>
                    <div class='mainflip'>
                        <div class='frontside'>
                            <div class='card'>
                                <div class='card-body text-center'>
                                    <p><img class=' img-fluid img-responsive' src='../Academy Admin/uploads/alhaytham_computer_faculty/".$row['picture']."' alt='no photo found'></p>
                                    <h4 class='card-title'>".$row['name']."</h4>
                                    <p class='card-text'>".$row['short_description']."</p>
                                   
                                </div>
                            </div>
                        </div>
                        <div class='backside'>
                            <div class='card'>
                                <div class='card-body text-center mt-4'>
                                    <h4 class='card-title'>".$row['name']."</h4>
                                    <p class='card-text'>".$row['long_description']." </p>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> ";
} ?>
</div>

</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php
include("academyfooter.php");
?>





</body>
</html>