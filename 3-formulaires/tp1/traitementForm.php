<!DOCTYPE html> 
<html lang="fr"> 
  <head> 
    <meta charset="UTF-8"> 
    <title>TP 1 - Traitement</title> 
  </head> 
  <body>
    <?php
        $alert = "";
        $shouldAlert = false;
        foreach ($_POST as $name => $value) {
            if(!isset($value) || empty($value)){
                $alert .= "Le champ $name n'a pas été rempli\\n ";
            }
        }
        
        if(!empty($alert)) {
            var_dump($alert);
            echo "<script>alert(\"" . $alert . "\")</script>";
            //echo '<script>window.location = "index.php";</script>';
        }
    ?>
    <table> 
        <tr>
            <th>nom</th>
            <th>prénom</th>
            <th>adresse</th>
            <th>code postal</th> 
            <th>ville</th>
        </tr> 
        <tr> 
            <td><?=filter_var($_POST['Nom'], FILTER_SANITIZE_STRING)?></td> 
            <td><?=filter_input(INPUT_POST, 'Prénom', FILTER_SANITIZE_STRING)?></td> 
            <td><?=$_POST['Adresse']?></td> 
            <td><?=filter_input(INPUT_POST, 'Cp', FILTER_SANITIZE_NUMBER_INT)?></td> 
            <td><?=$_POST['Ville']?></td>
        </tr> 
    </table> 
  </body> 
</html>
