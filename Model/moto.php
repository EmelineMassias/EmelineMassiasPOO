<?php

class Moto
{
    public static $allowedType = ["Enduro", "Custom", "Sportive", "Roadster"];

    private $id;
    private $marque;
    private $modele;
    private $type;
    private $image;

    public function __construct($id, $marque, $modele, $type, $image)
    {
        $this->id = $id;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->type = $type;
        $this->image = $image;
    }

    public function getId()
    {
        return htmlentities($this->id);
    }

    public function getMarque()
    {
        return htmlentities($this->marque);
    }

    public function getModele()
    {
        return htmlentities($this->modele);
    }

    public function getType()
    {
        return htmlentities($this->type);
    }

    public function getImage()
    {
        return htmlentities($this->image);
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }

}