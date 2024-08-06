<?php
//session_name('CONVERT_NUMBER');
session_start();

$_SESSION['method'] = 'convertToReal';

require_once './vendor/autoload.php';

//var_dump($_SESSION);
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>App Conversão Numerica </title>
        <!-- Links -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <h1 class="text-center"> App Conversão </h1>

        <div class="mt-4 ml-2">
            <h2> Converta números de Romano para Reais até 100</h2>
        </div>

        <form action="config/router.php" method="POST">
            <div class="form-group ml-2 mr-2">
                <label for="idNumberRomain">Digite um número</label>
                <input class="form-control" id="idNumber" name="number" placeholder="Digite qualquer valor" required>
            </div>

            <button type="submit" class="btn btn-primary ml-2">Enviar</button>
            <button type="reset" class="btn btn-secundary">Limpar</button

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    </body>
</html>
