<?php
session_start();
//var_dump($_SESSION['convert_number'] );die();
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

        <div class="mt-4 ml-2 text-center">
            <h3> Conversão para <?php echo $_SESSION['convertTypeResult']. ' : ' .$_SESSION['convert_number'] ?> </h3>
        </div>

        <div class="mt-4 ml-2 text-center">
            <p class="mt-2"> Clique no botão para voltar para tela inicial</p>
            <a class="btn btn-info ml-2"
               href="../index.php"
               role="button" aria-pressed="true">
                Home page
            </a>
        </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    </body>
</html>

