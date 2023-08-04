<p><?=$total_posts?> questions have been submitted to the Student Hub.</p>

<?php foreach($posts as $post): ?>
	<blockquote>
		<p>
		<?=htmlspecialchars($post['postText'], ENT_QUOTES, 'UTF-8')?>
		<br />
		<?=htmlspecialchars($post['moduleCode'], ENT_QUOTES, 'UTF-8')?>
		(by <a href="mailto:<?php echo htmlspecialchars($post['email'], ENT_QUOTES, 'UTF-8'); ?>">
		<?php echo htmlspecialchars($post['username'], ENT_QUOTES, 'UTF-8'); ?></a>)
		</p>
	</blockquote>
	
<?php endforeach;?>
	