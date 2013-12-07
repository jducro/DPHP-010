<?php
ob_start();
if (empty($_GET['page']) || $_GET['page'] == 'index') {
	include_once('accueil.php');
} elseif ($_GET['page'] == 'a_propos') {
	include_once('a_propos.php');
}
$content = ob_get_contents();
ob_clean();
include_once('layout.php');
