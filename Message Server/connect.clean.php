<?php 
$dataBase = mysqli_connect('localhost','web-user', 'web-user-password','database'); 
if ($dataBase->connect_error) { 
	die('Connect Error (' . $dataBase->connect_errno . ') '
            . $dataBase->connect_error);
} 
/*
 * Use this instead of $connect_error if you need to ensure
 * compatibility with PHP versions prior to 5.2.9 and 5.3.0.
 */
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

?> 