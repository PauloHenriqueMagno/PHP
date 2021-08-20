<?php 

$page = "home";

if(isset($_GET["page"]))
{
    $page = $_GET["page"];
};

include './assets/php/header.php';

switch($page){
    
    case "articles":
        include "assets/php/articles.php";
        break;

    case "more":
        include "assets/php/more.php";
        break;

    default:
        include "assets/php/home.php";
        break;
};

include('./assets/php/footer.php');

?>