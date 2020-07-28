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
    		    <div class="card profile-card-5">
    		        <div class="card-img-block">
    		            <img class="card-img-top img-responsive" alt='picture not found' src="uploads/montessori.jpg" alt="Card image cap">
    		        </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title">Montessori Section</h5>
                    <p class="card-text">This section includes play group, nursery, prep.</p>
                    <a href="montessorisection.php" class="btn btn-primary">View section</a>
                  </div>
                </div>
    		</div>
<div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 mt-4">
    		    <div class="card profile-card-5">
    		        <div class="card-img-block">
    		            <img class="card-img-top img-responsive" alt='picture not found' src="uploads/junior.jpg" alt="Card image cap">
    		        </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title">Junior Section</h5>
                    <p class="card-text">This section includes classes from 1 to 4.</p>
                    <a href="juniorsection.php" class="btn btn-primary">View section</a>
                  </div>
                </div>
				</div>
<div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 mt-4">
    		    <div class="card profile-card-5">
    		        <div class="card-img-block">
    		            <img class="card-img-top img-responsive" alt='picture not found' src="uploads/senior.jpg" alt="Card image cap">
    		        </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title">Senior Section</h5>
                    <p class="card-text">This section inlcudes classes from 5 to 7.</p>
                    <a href="seniorsection.php" class="btn btn-primary">View section</a>
                  </div>
                </div>
    		</div>
<div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 mt-4">
    		    <div class="card profile-card-5">
    		        <div class="card-img-block">
    		            <img class="card-img-top img-responsive" alt='picture not found' src="uploads/board.jpg" alt="Card image cap">
    		        </div>
                    <div class="card-body pt-0">
                    <h5 class="card-title">Board Section</h5>
                    <p class="card-text">This section includes the most senior classes 8, 9, 10</p>
                    <a href="boardsection.php" class="btn btn-primary">View section</a>
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