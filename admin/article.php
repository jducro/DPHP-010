<?php
include_once('../db.php');
/**
 * User: julien
 * Date: 14/12/13
 * Time: 15:57
 */
session_start();
if (empty($_SESSION['admin'])) {
	header('Location: auth.php');
	die();
}
if (!empty($_POST['save'])) {
	$stmt = $dbh->prepare("INSERT INTO articles (`title`, `content`, `author`) VALUES (:title, :content, :author)");
	$stmt->bindParam(':title', $title);
	$stmt->bindParam(':content', $content);
	$stmt->bindParam(':author', $author);

	$title = $_POST['title'];
	$content = $_POST['content'];
	$author = $_POST['author'];
	$stmt->execute();
}
$article = array();
if (!empty($_GET['id_article'])) {
	$stmt = $dbh->prepare("SELECT * FROM articles where id_article = ?");
	if ($stmt->execute(array($_GET['id_article']))) {
		$article = $stmt->fetch();
	}
}
?>
<fieldset>
	<legend>Edition Article</legend>
	<form action="article.php" method="post">
		<input type="hidden" name="id_article" value="<?php if (!empty($article['id_article'])) echo $article['id_article'] ?>"/>
		<p><label for="title">Titre</label>
		<input type="text" name="title" value="<?php if (!empty($article['title'])) echo $article['title'] ?>"/></p>
		<p><label for="author">Auteur</label><input name="author" id="author" type="text" value="<?php if (!empty($article['author'])) echo $article['author'] ?>"/></p>
		<p><label for="content">Contenu</label><textarea name="content" id="content"><?php if (!empty($article['content'])) echo $article['content'] ?></textarea></p>
		<p><input name="save" type="submit" value="Enregistrer"/></p>
	</form>
</fieldset>
