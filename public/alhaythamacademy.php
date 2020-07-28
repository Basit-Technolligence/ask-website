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
<h3> Tuition Center For All Classes </h3>

</div>
</div>
</div>
<div class="text-center container" style="color:#28166f;"> 	
<div class="row">
<div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
<br/>
<table class="table table-hover text-center"  style="font-family:Times New Roman, Times, serif">
    <thead>
      <tr>
	  <th  class="text-center"><h3>Sr.</h3></th>
        <th  class="text-center"><h3>Classes</h3></th>
      </tr>
    </thead>
    <tbody>
<tr>
<td><h5>1</h5></td>
<td><h5>Playgroup to X </h5>
<h6>(Science & Arts)</h6>
</td>
</tr>
<tr>
<td><h5>2</h5></td>
<td> <h5> A Level & O Level </h5> </td>
</tr>
<tr>
<td><h5>3</h5></td>
<td><h5> BA English, B.Sc </h5> </td> 
</tr>
<tr>
<td><h5>4</h5></td>
<td><h5> I.Com, B.Com </h5></td>
 </tr>
<tr> 
<td><h5>5</h5></td>
<td><h5> FA, F.Sc, ICS </h5> </td>
</tr>
<tr> 
<td><h5>6</h5></td>
<td><h5> DAE </h5></td>
</tr>

   </tbody>
  </table>

</div>
</div>
<div class="row">
<div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">





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
$result=mysqli_query($conn,"select * from academy_alhaytham_faculty");
while($row=mysqli_fetch_assoc($result))
{
echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4'>
                <div class='image-flip' ontouchstart='this.classList.toggle('hover');'>
                    <div class='mainflip'>
                        <div class='frontside'>
                            <div class='card'>
                                <div class='card-body text-center'>
                                    <p><img class=' img-fluid img-responsive' src='../Academy Admin/uploads/alhaytham_faculty/".$row['picture']."' alt='no photo found'></p>
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