<?php
require_once("../modelos/modelo_categoria.php");
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if (isset($_GET['id_categoria'])) {
            echo json_encode(Categoria::obtenerCon($_GET['id_categoria']));
        }
        else {
            echo json_encode(Categoria::obtenerTodos());
        }
        break;}
?>
