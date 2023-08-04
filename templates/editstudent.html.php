<form action="" method="post">
	<Label for="username">Type the username here:</Label>
    <input type="text" id="username" name="username" value="<?=$student['username']?>">

	<Label for="email">Type the email here:</Label>
	<textarea id="email" name="email" rows="3" cols="60"><?=$student['email']?></textarea>
	
    <input type="hidden" name="studentid" value="<?=$student['id']?>">
	<input type="submit" value="Save">
</form>