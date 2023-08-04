<?php try {
	include '../includes/connection.php';
	include '../includes/DatabaseFunctions.php';
	$title = 'Add Student';
	if(isset($_POST['studentName'], $_POST['studentEmail'])){
		try{
			insertStudent($pdo, $_POST['studentName'], $_POST['studentEmail']);
			header('location: students.php');
		}catch(PDOEXCEPTION $e){
			header('location: addstudent.php');
		}
	}

	ob_start();
	include '../templates/admin_addstudent.html.php';
	$output = ob_get_clean();
} catch(PDOEXCEPTION $e){
	$title = 'An error has occured';
	$output = 'Database error: ' . $e->getMessage() . 
	' in ' . $e->getFile() . ':' .  $e->getLine();
}
include '../templates/admin_layout.html.php';
?>