<?php try {
	include '../includes/connection.php';
	include '../includes/DatabaseFunctions.php';
	$students = allStudents($pdo);
	$title = 'Student list';

	ob_start();
	include '../templates/admin_student.html.php';
	$output = ob_get_clean();
} catch(PDOEXCEPTION $e){
	$title = 'An error has occured';
	$output = 'Database error: ' . $e->getMessage() . 
	' in ' . $e->getFile() . ':' .  $e->getLine();
}
include '../templates/admin_layout.html.php';
?>