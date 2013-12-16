<?php $result = mysql_query('SELECT * FROM articles'); ?>
<section>
	<?php while($article = mysql_fetch_array($result)): ?>
	<article>
		<header><?php echo $article['date'] ?>, par <span><?php echo $article['author'] ?></span></header>
		<p>
			<?php echo $article['content'] ?>
		</p>
	</article>
	<?php endwhile; ?>
</section>
