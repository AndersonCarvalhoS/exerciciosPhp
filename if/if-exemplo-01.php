<?php

    $qualAsuaIdade = 26;

    $idadeCriança = 12;
    $idadeMaior = 18;
    $idadeMelho = 65;

    if ($qualAsuaIdade <= $idadeCriança){

        echo "Criança!";

    } else if(($qualAsuaIdade > $idadeCriança) && ($qualAsuaIdade < $idadeMaior)){
        echo "Adolescente!";
    } else if (($qualAsuaIdade >= $idadeMaior) &&($qualAsuaIdade < $idadeMelho)){
        echo "Maior de idade!";
    } else {
        echo "Melho idade!";
    }

    echo "<br/>";

    echo ($qualAsuaIdade < $idadeCriança)? "Criança!" : "Não é criança!";

?>