<?php
/**
 * User: julien
 * Date: 14/12/13
 * Time: 15:14
 */
session_start();
if (!empty($_SESSION['admin']) || !empty($_POST['login'])) {
	if (!empty($_POST['login'])) {
		if ($_POST['login'] == 'julien' && $_POST['password'] == 'mon_mot_de_passe') {
			$_SESSION['admin'] = true;
		}
	}
	echo 'Vous êtes connecté<br />';
}
?>
<form action="auth.php" method="post">
	<label for="login">Login :</label><input type="text" name="login"/><br />
	<label for="password">Mot de passe :</label><input type="password" name="password"/>
	<input type="submit" value="Se connecter"/>
</form>
