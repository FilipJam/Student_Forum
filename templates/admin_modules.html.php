<form action="addmodule.php" method="post">
	<input type="submit" value="Add Module" style="margin-left:0em;">
</form>

<?php foreach($modules as $module): ?>
	<blockquote>
		<p>
		<?php echo htmlspecialchars($module['moduleCode'], ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($module['name'], ENT_QUOTES, 'UTF-8'); ?>
		<a href="editmodule.php?id=<?=$module['id']?>">Edit</a>

		<form action="deletemodule.php" method="post">
			<input type="hidden" name="id" value="<?=$module['id']?>">
			<input class="delete" type="submit" value="Delete">
		</form>

		</p>
	</blockquote>
<?php endforeach;?>

	