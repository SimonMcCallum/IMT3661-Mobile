<?php

//Extract the parameters passed in the URL thanks to parsing method from PHP
function parseURL($dataBase)
{
	//URL to parse containing interesting parameters to extract

	$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	
	echo "<p>URL to parse = <font color=red>" .$url. "</font></p>";
	
	//Parse URL only to get the parameters 
	//arrayURL contain the whole URL but each part of it is split into an array
	//It's possible to request each part by calling 'host', 'query' and so on....
	$arrayURL = parse_url($url);
	
	//Parameters are included into the query part
	//It returns all the parameters all side by side
	//We need to parse them again
	$parameters = $arrayURL["query"];
	
	//parse the previous data into an array containing only one data
	parse_str($parameters, $data);		
	
	//remove any special characters to prevent sql injection
	$user = $dataBase->real_escape_string($data['user']);
	$newdata = $dataBase->real_escape_string($data['data']);
	
	//remove any html characters to deal with web page defacing
	$user = htmlspecialchars($user);
	$newdata = htmlspecialchars($newdata);
	
	echo "<table>";  	
	print_r("<td>User = " .$data['user']. "</td>");			
	print_r("<td>Data = " .$data['data']. "</td>");		
	echo "</table>";
	echo "<br><br/>";	
	//Check that the entry is actually more than 0 characters long.
	if ((strlen($user) > 0 ) && (strlen($newdata)>0))
	{
		//Check if user exists then delete and insert to update time stamp and id.
		$result = $dataBase->query("SELECT * FROM StudentData WHERE User='" .$user. "'");
		if ( $result->fetch_assoc() !== null)
    			$dataBase->query("DELETE FROM StudentData WHERE User='" .$user. "'");
		$dataBase->query("INSERT INTO StudentData (User, Data) VALUES  ('" .$user. "','" .$newdata. "')");
	} else {
		echo "<font color=red> Both the user and the data have to be non empty.</font><br/>";
	}
}	 
?>

