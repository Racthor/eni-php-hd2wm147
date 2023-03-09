<!DOCTYPE html> 
<html lang="fr"> 
    <head> 
        <meta charset="UTF-8"> 
        <title>TP 1 - Traitement</title> 
    </head> 
    <body>
        <form method="POST" action="traitementForm.php">
            <fieldset>
                <legend>Adresse client</legend>
                <input type="text" name="Nom" placeholder='votre nom...' title='Entrez ici votre nom' maxlength=30><br>
                <input type="text" name="Prénom" placeholder='votre prénom...' title='Entrez ici votre prénom' maxlength=30><br>
                <input type="text" name="Adresse" placeholder='votre adresse...' title='Entrez ici votre adresse' maxlength=120><br>
                <input type="text" name="CP" placeholder='votre code postal' title='Entrez ici votre code postal' maxlength=5><br>
                <input type="text" name="Ville" placeholder='votre ville...' title='Entrez ici votre ville' maxlength=30><br>
                <input type="submit" name="ok" value='Envoyer le formulaire'>
            </fieldset>
        </form>
    </body>
</html>