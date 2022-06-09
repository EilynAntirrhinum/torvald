<?php

include_once $_SERVER['DOCUMENT_ROOT']. '/bootstrap.php';

$title = "Главная";
$style = "admin/main-page.css";

use App\models\Sections;
use App\models\Themes;

if(isset($_POST["add-section-btn"])) {
    Sections::creatingSection($_POST['section_name']);
}

include $_SERVER["DOCUMENT_ROOT"] . "/admin/index.view.php";