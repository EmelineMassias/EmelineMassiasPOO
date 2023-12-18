<?php
require "View/Parts/function.php";
session_start();
restrictAccess();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <?php include 'View/Parts/style_main.php'; ?>

</head>

<body>
    <div class="container">
        <?php
        include 'View/Parts/nav.php';
        ?>
        <a class="btn btn-dark mt-5" href="index.php?controller=moto&action=add">Ajouter une moto</a>


        <h1 class="mt-5">Les motos disponibles </h1>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Marque</th>
                    <th scope="col">Modèle</th>
                    <th scope="col">Type</th>
                    <th scope="col">Image</th>
                    <th scope="col"></th>
                    <th scope="col"></th>


                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($allMotos as $motos) {
                    echo ('<tr>
                    <th scope="row">' . $motos->getId() . '</th>
                    <td>' . htmlentities($motos->getMarque()) . '</td>
                    <td>' . htmlentities($motos->getModele()) . '</td>
                    <td>' . htmlentities($motos->getType()) . '</td>');
                    if (!is_null($motos->getImage())) {
                        echo ('<td><img style="max-width: 100px;" class="img img-thumbnail" src="View/Public/uploads/' . $motos->getImage() . '  "</td>');
                    } else {
                        echo ('<td><img class="img img-thumbnail" style="max-width:100px;" src="Public/images/no-picture.jpg"></td>');
                    }
                    echo ('<td><a class="btn" href="index.php?controller=moto&action=detail&id_moto=' . $motos->getId() . '">Voir le détail</a></td>
                    <br>
                    <td><a class="btn" href="index.php?controller=moto&action=delete&id_moto=' . $motos->getId() . '">Supprimer</a></td>
                    </tr>');
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>