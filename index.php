<?php
if (!empty($_POST)) {
	$message = $_POST['question'];
	$email = $_POST['email'];
	mail('ducro_j@etna-alternance.net', 'Message depuis le blog par '.$_POST['prenom'].' '.$_POST['nom'], $message);
}
ob_start();
if (empty($_GET['page']) || $_GET['page'] == 'index') {
	include_once('accueil.php');
} elseif ($_GET['page'] == 'a_propos') {
	include_once('a_propos.php');
} elseif ($_GET['page'] == 'contact') {
	include_once('contact.php');
}
$content = ob_get_contents();
ob_clean();
include_once('layout.php');
