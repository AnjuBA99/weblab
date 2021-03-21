<?php

include("dbconnect.php");

$sql="SELECT * FROM student";

$result=$conn->query($sql);

if($result->num_rows>0)

   {

	echo"<table border='1' width='500px';style='border:5px solid black;margin-left:400;margin-top:100px;border-collapse:collapse;'>

	<tr><th>ID</th><th>Name</th><th>Email</th><th>Marks</th></tr>";

	while($row=$result->fetch_assoc())
	
           {

		echo "<tr><td>".$row["id"]."</td>";
	
	        echo "<td>".$row["name"]."</td>";
	
	        echo "<td>".$row["email"]."</td>";
	
	        echo "<td>".$row["marks"]."</td></tr>";

	  }
	

  }

echo"</table>";


?>