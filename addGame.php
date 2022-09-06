<?php
 session_start();
/**
 * tis file show form for create a new game 
 */
$title = "Add Game"; 
include("models/database.php");

$error = [];
$errorMessage = "<span class=text-red-500>*Ce champs est obligatoire</span>";


// 1-je verifie si le formulaire est soumis
if (!empty($_POST["submited"])) {
    require_once("utils/secure-form/include.php");
    if (count($error) == 0){
    create($name, $price, $note, $description, $genre_clear, $plateforms_clear, $PEGI, $url_img);
    // debug_array($error);
    }
}
require("view/createPage.php");
