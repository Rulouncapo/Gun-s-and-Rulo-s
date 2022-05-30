<?php
require_once("modelo_categoria.php");
require_once("modelo_producto.php");
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if (isset($_GET['id'])) {
            echo json_encode(Producto::obtenerCon($_GET['id']));
        }
        else {
            echo json_encode(Producto::obtenerTodos());
        }
        break;
    case 'POST':
        $datos = json_decode(file_get_contents('php://input'));
        if ($datos != NULL) {
            if (Producto::insertar($datos->nombre, $datos->descripcion, $datos->precio, $datos->id_stock)) {
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
    case 'PUT':
        $datos = json_decode(file_get_contents('php://input'));
        if ($datos != NULL) {
            if (Producto::update($datos->id, $datos->nombre, $datos->descripcion, $datos->precio, $datos->id_stock)) {
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
    case 'DELETE':
        if (isset($_GET['id'])) {
            if (Producto::eliminar($_GET['id'])) {
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
    default:
        http_response_code(405);
        break;
}

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if (isset($_GET['id_categoria'])) {
            echo json_encode(Categoria::obtenerCon($_GET['id_categoria']));
        }
        else {
            echo json_encode(Categoria::obtenerTodos());
        }
        break;
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
    case 'PUT':
        $datos = json_decode(file_get_contents('php://input'));
        if ($datos != NULL) {
            if (Categoria::update($datos->id_categoria, $datos->nombre_categoria, $datos->descripcion)) {
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
    case 'DELETE':
        if (isset($_GET['id_categoria'])) {
            if (Categoria::eliminar($_GET['id_categoria'])) {
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
    default:
        http_response_code(405);
        break;
}
?>