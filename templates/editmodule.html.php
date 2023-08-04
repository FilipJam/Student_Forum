<form action="" method="post">
	<Label for="moduleCode">Type your Module Code here:</Label>
    <input type="text" id="moduleCode" name="moduleCode" value="<?=$module['moduleCode']?>">

	<Label for="moduleName">Type your Module name here:</Label>
	<textarea id="moduleName" name="moduleName" rows="3" cols="60"><?=$module['name']?></textarea>
	
    <input type="hidden" name="moduleid" value="<?=$module['id']?>">
	<input type="submit" value="Save">
</form>