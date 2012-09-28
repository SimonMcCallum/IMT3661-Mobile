<?php		
	if (!isset($dataBase)){
		include 'connect.php';
	}
	$result = $dataBase->query("SELECT * FROM StudentData ORDER BY id ") or die(mysqli_error());
	
	echo "<table border='1'>
	<tr>
	<th>ID</th>
	<th>User</th>
	<th>Data</th>
	<th>eventTime</th>
	</tr>";
	
	while($row = $result->fetch_assoc())
	  {	  	
	  echo "<tr>";
	  echo "<td>" . $row['id'] . "</td>";
	  echo "<td>" . $row['User'] . "</td>";
	  echo "<td>" . $row['Data'] . "</td>";
	  echo "<td>" . $row['Time'] . "</td>";	  
	  echo "</tr>";	 
	  }
	echo "</table>";
	
	$dataBase->close();
?> 