<?php

$title = "Главная";
$style = "main-page.css";

//if(!$_SESSION["isAuth"]) {
//    include $_SERVER["DOCUMENT_ROOT"] . "/index.view.php";
//}
//else if ($_SESSION["isAuth"]) {
//    include $_SERVER["DOCUMENT_ROOT"] . "/views/authorized-main-page/index.view.php";
//}

include $_SERVER["DOCUMENT_ROOT"] . "/index.view.php";
