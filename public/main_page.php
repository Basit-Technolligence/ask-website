<html>
<head>
<link rel="stylesheet" href="bootstrap.css"/>
<link rel="stylesheet" href="newstyle.css"/>
<title>Real Madrid</title>
</head>
<body id="body_color">
<div class="container">
<div class="row">
<div class="col-md-12">
<form action="new.php" method="POST">
    <table class="table table-hover">
    <thead>
      <tr>
	  <th  class="text-center">ID</th>
        <th  class="text-center">Opponent</th>
        <th  class="text-center">Score</th>
        <th  class="text-center">Result</th>
        <th  class="text-center">Date</th>
        <th  class="text-center">Time</th>
	<th  class="text-center">Venue</th>
	<th  class="text-center">Type</th>
      </tr>
    </thead>
    <tbody class="text-center">
<!--php code--> 
<?php
include("db_connect.php");
$result=mysqli_query($conn,"select * from recent_match order by id desc");
while($row=mysqli_fetch_assoc($result))
{

 echo "<tr>
 <td>".$row["id"]."</td>
        <td>".$row["opponent"]."</td>
	<td>".$row["oppscore"]." - ".$row["ourscore"]."</td>
	<td>".$row["result"]."</td>
        <td>".$row["date"]."</td>
        <td>".$row["time"]." hrs</td>
	<td>".$row["venue"]."</td>
	<td>".$row["type"]."</td>
     <td>
	 <input type='submit' value='delete'/>
	  <input type='submit' value='edit'/>
	 </td>
	 </tr>
	  
	  
	  ";
}

?>
</form>
 <!--php code-->
    </tbody>
  </table>
</div>
</div>
</div>

</body>
</html>