<?php

    $frase = "A repetição é mãe da renteção.";

    $palavra = "mãe";

    $q = strpos($frase, $palavra); //strpos(alvo, ateOnde)

    $texto = substr($frase, 0, $q); //substr(alvo,começo, fim)

    var_dump($q);

    echo "<br/>";

    echo $texto;

    echo "<br/>";

    $texto = substr($frase, $q + strlen($palavra), strlen($frase)); // strlen() qantidade de caracters string

    echo $texto;

    echo "<br/>";

    var_dump($texto);

?>