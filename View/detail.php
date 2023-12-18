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
    <title>Détail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <?php include 'View/Parts/style_main.php'; ?>
</head>

<body>
    <div class="container">
        <?php
        include 'View/Parts/nav.php';
        ?>

        <a class="btn btn-dark mt-3" href="index.php?controller=moto&action=list">Revenir en arrière</a>

        <h1 class="text-center mt-3">
            <?php
            echo (htmlentities($moto->getMarque()) . ' ' . htmlentities($moto->getModele()));
            ?>
        </h1>

        <div class="col-md-12 text-center">
            <h2>
                <?php
                echo (htmlentities($moto->getType()));
                ?>
            </h2>
            <div class="picture">
                <?php
                if (!is_null($moto->getImage())) {
                    ?>
                    <img class="img img-thumbnail" style="width: 718px; height: 429px;"
                        src="View/Public/uploads/<?php echo ($moto->getImage()); ?> ">
                    <?php
                } else {
                    echo ('<img class="img img-thumbnail" src="Public/images/no-picture.jpg">');
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>