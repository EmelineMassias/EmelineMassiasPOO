<?php

class MotoController
{

    private $motoManager;

    public function __construct()
    {
        $this->motoManager = new MotoManager();
    }
    public function getAllMotos()
    {

        $allMotos = $this->motoManager->getAll();

        require "View/list.php";

    }

    public function detail($id)
    {
        $moto = $this->motoManager->getOne($id);

        require "View/detail.php";

    }

    public function remove($id)
    {

        $this->motoManager->remove($id);

        header("Location: index.php?controller=moto&action=list");
    }

    public function add()
    {
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $errors = $this->isValid();

            if (count((array)$errors) == 0) {
                $moto = new Moto(null, $_POST["marque"], $_POST["modele"], $_POST["type"], $_POST["image"]);

                if ($_FILES["image"]["size"] != 0) {
                    $filename = uniqid() . $_FILES["image"]['name'];
                    $moto->setImage($filename);
                    move_uploaded_file($_FILES["image"]["tmp_name"], "View/Public/uploads/" . $filename);
                }
                $this->motoManager->insert($moto);
                header("Location: index.php?controller=moto&action=list");
            }
        }
        require 'View/form.php';
    }

    private function isValid()
    {
        $errors = [];
        if (empty($_POST["marque"])) {
            $errors["marque"] = 'Veuillez saisir une marque de moto';
        }
        if (empty($_POST["modele"])) {
            $errors["modele"] = 'Veuillez saisir une modele de moto';
        }
        if (empty($_POST["type"])) {
            $errors["type"] = 'Veuillez saisir un type de moto';
        }


        if (!in_array($_POST["type"], Moto::$allowedType)) {
            $errors["type"] = "Ce type de moto n'existe pas";
        }



        if (array_key_exists("image", $_FILES)) {
            $image = $_FILES["image"];
            $allowedFormat = ["image/jpeg", "image/png"];

            if ($image["size"] > 0) {
                if (!in_array($image["type"], $allowedFormat)) {
                    $errors["image"] = "L'image n'est pas au bon format";
                }

                if ($image["size"] > 250000000) {
                    $errors["image"] = "Le fichier est trop gros";
                }

                if ($image["error"] != 0 && $image["error"] != 4) {
                    $errors["image"] = "Une erreur inconnue s'est produite";
                }

                return $errors;
            }

        }
    }

    public function filterType($type)
    {
        $allMotos = $this->motoManager->getAllFilterType($type);
        require "View/list.php";
    }
}


