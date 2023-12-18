<?php

class User
{
    private $id;
    private $identifiant;
    private $password;

    public function __construct($id, $identifiant, $password)
    {
        $this->id = $id;
        $this->identifiant = $identifiant;
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIdentifiant()
    {
        return htmlentities($this->identifiant);
    }

    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
    }
    public function getPassword()
    {
        return htmlentities($this->password);
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}