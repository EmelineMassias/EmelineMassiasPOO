<?php
class UserManager extends DbManager
{

    public function add(User $user)
    {
        $query = $this->bdd->prepare("INSERT INTO users (identifiant, password) VALUES (:identifiant, :password)");
        $query->execute([
            "identifiant" => $user->getIdentifiant(),
            "password" => $user->getPassword(),
        ]);
    }

    public function findByIdentifiant($identifiant)
    {
        $user = null;
        $query = $this->bdd->prepare("SELECT * FROM users WHERE identifiant = :identifiant");
        $query->execute([
            "identifiant" => $identifiant
        ]);

        $result = $query->fetch();

        if ($result) {
            $user = new User($result["id_user"], $result["identifiant"], $result["password"]);
        }

        return $user;
    }
}