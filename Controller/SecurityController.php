<?php
class SecurityController
{

    private $userManager;

    public function __construct()
    {
        $this->userManager = new UserManager();
    }
    

    public function login()
    {
        $error = false;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $user = $this->userManager->findByIdentifiant($_POST["identifiant"]);

            if ($user) {
                if (password_verify($_POST["password"], $user->getPassword())) {
                    session_start();
                    $_SESSION["user"] = serialize($user);
                    header("Location: index.php?controller=moto&action=list");
                } else {
                    $error = true;
                }
            } else {
                $error = true;
            }
        }


        require "View/Security/login.php";

    }
    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: index.php?controller=security&action=login');


    }
}


