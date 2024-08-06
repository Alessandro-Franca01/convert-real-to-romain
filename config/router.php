<?php
session_start();

require_once '../vendor/autoload.php';

use App\Controllers\ConvertController;

// Used Controller
$convertController = ConvertController::create();

$isReal = $convertController->check($_POST['number']);
$objectNumber = $convertController->instanceNumber($isReal, $_POST['number']);
$convertedNumber = $convertController->convertNumber($objectNumber);

if (empty($convertedNumber)) {
    $_SESSION['error'] = 'Valor digital não pode ser convertido';
    header('Location: ../views/error.php');
}

$_SESSION['convert_number'] = $convertedNumber;
header('Location: ../views/results.php');

