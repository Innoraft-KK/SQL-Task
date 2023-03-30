<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="style.css">
	<title>Task2</title>
</head>

<body>
	<?php
	include "connection.php";
	include "queries.php";
	$query = new Queries($connect);
	$query->employee_code_table(); 
	$query->employee_salary_table(); 
	$query->employee_details_table(); 
	echo "<p>Query 1</p>";
	echo  $query->q1();
	echo "<p>Query 2</p>";
	echo  $query->q2(); 
	echo "<p>Query 3</p>";
	echo  $query->q3();
	echo "<p>Query 4</p>";
	echo  $query->q4(); 
	echo "<p>Query 5</p>";
	echo $query->q5();
	echo "<p>Query 6</p>";
	echo $query->q6();
	echo "<p>Query 7</p>";
	echo $query->q7();
	?>
</html>