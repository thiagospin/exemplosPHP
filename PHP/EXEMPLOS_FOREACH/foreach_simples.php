<?php

    $vetor_notas = array(5.0, 7.5, 8.5, 9.0, 4.0);

    $soma = 0;
    $qtd_avaliacoes = count($vetor_notas);
    
    foreach($vetor_notas as $nota){

        $soma += $nota;
    }

    $media = $soma / $qtd_avaliacoes;
    
    echo "A média das notas é: " . number_format($media, 2);

?>