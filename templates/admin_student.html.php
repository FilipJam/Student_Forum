<form action="addstudent.php" method="post">
	<input type="submit" value="Add student" style="margin-left:0em;">
</form>

<?php foreach($students as $student): ?>
	<blockquote>
		<p>
		<?=htmlspecialchars($student['username'], ENT_QUOTES, 'UTF-8');?>
		<br />
		<a href="mailto:<?=htmlspecialchars($student['email'], ENT_QUOTES, 'UTF-8');?>"><?=htmlspecialchars($student['email'], ENT_QUOTES, 'UTF-8');?></a>
		<br /><a href="editstudent.php?id=<?=$student['id']?>">Edit</a>

		<form action="deletestudent.php" method="post">
			<input type="hidden" name="id" value="<?=$student['id']?>">
			<input class="delete" type="submit" value="Delete">
		</form>

		</p>
	</blockquote>
<?php endforeach;?>
	