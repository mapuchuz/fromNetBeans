<?php

$server=	"form.db";
$dbname=	"blogv1";
$user=		"blogv1";
$pwd=		"pwdv1";

/* Connexion à une base ODBC avec l'invocation de pilote */
$dsn = 'mysql:dbname='.$dbname.';host='.$server . ";charset=utf8";

try {
	$db=	new PDO($dsn, $user, $pwd);
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

//détruire les autres variables
unset($server, $dbname, $user, $pwn, $pwd, $dsn);

//nepas ferner!!  ? >