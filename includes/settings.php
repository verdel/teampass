<?php
global $lang, $txt, $k, $pathTeampas, $urlTeampass, $pwComplexity, $mngPages;
global $server, $user, $pass, $database, $pre, $db, $port, $encoding;

### DATABASE connexion parameters ###
$server = "localhost";
$user = "root";
$pass = "";
$database = "tp_dev";
$pre = "teampass_";
$port = 3306;
$encoding = "utf8";

@date_default_timezone_set($_SESSION['settings']['timezone']);
@define('SECUREPATH', 'C:\Users\298792\MyProgs\xampp\security\tp\dev');
require_once "C:/Users/298792/MyProgs/xampp/security/tp/dev//sk.php";
?>