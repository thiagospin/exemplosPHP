<?php
    session_start();

    $nome = $_POST['nome'];
    

if (!empty($nome)) {
    
    $_SESSION['lista_nomes'][] = $nome;

    foreach ($_SESSION['lista_nomes'] as $nome) {
        echo "$nome . <br>";
    }

    echo "<a href='index.html'>Voltar</a>";
}


