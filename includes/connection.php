<?php 
	$pdo = new PDO('mysql:host=localhost;dbname=student_questions', 'root', '');
	//$pdo = new PDO('localHost:8000', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>