<section>
	<?php foreach($dbh->query('SELECT * FROM articles') as $article): ?>
	<article>
		<header><?php echo $article['date'] ?>, par <span><?php echo $article['author'] ?></span></header>
		<p>
			<?php echo $article['content'] ?>
		</p>
	</article>
	<?php endforeach; ?>
</section>
