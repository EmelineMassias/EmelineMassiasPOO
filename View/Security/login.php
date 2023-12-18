<?php
require "View/Parts/function.php";
session_start();
$error=null;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST["identifiant"] == "admin"){
        $_SESSION["connecte"] = true;
        header("Location: index.php?controller=moto&action=list");
    }else{
        $error="identifiants invalides";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <?php include 'View/Parts/style_login.php'; ?>
</head>

<body>


    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="offset-md-3 col-md-9">

                <img class="justify-content-center" style="width:300px; height:300px;"
                    src="View/Public/images/logobleu.png" alt="">
            </div>
            
                <h1 class="mb-4">Se connecter</h1>
            


            <form method="post">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Identifiant</label>
                            <input type="text" name="identifiant" class="form-control mt-2 mb-3">
                        </div>

                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input type="password" name="password" class="form-control mt-2 mb-3">
                        </div>


                        <input type="submit" class="btn mt-3">
                    </div>

                </div>
        </div>
        </form>
        <?php if ($error) {
            echo ('<div class="text-danger">Identifiants incorrects</div>');
        }
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>