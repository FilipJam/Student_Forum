<?php
include '../includes/connection.php';
include '../includes/DatabaseFunctions.php';
try{
	if(isset($_POST['postText'])) {
		updatePost($pdo, $_POST['postText'], $_POST['postid']);
		header('location: admin_questions.php');
	}
	else{
		$title = 'Edit post';
		$post = getPost($pdo, $_GET['id']);

		ob_start();
		include '../templates/editquestion.html.php';
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