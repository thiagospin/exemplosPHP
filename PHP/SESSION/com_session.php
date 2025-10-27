<?php

session_start();

$_SESSION['contador'] = $_SESSION['contador'] ?? 0;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $_SESSION['contador'] = $_SESSION['contador'] + 1;
}

echo "Contador de cliques: " . $_SESSION['contador'];

?>