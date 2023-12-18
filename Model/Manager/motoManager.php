<?php

class MotoManager extends DbManager
{
    public function getAll()
    {
        $arrayObjet = [];

        $query = $this->bdd->query("SELECT * FROM motos");

        $results = $query->fetchAll();

        foreach ($results as $result) {
            $arrayObjet[] = new Moto(
                $result["id_moto"],
                $result["marque"],
                $result["modele"],
                $result["type"],
                $result["image"]);

        }

        return $arrayObjet;
    }

    public function getOne($id)
    {
        $query = $this->bdd->prepare("SELECT * FROM motos WHERE id_moto = :id_moto");
        $query->execute(["id_moto" => $id]);
        $result = $query->fetch();

        $moto = null;

        if ($result) {
            $moto = new Moto(
                $result["id_moto"],
                $result["marque"],
                $result["modele"],
                $result["type"],
                $result["image"]);
        }
        return $moto;
    }

    public function remove($id)
    {
        $query = $this->bdd->prepare("DELETE FROM motos WHERE id_moto = :id_moto");
        $query->execute(["id_moto" => $id]);
    }

    public function insert(Moto $moto)
    {
        $query = $this->bdd->prepare("INSERT INTO motos (marque, modele, type, image) 
        VALUES (:marque, :modele, :type, :image)"
        );

        $query->execute([
            "marque" => $moto->getMarque(),
            "modele" => $moto->getModele(),
            "type" => $moto->getType(),
            "image" => $moto->getImage()
        ]);
    }

    public function getAllFilterType($type){
        $query = $this->bdd->prepare("SELECT * FROM motos WHERE type = :type ORDER BY modele");
        $query->execute(['type' => $type]);
        $resultsArray = $query->fetchAll();

        $objectArray = [];
        foreach ($resultsArray as $result){
            $objectArray[] = new Moto(
                $result["id_moto"], $result["marque"], $result["modele"],
                $result["type"], $result["image"]);
        }
        return $objectArray;
    }

}