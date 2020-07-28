<?php
	include('db_connect.php');
	if(!$conn){
	die('the connection is not established');
}
if(isset($_POST['check_class8'])){
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$result=mysqli_query($conn,"select * from admin where username='class8'");
while($row=mysqli_fetch_assoc($result))
{
	if($row['username']==$username && $row['password']==$password)
	{
			session_start();
	$_SESSION['class8']='class8';
	echo "<script> location='teacherclass8.php';</script>";}
	else
		{
            $error_msg = "username or password is incorrect";
            $script = "<script> $(document).ready(function(){ $('#class8_login').modal('show'); }); </script>";

            }
}
}
if(isset($_POST['check_class9'])){
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$result=mysqli_query($conn,"select * from admin where username='class9'");
while($row=mysqli_fetch_assoc($result))
{
	if($row['username']==$username && $row['password']==$password)
	{
			session_start();
	$_SESSION['class9']='class9';
	echo "<script> location='teacherclass9.php';</script>";}
	else
		{
            $error_msg = "username or password is incorrect";
            $script = "<script> $(document).ready(function(){ $('#class9_login').modal('show'); }); </script>";

            }
}
}
if(isset($_POST['check_class10'])){
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$result=mysqli_query($conn,"select * from admin where username='class10'");
while($row=mysqli_fetch_assoc($result))
{
	if($row['username']==$username && $row['password']==$password)
	{
			session_start();
	$_SESSION['class10']='class10';
	echo "<script> location='teacherclass10.php';</script>";}
	else
		{
            $error_msg = "username or password is incorrect";
            $script = "<script> $(document).ready(function(){ $('#class10_login').modal('show'); }); </script>";

            }
}
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
<br/>
<br/>
<br/>
<br/>

<div class="container" >
<div class="row justify-content-center">
<div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 mt-4">
<form action='' method='post'>
    		    <div class="card profile-card-5">
    		        <div class="card-img-block">
    		            <img class="card-img-top img-responsive" alt='picture not found' src="uploads/montessori.jpg" alt="Card image cap">
    		        </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title">Class 8</h5>
                    <p class="card-text">This section includes play group, nursery, pre-nursery.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" type='submit' name='class8' data-target="#class8">View details</a>
</form>
					 	<!--option modal-->
	<div class="modal fade text-center" id="class8" role="dialog">
    <div class="modal-dialog">
   
      <div class="modal-content">
        <div class="modal-header profile-card-5">
		<h5 class=" modal-title gcolor card-title">Who are you? </h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
		
				<input type="button" value="Student" class="btn btn-lg btn-primary mouse" onclick="window.location='studentclass8.php'" />
				<br/>
				
				<br/>
				<input type="button" value="Teacher" class="btn btn-lg btn-primary mouse" data-dismiss="modal" data-toggle="modal" data-target="#class8_login"/>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>
  

	<!--option modal close-->
	<!--login modal-->
		
		<form action='' method='POST' >
		<div class="modal fade text-center"  id="class8_login" role="dialog">
    <div class="modal-dialog">
	<center>
      <div class="modal-content" style="width:70%">
        <div class="modal-header profile-card-5 gcolor">
		<h5 class="modal-title card-title">Prove your identity</h5>
          <button type="button" class="close mouse" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <input class="form-control" type="text" required placeholder="username" name='username'/><br/>
		  <input class="form-control" required type="password" placeholder="password" name='password'/>
		  <small><p style='color:red' class='float-left'><?php if(isset($error_msg)){ echo $error_msg; } ?></p></small>
		  <br/><br/>
		  <button class="btn btn-primary btn-lg  b_r2 mouse" type='submit' name='check_class8'>
		  
 login
   </button><br/>
   </form>
   <?php if(isset($script)){ echo $script; } ?>
        </div>
		
      </div>
      
    </div>
  </div><!--login close-->
	
                  </div>
                </div>
    		</div>
			
<div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 mt-4">
<form action='' method='post'>
    		    <div class="card profile-card-5">
    		        <div class="card-img-block">
    		            <img class="card-img-top img-responsive" alt='picture not found' src="uploads/junior.jpg" alt="Card image cap">
    		        </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title">Class 9</h5>
                    <p class="card-text">This section includes play group, nursery, pre-nursery.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" type='submit' name='class9' data-target="#class9">View details</a>
</form>
					 	<!--option modal-->
	<div class="modal fade text-center" id="class9" role="dialog">
    <div class="modal-dialog">
   
      <div class="modal-content">
        <div class="modal-header profile-card-5">
		<h5 class=" modal-title gcolor card-title">Who are you? </h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
		
				<input type="button" value="Student" class="btn btn-lg btn-primary mouse" onclick="window.location='studentclass9.php'" />
				<br/>
				
				<br/>
				<input type="button" value="Teacher" class="btn btn-lg btn-primary mouse" data-dismiss="modal" data-toggle="modal" data-target="#class9_login"/>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>
  

	<!--option modal close-->
	<!--login modal-->
		
		<form action='' method='POST' >
		<div class="modal fade text-center"  id="class9_login" role="dialog">
    <div class="modal-dialog">
	<center>
      <div class="modal-content" style="width:70%">
        <div class="modal-header profile-card-5 gcolor">
		<h5 class="modal-title card-title">Prove your identity</h5>
          <button type="button" class="close mouse" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <input class="form-control" type="text" required placeholder="username" name='username'/><br/>
		  <input class="form-control" required type="password" placeholder="password" name='password'/>
		  <small><p style='color:red' class='float-left'><?php if(isset($error_msg)){ echo $error_msg; } ?></p></small>
		  <br/><br/>
		  <button class="btn btn-primary btn-lg  b_r2 mouse" type='submit' name='check_class9'>
		  
 login
   </button><br/>
   </form>
   <?php if(isset($script)){ echo $script; } ?>
        </div>
		
      </div>
      
    </div>
  </div><!--login close-->
	
                  </div>
                </div>
    		</div>
<div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 mt-4">
<form action='' method='post'>
    		    <div class="card profile-card-5">
    		        <div class="card-img-block">
    		            <img class="card-img-top img-responsive" alt='picture not found' src="uploads/montessori.jpg" alt="Card image cap">
    		        </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title">Class 10</h5>
                    <p class="card-text">This section includes play group, nursery, pre-nursery.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" type='submit' name='class10' data-target="#class10">View details</a>
</form>
					 	<!--option modal-->
	<div class="modal fade text-center" id="class10" role="dialog">
    <div class="modal-dialog">
   
      <div class="modal-content">
        <div class="modal-header profile-card-5">
		<h5 class=" modal-title gcolor card-title">Who are you? </h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
		
				<input type="button" value="Student" class="btn btn-lg btn-primary mouse" onclick="window.location='studentclass10.php'" />
				<br/>
				
				<br/>
				<input type="button" value="Teacher" class="btn btn-lg btn-primary mouse" data-dismiss="modal" data-toggle="modal" data-target="#class10_login"/>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>
  

	<!--option modal close-->
	<!--login modal-->
		
		<form action='' method='POST' >
		<div class="modal fade text-center"  id="class10_login" role="dialog">
    <div class="modal-dialog">
	<center>
      <div class="modal-content" style="width:70%">
        <div class="modal-header profile-card-5 gcolor">
		<h5 class="modal-title card-title">Prove your identity</h5>
          <button type="button" class="close mouse" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <input class="form-control" type="text" required placeholder="username" name='username'/><br/>
		  <input class="form-control" required type="password" placeholder="password" name='password'/>
		  <small><p style='color:red' class='float-left'><?php if(isset($error_msg)){ echo $error_msg; } ?></p></small>
		  <br/><br/>
		  <button class="btn btn-primary btn-lg  b_r2 mouse" type='submit' name='check_class10'>
		  
 login
   </button><br/>
   </form>
   <?php if(isset($script)){ echo $script; } ?>
        </div>
		
      </div>
      
    </div>
  </div><!--login close-->
	
                  </div>
                </div>
    		</div>

</div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php
include("footer.php");
?>





</body>
</html>