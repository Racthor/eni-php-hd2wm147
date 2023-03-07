<?php
$tablo=[
    'Kirsch'=>[
        'Pol', // indice 0
        'Nantes', // indice 1
        80 // indice 2
    ],
    'Kauffeisen'=>[
        'Sylvain', // indice 0
        'Nantes', // indice 1
        31 // indice 2
    ]
];
var_dump($tablo);
var_dump($tablo['Kirsch']);

$tabl2=[
    'Volant'=>[
        'prenom' => 'Jean-Marc', // indice 0
        'ville de residence' => 'Nantes', // indice 1
        'age'=> 30 // indice 2
    ]
];
var_dump($tabl2['Volant']);
/*
foreach ($tabl2 as $personne){
    echo "element 0 : {$personne['prenom']} <br>";
    echo "element 3 : {$personne['ville de residence']} <br>";
    echo "element 1 : {$personne['age']} <br>";
    echo "<br>";
}*/
echo '<ul>';
foreach ($tablo as $cle => $sousTableau) {
    echo '<li>'. 'element '.$cle;
    echo    '<ul>';
    foreach ($sousTableau as $cle => $valeur) {
        echo '<li>'. 'element '.$cle.' : '.$valeur . '</li>';
    }
    echo    '</ul></li>';
}
echo '</ul>';

echo "EXO 4 :";
$emails = array(
    "fghjk@campus-eni.fr",
    "lxckvnbopzs@campus-eni.fr",
    "qsdfghj@gmail.com",
    "nb.trfdddv@gmail.com",
    "pokjzedcv@yahoo.fr",
    "zedfg.tggyhnii@hotmail.com",
    "ppodfnnbc.dfgsdfh@campus-eni.fr",
);

$newArray = array();
foreach ($emails as $value) {
    $newArray[] = explode('@', $value)[1];
}
var_dump($newArray);

$stat = array_count_values($newArray);
var_dump($stat);

echo '<ul>';
foreach($stat as $key => $value) {
    echo '<li>';
    echo "l'occurrence " . $key;
    echo '<br>';
    echo "apparait " . $value . " fois";
    echo '<br>';
    echo "soit un pourcentage de " . round(($value / count($emails))*100, 0) . '%';
    echo '</li>';
}
echo '</ul>';