<?php
	try {
		include '../includes/connection.php';
		include '../includes/DatabaseFunctions.php';
		deleteStudent($pdo, $_POST['id']);
		
		header('location: students.php');
	} catch(PDOEXCEPTION $e){
		$title = 'An error has occured';
		$output = 'Database error: ' . $e->getMessage() . 
		' in ' . $e->getFile() . ':' .  $e->getLine();
	}
include '../templates/admin_layout.html.php';
?>