<!-- header -->
<?php
session_start(); 
require_once("models/database.php");
$game = getGame();
$title = $game['name'];
// debug_array($_GET)



// creation array error
$error = [];
$errorMessage = "<span class=text-red-500>*Ce champs est obligatoire</span>";
// variable success

// 1-je verifie si le formulaire est soumis
if (!empty($_POST["submited"])) {
    require_once("utils/secure-form/include.php");
    if (count($error) == 0) {
        update($name, $price, $note, $description, $genre_clear, $plateforms_clear, $PEGI, $url_img);
        // debug_array($error);
    }

}
$game = getGame();
$title = $game['name'];
require("view/updatePage.php");
?>


