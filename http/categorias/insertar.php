<?php
require_once("../modelos/modelo_categoria.php");
echo "calle";
switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $datos = json_decode(file_get_contents('php://input'));
        if ($datos != NULL) {
            if (Categoria::insertar($datos->nombre_categoria, $datos->descripcion)) {
                http_response_code(200);
            }
            else {
                http_response_code(400);
            }
        }
        else {
            http_response_code(405);

        }
        break;
    }
?>
