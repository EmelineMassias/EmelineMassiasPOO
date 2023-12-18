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
        <a class="btn my-3" href="index.php?controller=moto&action=list">Revenir en arrière</a>

        <h1>Ajouter une moto</h1>

        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Marque de la moto</label>
                <input type="text" value="<?php if (array_key_exists("marque", $_POST)) {
                    echo ($_POST["marque"]);
                } ?>" name="marque" class="form-control <?php if (array_key_exists("marque", $errors)) {
                     echo ("is-invalid");
                 } ?>">
                <?php if (array_key_exists("marque", $errors)) {
                    echo ('<div class="invalid-feedback">' . $errors["marque"] . '</div>');
                } ?>
            </div>

            <div class="form-group">
                <label>Modele de la moto</label>
                <input type="text" value="<?php if (array_key_exists("modele", $_POST)) {
                    echo ($_POST["modele"]);
                } ?>" name="modele" class="form-control <?php if (array_key_exists("modele", $errors)) {
                     echo ("is-invalid");
                 } ?>">
                <?php if (array_key_exists("modele", $errors)) {
                    echo ('<div class="invalid-feedback">' . $errors["modele"] . '</div>');
                } ?>
            </div>


            <div class="form-group">
                <label>Type de la moto</label>
                <select name="type" class="form-select <?php if (array_key_exists("type", $errors)) {
                    echo ("is-invalid");
                } ?>">
                    <option></option>
                    <?php
                    foreach (Moto::$allowedType as $moto) {
                        $selected = '';
                        if ($_POST["type"] == $moto) {
                            $selected = 'selected';
                        }
                        echo ('<option ' . $selected . ' value="' . $moto . '">' . $moto . '</option>');
                    }
                    ?>
                </select>
                <?php if (array_key_exists("type", $errors)) {
                    echo ('<div class="invalid-feedback">' . $errors["type"] . '</div>');
                } ?>
            </div>


            <div class="form-group">
                <label>Image de la moto</label>
                <input type="file" name="image" class="form-control <?php echo (displayBsClass("image", $errors)); ?>">
                <?php
                displayErrorMessage("image", $errors);
                ?>
            </div>


            <input type="submit" class="btn btn-dark mt-3">
        </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>