<?php

    //include "../inc/include-exemplo-01.php"; //não tam seguro
    //require "inc/include-exemplo-01.php"; //metodo seguro
    require_once "inc/include-exemplo-01.php"; // impede chamar o aquivo mais de duas vezes

    $resultado = soma(10, 20);

    echo $resultado;

?>