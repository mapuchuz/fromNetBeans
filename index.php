<?php
session_start();
require("include/db_connect.php");
include("include/blocs/header.php");
include("include/functions/functions.php");

$page = isset($_GET['page']) ? $_GET['page'] : "";

switch ($page) {
    case "register":
        include("include/pages/register.php");
        break;
    case "discours":
        include("include/pages/discours.php");
        break;
    case "register.traitement":
        include("include/pages/register.traitement.php");
        break;
    case "article_read":
        include("include/pages/article_read.php");
        break;
    case "article_liste":
        include("include/pages/article_liste.php");
        break;
    case "article_edit":
        include("include/pages/article_edit.php");
        break;
    case "article_delete":
        include("include/pages/article_delete.php");
        break;
    default:
        include("include/pages/home.php");
}

include("include/blocs/footer.php");
?>
<a href="index.php?page=register.php">FoRmUlAiRe</a>