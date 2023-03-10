<?php
session_start();
$_SESSION['nom'] = "BlagueMaster";
if (isset($_SESSION['nom'])){
    echo '<p>Ce script à créé le paramètre de session suivant : $_SESSION[\'nom\'] = ' . $_SESSION['nom'] . '</p>';
} else {
    echo '<p>Pas de valeur pour "nom" dans la session</p>';
}

echo '<br><a href="demoSessionBM.php">demoSessionBM.php</a>';