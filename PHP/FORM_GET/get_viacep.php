<?php

    $cep = $_GET['cep'];                                // recupera o value do campo CEP

    if (!empty($cep)) {                                 // verifica se o campo cep não está vazio
        $url = "https://viacep.com.br/ws/$cep/json/";  // URL da API ViaCep com o CEP interpolado

        $resposta = file_get_contents($url);
        $dados = json_decode($resposta, true);          // Decodifica o JSON para um array associativo

        print_r($dados);                                    // Exibe o array de dados retornados pela API
        echo "</br>";                                   // Quebra de linha para melhor visualização
        echo $dados['logradouro'];                      // Exibe uma propriedade específica, por exemplo, logradouro

        echo "

        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Consulta API ViaCep - RESPOSTA DA CONSULTA</title>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB' crossorigin='anonymous'>
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js' integrity='sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI' crossorigin='anonymous'></script>
        </head>

            <div class='card text-white bg-primary mb-3' style='max-width: 18rem;'>
                <div class='card-header'>Header</div>
                <div class='card-body'>
                    <h5 class='card-title'>Primary card title</h5>
                    <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        ";
        
    } else {

        echo "<h2> Erro: CEP não informado </h2>";   // título de erro
        
    }

?>