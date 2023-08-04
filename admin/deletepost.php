<?php
	try {
		include '../includes/connection.php';
		include '../includes/DatabaseFunctions.php';
		deletePost($pdo, $_POST['id']);
		
		header('location: admin_questions.php');
	} catch(PDOEXCEPTION $e){
		$title = 'An error has occured';
		$output = 'Database error: ' . $e->getMessage() . 
		' in ' . $e->getFile() . ':' .  $e->getLine();
	}
include '../templates/admin_layout.html.php';
?>