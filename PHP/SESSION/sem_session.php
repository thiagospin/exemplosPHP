<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
   
    if (isset($contador)){

        $contador = $contador + 1;

    }
    else{

        $contador = 1;

    }
}

echo "Contador de cliques: " . $contador;

?>