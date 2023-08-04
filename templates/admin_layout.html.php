<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../styles/posts.css">
	<link rel="icon" type="image/x-icon" href="../images/favicon.png">
	<title><?=$title?></title>
</head>
<body>
	<header id="admin">
		<h1><image class="logo" src="../images/favicon.png" alt="logo">Staff Admin Area</h1>
	</header>
	<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="admin_questions.php">Question List</a></li>
		<li><a href="modules.php">Module List</a></li>
		<li><a href="students.php">Student List</a></li>
		<li><a href="addquestion.php">Add a new Question</a></li>
		<li><a href="../index.php">Public site</a></li>
		
	</ul>
	</nav>
	<main>
		<?=$output?>
	</main>
	<footer>
		&copy; mdb_fj6405s 2021
	</footer>
</body>
</html>