<form>

    <input type="text" name="Nome">
    <input type="date" name="Nacimento">
    <input type="submit" valuer="Ok">

</form>

<?php

    if(isset($_GET)){
    
        foreach($_GET as $key => $value){

            echo "Nome do campo : ".$key."<br>";

            echo "Valor do campo : ".$value;

            echo "<hr>";
        }

    }

?>