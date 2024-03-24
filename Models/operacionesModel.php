<?php
class OperacionesModel {
    public static function sumar($num1, $num2) {
        return $num1 + $num2;
    }

    public static function restar($num1, $num2) {
        return $num1 - $num2;
    }

    public static function multiplicar($num1, $num2) {
        return $num1 * $num2;
    }

    public static function dividir($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            http_response_code(400); // Bad Request
            echo json_encode(array("error" => "División por cero no permitida"));
            exit();
        }
    }
}
?>
