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
<div class="container-fluid" > <!--admin table div-->
<div class="row">
<div class="col-md-10 col-lg-10 col-sm-10 col-xl-10 ml-5 ">
<table class="table table-hover text-center">
    <thead>
      <tr>
	  <th  class="text-center">Sr.</th>
        <th  class="text-center">Admin Username</th>
		<th  class="text-center">Admin Password</th>
		<th></th>
      </tr>
    </thead>
    <tbody class='text-center'>
<?php
$i=0;
$result=mysqli_query($conn,"select * from admin where id!=1");
while($row=mysqli_fetch_assoc($result))
{
	$i++;
 echo "<tr>
 <td>".$i."</td>
        <td>".$row["username"]."</td>
		<td>".$row["password"]."</td>
		<td><a href='editAdminControl.php?id=".$row['id']."'><img src='uploads/edit.png' alt='picture not found' class='float-right' /></a> </td>
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
