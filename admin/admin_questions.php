<?php try {
	include '../includes/connection.php';
	include '../includes/DatabaseFunctions.php';
	$posts = allPosts($pdo);
	$title = 'Question list';
	$total_posts = totalPosts($pdo);

	ob_start();
	include '../templates/admin_questions.html.php';
	$output = ob_get_clean();
} catch(PDOEXCEPTION $e){
	$title = 'An error has occured';
	$output = 'Database error: ' . $e->getMessage() . 
	' in ' . $e->getFile() . ':' .  $e->getLine();
}
include '../templates/admin_layout.html.php';
?>