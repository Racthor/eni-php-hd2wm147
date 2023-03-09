<?php
var_dump($_REQUEST);
var_dump($_GET);
echo filter_var($_GET['demoText'], FILTER_SANITIZE_SPECIAL_CHARS);
echo "<br><a href=\"demoFailleXSS.php\">Retour</a>";
