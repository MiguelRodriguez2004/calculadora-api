<?php
header("Content-Type: application/json");

$request = $_POST; // Obtener los datos de la solicitud POST

include_once "Controllers/apiController.php"; // Incluir el controlador

ApiController::handleRequest($request); // Manejar la solicitud
?>
