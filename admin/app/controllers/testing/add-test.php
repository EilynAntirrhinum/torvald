<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/bootstrap.php";

use App\models\Tests;

$title = "Тестирование";
$style = "admin/testing.css";

if (isset($_POST["save-test-btn"])) {
    Tests::creatingTestName($_POST[""]);
}

include $_SERVER["DOCUMENT_ROOT"] . "/admin/views/testing/add-test.view.php";