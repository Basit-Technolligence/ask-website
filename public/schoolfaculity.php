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


        <div class="container">
		<div class="row">
<?php
$result=mysqli_query($conn,"select * from faculty");
while($row=mysqli_fetch_assoc($result))
{
echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4'>
                <div class='image-flip' ontouchstart='this.classList.toggle('hover');'>
                    <div class='mainflip'>
                        <div class='frontside'>
                            <div class='card'>
                                <div class='card-body text-center'>
                                    <p><img class=' img-fluid img-responsive' src='../Admin/uploads/faculty/".$row['picture']."' alt='no photo found'></p>
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
<?php
include("footer.php");
?>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>