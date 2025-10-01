<?php
$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

if ($senha === '123456') {
    echo "<div style='margin:40px auto;max-width:400px;text-align:center;'>
            <h2>Bem-vindo, $usuario!</h2>
            <p>Login realizado com sucesso.</p>
            <a href='index.html'>Sair</a>
          </div>";
} else {
    echo "<div style='margin:40px auto;max-width:400px;text-align:center;'>
            <h2>Senha incorreta!</h2>
            <a href='index.html'>Tentar novamente</a>
          </div>";
}
?>