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
			<li><a href="index.php?page=contact">Contact</a></li>
		</ul>
	</nav>
</header>
<?php echo $content ?>
<footer>
	Copyright Julien Ducro, 2013
</footer>
</body>
</html>
