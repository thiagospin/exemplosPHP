<?php

    $vetor_notas = array(5.0, 7.5, 8.5, 9.0, 10.0, 4.0);
   
    foreach($vetor_notas as $nota){

        if($nota == 10){
            echo "Aluno Aprovado com nota 10! <br>";
            echo "Saindo da verificação!";
            break;
        }

        echo "Nota: " . $nota . " insuficiente. <br>";
    }

?>