<!DOCTYPE html>
<html>
<head>
	<title>Mon blog</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/normalize.css" >
	<link rel="stylesheet" href="css/main.css" >
</head>
<body>
	<header>
		<h1>Mon Blog</h1>
		<p>Bienvenue sur mon blog où je parle de tout et de rien.</p>
		<nav>
			<ul>
				<li><a href="index.php?page=index">Accueil</a></li>
				<li><a href="index.php?page=a_propos">A propos</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</header>
	<?php if (empty($_GET['page']) || $_GET['page'] == 'index'): ?>
	<section>
		<article>
			<header>7 décembre 2013, par <span>Julien</span></header>
			<p>
				Aujourd'hui je fais une vidéo pour expliquer comment développer en php pour le web.
			</p>
		</article>
		<article>
			<header>1 décembre 2013, par <span>Julien</span></header>
			<p>
				Je suis allé voir Hunger Games au cinéma, il est pas trop mal mais je préfèrais le premier
			</p>
		</article>
		<article>
			<header>18 novembre 2013, par <span>Julien</span></header>
			<p>
				Je viens de commander mon nouveau boulot, il y a pas mal de nouvelles choses à prendre
				en compte mais c'est intéressant et je me plais beaucoup dans l'équipe.
			</p>
		</article>
	</section>
	<?php elseif ($_GET['page'] = 'a_propos'): ?>
	<section>
		<article>
			Ce site est mon blog
		</article>
	</section>
	<?php endif; ?>
	<footer>
		Copyright Julien Ducro, 2013
	</footer>
</body>
</html>
