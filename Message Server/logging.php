<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
   <head>
       <title>IMT3661 Test data page</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   </head>
	 <!--<script type="text/javascript" src="script.js"></script>-->
   <body>
   <p>This page displays the test data entered by students in the IMT3661 course.  It is deigned to take in GET variable from a URL.  That means that it reads </p>
   
<code> gtl.hig.no/mobile/logging.php?user=Simon&amp;data=testing </code>
<p> and stores Simon and testing along with a timestamp in the database.  Each username will only store the most recent data entered.
</p> 
<p>You can get the HTML table below by accessing display.php, or the json version with getjson.php</p>
	<?php	
	$dataBase;
	include 'connect.php';		

	include	'process.php';

	parseURL($dataBase);
	
	include 'display.php';
	?>
	
   </body>
</html>
