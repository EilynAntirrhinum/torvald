<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap.php';

$title = 'Добавление теории';
$style = 'admin/theory.css';

use App\models\Sections;
use App\models\Themes;

if (isset($_POST['save'])) {
    if (!Sections::checkSections($_POST["section_name"])) {
        Sections::creatingSection($_POST["section_name"]);

        if ($_POST['theme_name'] != "") {
            Themes::creatingTheme("1", $_POST['theme_name'], "fff", "/public/docs/" . $_FILES['practice']['name'], "error");
        }
    } else {
        move_uploaded_file($_FILES['practice']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/public/docs/' . $_FILES['practice']['name']);
        Sections::update_section($_POST['section_name'], $_GET['section_id']);
        Themes::update_theme($_GET['section_id'], $_POST['theme_name'], "jjj", $_FILES['practice']['name'], 'Практика 1', '1');
    }
}

include_once $_SERVER['DOCUMENT_ROOT'] . '/admin/views/theory/index.view.php';