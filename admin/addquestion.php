<?php
if(isset($_POST['postText'])) {
	try {
		include '../includes/connection.php';
		include '../includes/DatabaseFunctions.php';
		insertPost($pdo, $_POST['postText'], $_POST['students'], $_POST['modules']);

		header('location: admin_questions.php');
	} catch(PDOEXCEPTION $e){
		$title = 'An error has occured';
		$output = 'Database error: ' . $e->getMessage() . 
		' in ' . $e->getFile() . ':' .  $e->getLine();
	}
}
else{
	include '../includes/connection.php';
	include '../includes/DatabaseFunctions.php';
	$title = 'Add a new post';
	$students = allStudents($pdo);
	$modules = allModules($pdo);
	
	ob_start();
	include '../templates/addquestion.html.php';
	$output = ob_get_clean();
}
include '../templates/admin_layout.html.php';
?>