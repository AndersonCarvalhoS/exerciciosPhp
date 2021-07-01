<?php

    $nome = "anderson carvalho";

    $nome2 = strtoupper($nome);
    
    echo strtoupper($nome); // caixa alta

    echo "<br/>";

    echo strtolower($nome2); // caixa baixa

    echo "<br/>";

    echo ucwords($nome); // caixa alta primeira letra de cada palavra

    echo "<br/>";

    echo ucfirst($nome); // caixa alta apenas a primeira palavra
?>