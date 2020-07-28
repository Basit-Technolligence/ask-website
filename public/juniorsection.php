<?php
	include('db_connect.php');
	if(!$conn){
	die('the connection is not established');
}
if(isset($_POST['check_class1'])){
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$result=mysqli_query($conn,"select * from admin where username='class1'");
while($row=mysqli_fetch_assoc($result))
{
	if($row['username']==$username && $row['password']==$password)
	{
			session_start();
	$_SESSION['class1']='class1';
	echo "<script> location='teacherclass1.php';</script>";}
	else
		{
            $error_msg = "username or password is incorrect";
            $script = "<script> $(document).ready(function(){ $('#class1_login').modal('show'); }); </script>";

            }
}
}
if(isset($_POST['check_class2'])){
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$result=mysqli_query($conn,"select * from admin where username='class2'");
while($row=mysqli_fetch_assoc($result))
{
	if($row['username']==$username && $row['password']==$password)
	{
			session_start();
	$_SESSION['class2']='class2';
	echo "<script> location='teacherclass2.php';</script>";}
	else
		{
            $error_msg = "username or password is incorrect";
            $script = "<script> $(document).ready(function(){ $('#class2_login').modal('show'); }); </script>";

            }
}
}
if(isset($_POST['check_class3'])){
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$result=mysqli_query($conn,"select * from admin where username='class3'");
while($row=mysqli_fetch_assoc($result))
{
	if($row['username']==$username && $row['password']==$password)
	{
			session_start();
	$_SESSION['class3']='class3';
	echo "<script> location='teacherclass3.php';</script>";}
	else
		{
            $error_msg = "username or password is incorrect";
            $script = "<script> $(document).ready(function(){ $('#class3_login').modal('show'); }); </script>";

            }
}
}
if(isset($_POST['check_class4'])){
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$result=mysqli_query($conn,"select * from admin where username='class4'");
while($row=mysqli_fetch_assoc($result))
{
	if($row['username']==$username && $row['password']==$password)
	{
			session_start();
	$_SESSION['class4']='class4';
	echo "<script> location='teacherclass4.php';</script>";}
	else
		{
            $error_msg = "username or password is incorrect";
            $script = "<script> $(document).ready(function(){ $('#class4_login').modal('show'); }); </script>";

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

<div class="container">
<div class="row">
<div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 mt-4">
<form action='' method='post'>
    		    <div class="card profile-card-5">
    		        <div class="card-img-block">
    		            <img class="card-img-top img-responsive" alt='picture not found' src="uploads/montessori.jpg" alt="Card image cap">
    		        </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title">Class 1</h5>
                    <p class="card-text">This section includes play group, nursery, pre-nursery.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" type='submit' name='class1' data-target="#class1">View details</a>
</form>
					 	<!--option modal-->
	<div class="modal fade text-center" id="class1" role="dialog">
    <div class="modal-dialog">
   
      <div class="modal-content">
        <div class="modal-header profile-card-5">
		<h5 class=" modal-title gcolor card-title">Who are you? </h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
		
				<input type="button" value="Student" class="btn btn-lg btn-primary mouse" onclick="window.location='studentclass1.php'" />
				<br/>
				
				<br/>
				<input type="button" value="Teacher" class="btn btn-lg btn-primary mouse" data-dismiss="modal" data-toggle="modal" data-target="#class1_login"/>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>
  

	<!--option modal close-->
	<!--login modal-->
		
		<form action='' method='POST' >
		<div class="modal fade text-center"  id="class1_login" role="dialog">
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
		  <button class="btn btn-primary btn-lg  b_r2 mouse" type='submit' name='check_class1'>
		  
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
                    <h5 class="card-title">Class 2</h5>
                    <p class="card-text">This section includes play group, nursery, pre-nursery.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" type='submit' name='class2' data-target="#class2">View details</a>
</form>
					 	<!--option modal-->
	<div class="modal fade text-center" id="class2" role="dialog">
    <div class="modal-dialog">
   
      <div class="modal-content">
        <div class="modal-header profile-card-5">
		<h5 class=" modal-title gcolor card-title">Who are you? </h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
		
				<input type="button" value="Student" class="btn btn-lg btn-primary mouse" onclick="window.location='studentclass2.php'" />
				<br/>
				
				<br/>
				<input type="button" value="Teacher" class="btn btn-lg btn-primary mouse" data-dismiss="modal" data-toggle="modal" data-target="#class2_login"/>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>
  

	<!--option modal close-->
	<!--login modal-->
		
		<form action='' method='POST' >
		<div class="modal fade text-center"  id="class2_login" role="dialog">
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
		  <button class="btn btn-primary btn-lg  b_r2 mouse" type='submit' name='check_class2'>
		  
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
                    <h5 class="card-title">Class 3</h5>
                    <p class="card-text">This section includes play group, nursery, pre-nursery.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" type='submit' name='class3' data-target="#class3">View details</a>
</form>
					 	<!--option modal-->
	<div class="modal fade text-center" id="class3" role="dialog">
    <div class="modal-dialog">
   
      <div class="modal-content">
        <div class="modal-header profile-card-5">
		<h5 class=" modal-title gcolor card-title">Who are you? </h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
		
				<input type="button" value="Student" class="btn btn-lg btn-primary mouse" onclick="window.location='studentclass3.php'" />
				<br/>
				
				<br/>
				<input type="button" value="Teacher" class="btn btn-lg btn-primary mouse" data-dismiss="modal" data-toggle="modal" data-target="#class3_login"/>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>
  

	<!--option modal close-->
	<!--login modal-->
		
		<form action='' method='POST' >
		<div class="modal fade text-center"  id="class3_login" role="dialog">
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
		  <button class="btn btn-primary btn-lg  b_r2 mouse" type='submit' name='check_class3'>
		  
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
                    <h5 class="card-title">Class 4</h5>
                    <p class="card-text">This section includes play group, nursery, pre-nursery.</p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" type='submit' name='class4' data-target="#class4">View details</a>
</form>
					 	<!--option modal-->
	<div class="modal fade text-center" id="class4" role="dialog">
    <div class="modal-dialog">
   
      <div class="modal-content">
        <div class="modal-header profile-card-5">
		<h5 class=" modal-title gcolor card-title">Who are you? </h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
		
				<input type="button" value="Student" class="btn btn-lg btn-primary mouse" onclick="window.location='studentclass4.php'" />
				<br/>
				
				<br/>
				<input type="button" value="Teacher" class="btn btn-lg btn-primary mouse" data-dismiss="modal" data-toggle="modal" data-target="#class4_login"/>
        </div>
        <div class="modal-footer">
         
        </div>
      </div>
      
    </div>
  </div>
  

	<!--option modal close-->
	<!--login modal-->
		
		<form action='' method='POST' >
		<div class="modal fade text-center"  id="class4_login" role="dialog">
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
		  <button class="btn btn-primary btn-lg  b_r2 mouse" type='submit' name='check_class4'>
		  
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