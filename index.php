<?php
require 'loader.php';



if (empty($_GET)) {

    header("Location: index.php?controller=security&action=login");

}

if ($_GET["controller"] == 'moto') {
    $controller = new MotoController();

    if ($_GET["action"] == 'list') {
        $controller->getAllMotos();
    }

    if ($_GET["action"] == "detail" && array_key_exists("id_moto", $_GET)) {
        $controller->detail($_GET["id_moto"]);
    }

    if ($_GET["action"] == "delete" && array_key_exists("id_moto", $_GET)) {
        $controller->remove($_GET["id_moto"]);
    }

    if ($_GET["action"] == "add") {
        $controller->add();
    }
}

if ($_GET["controller"] == "security") {

    $controller = new SecurityController();

    if ($_GET["action"] == "login") {
        $controller->login();
    }

    if ($_GET["action"] == "logout") {
        $controller->logout();
    }


}

if ($_GET["controller"] == "moto") {

    $controller = new MotoController();

    if ($_GET["action"] == 'filterType' && array_key_exists("type", $_GET)) {
        $controller->filterType($_GET["type"]);
    }


}