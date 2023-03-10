<?php
//session_start récupère la session en cours ou la crée si il n'y en a pas
session_start(); //si vous commentez cette ligne et réexécuter le code, vous n'aurez pas le même résultat.

if (isset($_SESSION['nom'])){
    echo '<p>$_SESSION[\'nom\'] = ' . $_SESSION['nom'] . '</p>';
} else {
    echo '<p>Pas de valeur pour "nom" dans la session</p>';
}