<?php
#$title = "Show_Game";
ob_start();
require("partials/_show.php");

$content = ob_get_clean();
require("layout.php");