<?php
try{
	include '../includes/connection.php';
	include '../includes/DatabaseFunctions.php';
	if(isset($_POST['username'])) {
		updateStudent($pdo, $_POST['username'], $_POST['email'], $_POST['studentid']);
		header('location: students.php');
	}
	else{
		$title = 'Edit Student';
		$student = getStudent($pdo, $_GET['id']);

		ob_start();
		include '../templates/editstudent.html.php';
		$output = ob_get_clean();
	}
}
catch(PDOEXCEPTION $e){
	$title = 'An error has occured';
	$output = 'Database error: ' . $e->getMessage() . 
	' in ' . $e->getFile() . ':' .  $e->getLine();
}
include '../templates/admin_layout.html.php';
?>