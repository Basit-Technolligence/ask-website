<?php
	include('db_connect.php');
	if(!$conn){
	die('the connection is not established');
}
if(isset($_POST['check_class5'])){
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$result=mysqli_query($conn,"select * from admin where username='class5'");
while($row=mysqli_fetch_assoc($result))
{
	if($row['username']==$username && $row['password']==$password)
	{
			session_start();
	$_SESSION['class5']='class5';
	echo "<script> location='teacherclass5.php';</script>";}
	else
		{
            $error_msg = "username or password is incorrect";
            $script = "<script> $(document).ready(function(){ $('#class5_login').modal('show'); }); </script>";

            }
}
}
if(isset($_POST['check_class6'])){
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$result=mysqli_query($conn,"select * from admin where username='class6'");
while($row=mysqli_fetch_assoc($result))
{
	if($row['username']==$username && $row['password']==$password)
	{
			session_start();
	$_SESSION['class6']='class6';
	echo "<script> location='teacherclass6.php';</script>";}
	else
		{
            $error_msg = "username or password is incorrect";
            $script = "<script> $(document).ready(function(){ $('#class6_login').modal('show'); }); </script>";

            }
}
}
if(isset($_POST['check_class7'])){
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$result=mysqli_query($conn,"select * from admin where username='class7'");
while($row=mysqli_fetch_assoc($result))
{
	if($row['username']==$username && $row['password']==$password)
	{
			session_start();
	$_SESSION['class7']='class7';
	echo "<script> location='teacherclass7.php';</script>";}
	else
		{
            $error_msg = "username or password is incorrect";
            $script = "<script> $(document).ready(function(){ $('#class7_login').modal('show'); }); </script>";

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
                    <h5 class="card-title">Class 5</h5>
                    <p class="card-text">This section includes play group, nursery, pre-nursery.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" type='submit' name='class5' data-target="#class5">View details</a>
</form>
					 	<!--option modal-->
	<div class="modal fade text-center" id="class5" role="dialog">
    <div class="modal-dialog">
   
      <div class="modal-content">
        <div class="modal-header profile-card-5">
		<h5 class=" modal-title gcolor card-title">Who are you? </h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
		
				<input type="button" value="Student" class="btn btn-lg btn-primary mouse" onclick="window.location='studentclass5.php'" />
				<br/>
				
				<br/>
				<input type="button" value="Teacher" class="btn btn-lg btn-primary mouse" data-dismiss="modal" data-toggle="modal" data-target="#class5_login"/>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>
  

	<!--option modal close-->
	<!--login modal-->
		
		<form action='' method='POST' >
		<div class="modal fade text-center"  id="class5_login" role="dialog">
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
		  <button class="btn btn-primary btn-lg  b_r2 mouse" type='submit' name='check_class5'>
		  
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
                    <h5 class="card-title">Class 6</h5>
                    <p class="card-text">This section includes play group, nursery, pre-nursery.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" type='submit' name='class6' data-target="#class6">View details</a>
</form>
					 	<!--option modal-->
	<div class="modal fade text-center" id="class6" role="dialog">
    <div class="modal-dialog">
   
      <div class="modal-content">
        <div class="modal-header profile-card-5">
		<h5 class=" modal-title gcolor card-title">Who are you? </h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
		
				<input type="button" value="Student" class="btn btn-lg btn-primary mouse" onclick="window.location='studentclass6.php'" />
				<br/>
				
				<br/>
				<input type="button" value="Teacher" class="btn btn-lg btn-primary mouse" data-dismiss="modal" data-toggle="modal" data-target="#class6_login"/>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>
  

	<!--option modal close-->
	<!--login modal-->
		
		<form action='' method='POST' >
		<div class="modal fade text-center"  id="class6_login" role="dialog">
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
		  <button class="btn btn-primary btn-lg  b_r2 mouse" type='submit' name='check_class6'>
		  
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
                    <h5 class="card-title">Class 7</h5>
                    <p class="card-text">This section includes play group, nursery, pre-nursery.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" type='submit' name='class7' data-target="#class7">View details</a>
</form>
					 	<!--option modal-->
	<div class="modal fade text-center" id="class7" role="dialog">
    <div class="modal-dialog">
   
      <div class="modal-content">
        <div class="modal-header profile-card-5">
		<h5 class=" modal-title gcolor card-title">Who are you? </h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
		
				<input type="button" value="Student" class="btn btn-lg btn-primary mouse" onclick="window.location='studentclass7.php'" />
				<br/>
				
				<br/>
				<input type="button" value="Teacher" class="btn btn-lg btn-primary mouse" data-dismiss="modal" data-toggle="modal" data-target="#class7_login"/>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>
  

	<!--option modal close-->
	<!--login modal-->
		
		<form action='' method='POST' >
		<div class="modal fade text-center"  id="class7_login" role="dialog">
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
		  <button class="btn btn-primary btn-lg  b_r2 mouse" type='submit' name='check_class7'>
		  
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