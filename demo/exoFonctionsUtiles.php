<?php
echo "<h1>Tp03 - fonction utile</h1>";
echo "<h2>Exercice 1</h2>";
// ============= Exo 1 =============
echo "Transformer une phrase composée de mots écrits dans 
des casses différentes afin que chaque mot ait son premier 
caractère en majuscule.
Exemple : bOnJoUr, jE sUiS UnE pHrAsE pOuR tEsTeR.<br>";

$phraseAvantModif = "bOnJoUr, jE sUiS UnE pHrAsE pOuR tEsTeR.";
echo "phrase avant modification : <br>".$phraseAvantModif."<br>";
$phraseApresModif = ucwords(strtolower($phraseAvantModif));
echo "phrase après modification : <br>".$phraseApresModif."<br>";

echo "<h2>Exercice 2</h2>";
// ============= Exo 2 =============
$prenomList = "Jean Verdier,Chantal Lemaire,Guillaume Tessier,Gilbert Clerc,Thibault Blanchard,Thibaut Gregoire,Edouard Alves,Laurence Laroche,Valentine Sanchez,Nath Adam";
$tab = explode(' ', implode(' ', explode(',', $prenomList)));
for ($i = 0; $i < count($tab); $i += 2) {
    $prenom = $tab[$i];
    $nom = $tab[$i + 1] ?? '';
    $prenom = str_pad($prenom, 20, " ", STR_PAD_RIGHT);
    $nom = str_pad($nom, 20, " ", STR_PAD_RIGHT);
    printf("<pre>%s%s</pre>", $prenom, $nom);
}

$personnes = explode(',', $prenomList);
echo "<pre>";
foreach ($personnes as $fullName) {
    $arrayFullName = explode(' ', $fullName);
    // var_dump($arrayFullName);
    
    // var_dump($arrayFullName[0]);
    // var_dump($arrayFullName[1]);
    $firstName = str_pad($arrayFullName[0], 10);
    $lastName = str_pad($arrayFullName[1], 10);
    // var_dump($firstName);
    // var_dump($lastName);
    printf("%s%s\n", $firstName, $lastName);
}
echo "</pre>";
     