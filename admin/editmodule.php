<?php
try{
	include '../includes/connection.php';
	include '../includes/DatabaseFunctions.php';
	if(isset($_POST['moduleName'])) {
		updateModule($pdo, $_POST['moduleName'], $_POST['moduleCode'], $_POST['moduleid']);
		header('location: modules.php');
	}
	else{
		$title = 'Edit module';
		$module = getModule($pdo, $_GET['id']);

		ob_start();
		include '../templates/editmodule.html.php';
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