<?php try {
	include '../includes/connection.php';
	include '../includes/DatabaseFunctions.php';
	$title = 'Add Module';
	if(isset($_POST['moduleCode'], $_POST['name'])){
		try{
			insertModule($pdo, $_POST['name'], $_POST['moduleCode']);
			header('location: modules.php');
		}catch(PDOEXCEPTION $e){
			header('location: addmodule.php');
		}
	}

	ob_start();
	include '../templates/admin_addmodules.html.php';
	$output = ob_get_clean();
} catch(PDOEXCEPTION $e){
	$title = 'An error has occured';
	$output = 'Database error: ' . $e->getMessage() . 
	' in ' . $e->getFile() . ':' .  $e->getLine();
}
include '../templates/admin_layout.html.php';
?>