<?php
require_once("../db.php");
class Categoria
{
    public static function obtenerTodos()
    {
        $db = new Conexion();
        $query = "SELECT * FROM categoria";
        $resultado = $db->query($query);
        $datos = [];
        if ($resultado->num_rows) {
            while ($row = $resultado->fetch_assoc()) {
                $datos[] = [
                    'id_categoria' => $row['id_categoria'],
                    'nombre_categoria' => $row['nombre_categoria'],
                    'descripcion' => $row['descripcion']
                ];
            }
        }
        return $datos;
    }
    public static function obtenerCon($id_categoria)
    {
        $db = new Conexion();
        $query = "SELECT * FROM categoria WHERE id_categoria=$id_categoria";
        $resultado = $db->query($query);
        $datos = [];
        if ($resultado->num_rows) {
            while ($row = $resultado->fetch_assoc()) {
                $datos[] = [
                    'id_categoria' => $row['id_categoria'],
                    'nombre_categoria' => $row['nombre_categoria'],
                    'descripcion' => $row['descripcion']
                ];
            }
        }
        return $datos;
    }
    public static function insertar($nombre_categoria, $descripcion)
    {
        $db = new Conexion();
        $query = "INSERT INTO categoria (nombre_categoria, descripcion) 
            VALUES ('" . $nombre_categoria . "','" . $descripcion . "')";
        $db->query($query);
        if ($db->affected_rows) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
    public static function update($id, $nombre_categoria, $descripcion)
    {
        $db = new Conexion();
        $query = "UPDATE categoria SET 
            nombre_categoria='" . $nombre_categoria . "', descripcion = '" . $descripcion . "' WHERE id_categoria=$id";
        $db->query($query);
        if ($db->affected_rows) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
    public static function eliminar($id_categoria)
    {
        $db = new Conexion();
        $query = "DELETE FROM categoria WHERE id_categoria=$id_categoria";
        $db->query($query);
        if ($db->affected_rows) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
}
?>