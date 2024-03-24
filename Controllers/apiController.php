<?php
class ApiController {
    public static function handleRequest() {
        // Obtener el cuerpo de la solicitud en formato JSON
        $input = file_get_contents("php://input");
        $request = json_decode($input, true);

        if ($_SERVER["REQUEST_METHOD"] === "POST" && $request !== null) {
            if (isset($request["operation"]) && isset($request["num1"]) && isset($request["num2"])) {
                $operation = $request["operation"];
                $num1 = $request["num1"];
                $num2 = $request["num2"];

                include_once "./Models/operacionesModel.php"; // Incluir el modelo de operaciones

                // Realizar la operación solicitada
                switch ($operation) {
                    case "suma":
                        $resultado = OperacionesModel::sumar($num1, $num2);
                        break;
                    case "resta":
                        $resultado = OperacionesModel::restar($num1, $num2);
                        break;
                    case "multiplicacion":
                        $resultado = OperacionesModel::multiplicar($num1, $num2);
                        break;
                    case "division":
                        $resultado = OperacionesModel::dividir($num1, $num2);
                        break;
                    default:
                        http_response_code(400); // Bad Request
                        echo json_encode(array("error" => "Operación no válida"));
                        exit();
                }

                // Devolver el resultado como JSON
                http_response_code(200);
                echo json_encode(array("result" => $resultado));
            } else {
                http_response_code(400); // Bad Request
                echo json_encode(array("error" => "Parámetros incompletos"));
            }
        } else {
            http_response_code(405); // Method Not Allowed
            echo json_encode(array("error" => "Método no permitido"));
        }

        // Finalizar el script después de generar la respuesta
        exit();
    }
}

// Llamar al método handleRequest de la clase ApiController
ApiController::handleRequest();
?>
