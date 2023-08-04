<p><?=$total_posts?> posts have been submitted to the Student Hub.</p>

<?php foreach($posts as $post): ?>
	<blockquote>
		<p>
		<?=htmlspecialchars($post['postText'], ENT_QUOTES, 'UTF-8')?>
		<br /><br />
		<?=htmlspecialchars($post['moduleCode'], ENT_QUOTES, 'UTF-8')?>
		(by <a href="mailto:<?php echo htmlspecialchars($post['email'], ENT_QUOTES, 'UTF-8'); ?>">
		<?php echo htmlspecialchars($post['username'], ENT_QUOTES, 'UTF-8'); ?></a>)
		<a href="editquestion.php?id=<?=$post['id']?>">Edit</a>

		<form action="deletepost.php" method="post">
			<input type="hidden" name="id" value="<?=$post['id']?>">
			<input class="delete" type="submit" value="Delete">
		</form>

		</p>
	</blockquote>
<?php endforeach;?>
	