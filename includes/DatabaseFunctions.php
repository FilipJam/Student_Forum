<?php

##REUSABLE QUERY FUNCTION##

function query($pdo, $sql, $parameters = []) {
	$query = $pdo->prepare($sql);
	$query->execute($parameters);
	return $query;
}

##post FUNCTIONS##

function getPost($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM post WHERE id = :id', $parameters);
	return $query->fetch();
}

function getModule($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM module WHERE id = :id', $parameters);
	return $query->fetch();
}

function getStudent($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM student WHERE id = :id', $parameters);
	return $query->fetch();
}

function totalPosts($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM post');
	$row = $query->fetch();
	return $row[0];
}

function allPosts($pdo) {
	$posts = query($pdo, 'SELECT post.id, postText, username, email, moduleCode FROM post
	INNER JOIN student ON studentID  = student.id
	INNER JOIN module ON moduleID = module.id');
	return $posts->fetchAll();
}

function insertPost($pdo, $postText, $studentid, $moduleid) {
	$query = 'INSERT INTO post (postText, postdate, studentid, moduleid)
	VALUES (:postText, CURDATE(), :studentid, :moduleid)';
	$parameters = [':postText' => $postText, ':studentid' => $studentid, ':moduleid' => $moduleid];
	query($pdo, $query, $parameters);
}

function insertModule($pdo, $name, $moduleCode){
	$query = 'INSERT INTO module (name, moduleCode)
	VALUES (:name, :moduleCode)';
	$parameters = [':name' => $name, ':moduleCode' => $moduleCode];
	query($pdo, $query, $parameters);
}

function insertStudent($pdo, $name, $email){
	$query = 'INSERT INTO student (username, email)
	VALUES (:username, :email)';
	$parameters = [':username' => $name, ':email' => $email];
	query($pdo, $query, $parameters);
}

function updatePost($pdo, $postText, $postid) {
	$query = 'UPDATE post SET postText = :postText WHERE id = :id';
	$parameters = [':postText' => $postText, ':id' => $postid];
	query($pdo, $query, $parameters);
}

function updateModule($pdo, $moduleName, $moduleCode, $moduleid) {
	$query = 'UPDATE module SET name = :moduleName, moduleCode = :moduleCode WHERE id = :id';
	$parameters = [':moduleName' => $moduleName, ':moduleCode' => $moduleCode, ':id' => $moduleid];
	query($pdo, $query, $parameters);
}

function updateStudent($pdo, $username, $email, $studentid) {
	$query = 'UPDATE student SET username = :username, email = :email WHERE id = :id';
	$parameters = [':username' => $username, ':email' => $email, ':id' => $studentid];
	query($pdo, $query, $parameters);
}

function deletePost($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM post WHERE id = :id', $parameters);
}

function deleteStudent($pdo, $id){
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM student WHERE id = :id', $parameters);
}

function deleteRow($pdo, $id){
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM module WHERE id = :id', $parameters);
}

##AUTHOR FUNCTIONS##

function allStudents($pdo) {
	$students = query($pdo, 'SELECT * FROM student');
	return $students->fetchAll();
}

##CATEGORY FUNCTIONS##

function allModules($pdo) {
	$students = query($pdo, 'SELECT * FROM module');
	return $students->fetchAll();
}




