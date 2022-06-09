<?php

include_once $_SERVER['DOCUMENT_ROOT']. '/bootstrap.php';
$title = 'Добавление теории';
$style = 'admin/theory.css';

use App\models\Theory;

if (isset($_POST['save'])){
    move_uploaded_file($_FILES['practice']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . '/public/img/items/' . $_FILES['practice']['name']);
    Theory::update_section($_POST['section_name'], $_GET['section_id']);
    Theory::update_theme($_GET['section_id'], $_POST['theme_name'], $text, $_FILES['practice']['name'], 'Практика 1', '1');
}
include_once $_SERVER['DOCUMENT_ROOT'].'/admin/views/theory/index.view.php';