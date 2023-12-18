<?php
function displayBsClass($name, $errors){
    if(array_key_exists($name, $errors)){
        return 'is-invalid';
    }
}

function keepValue($name){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        return htmlentities($_POST[$name]);
    }
}

function displayErrorMessage($name, $errors){
    if(array_key_exists($name, $errors)){
        echo('<div class="invalid-feedback">'.$errors[$name].'</div>');
    }
}

function restrictAccess(){
    if(!array_key_exists("connecte", $_SESSION)){
        header("Location: index.php?controller=security&action=login");
    }
}