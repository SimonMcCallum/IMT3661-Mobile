<?php		
	if (!isset($dataBase)){
		include 'connect.php';
	}
	$result = $dataBase->query("SELECT * FROM StudentData") or die(mysqli_error());
	
	
	while($row = $result->fetch_assoc())
	  {	  	
	  echo json_encode($row);
	  }
	$dataBase->close();
?> 