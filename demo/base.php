<?php
    echo '<h1>Hello World !</h1>';
    //un commentaire sur une ligne
    echo '<p>Y a un commentaire au dessus ?!</p>';
    /* un
     * commentaire
     * sur
     * plusieurs
     * lignes.
     */
    $globe = "je suis pas exactement rond";
    function testReference($param1, $param2, $globe) {
        var_dump($globe);
        var_dump($param1);
        var_dump($param2);
        $tab = explode(' ', $param1);
        $globe1 = "je suis pas tout à fait vert";
        return $tab;
    }

    var_dump($globe);
    echo "=== Exécution de la fonction ====";
    $tableau = testReference("c'est la ficelle", 12.659, $globe);
    echo "=== End Exécution de la fonction ====";
    var_dump($tableau);
    var_dump($globe);
    
    function variableStatique (){
        $variable = 0 ;
        static $variable_statique = 0;
        $variable ++;
        echo "Variable : $variable <br/>";
        $variable_statique++;
        echo "Variable statique $variable_statique <br/>";
    }

    variableStatique();
    variableStatique();
    variableStatique();
    variableStatique();
    variableStatique();
    variableStatique();

    $casimir = "c'est un modo";
    function testDesGlobale() {
        global $casimir;
        var_dump('on est dans testDesGlobale' . $casimir);
        $GLOBALS['casimodo'] = "c'est un imir";
    }

    function test2() {
        global $casimir;
        global $casimodo;
        $casimir .= " attention à frolo";
        var_dump('on est dans test 2' . $casimodo);
    }

    echo "=== ça commence là ===";
    test2();
    testDesGlobale();
    var_dump('var_dump en dehors des fonctions' . $casimodo);
    test2();
    testDesGlobale();

    'très puissant saitama est vraiment 
    très très puissant mais genos n\'est pas si puissant 
    tandis que super-man pourrait être considéré comme très très très puissant
    San goku est il très très très très très puissant ? grave';