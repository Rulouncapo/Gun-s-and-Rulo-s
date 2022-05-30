<?php
    require_once("db.php");
    class Producto{
        public static function obtenerTodos(){
            $db = new Conexion();
            $query = "SELECT * FROM item";
            $resultado = $db->query($query);
            $datos = [];
            if ($resultado->num_rows){
                while ($row = $resultado->fetch_assoc()){
                    $datos[] = [
                        'id' => $row['id'],
                        'nombre' => $row['nombre'],
                        'descripcion' => $row['descripcion'],
                        'precio' => $row['precio'],
                        'stock' => $row['id_stock'],
                    ];
                }
            }  return $datos;
        }
        public static function obtenerCon($id){
            $db = new Conexion();
            $query = "SELECT * FROM item WHERE id=$id";
            $resultado = $db->query($query);
            $datos = [];
            if ($resultado->num_rows) {
                while ($row = $resultado->fetch_assoc()) {
                    $datos[] = [
                        'id' => $row['id'],
                        'nombre' => $row['nombre'],
                        'descripcion' => $row['descripcion'],
                        'precio' => $row['precio'],
                        'stock' => $row['id_stock'],
                    ];
                }
            }return $datos;
        }
        public static function insertar($nombre,$descripcion,$precio,$id_stock){
            $db = new Conexion();
            $query = "INSERT INTO item (nombre, descripcion, precio, id_stock) 
            VALUES ('".$nombre."','".$descripcion."','".$precio."','".$id_stock."')";
            $db->query($query);
            if ($db->affected_rows) {
                return TRUE;
            }else{
                return FALSE;
            }
        }
        public static function update($id,$nombre,$descripcion,$precio,$id_stock){
            $db = new Conexion();
            $query = "UPDATE item SET 
            nombre='".$nombre."', descripcion = '".$descripcion."', precio='".$precio."', id_stock='".$id_stock."' WHERE id=$id";
            $db->query($query);
            if ($db->affected_rows) {
                return TRUE;
            }else{
                return FALSE;
            }
        }
        public static function eliminar($id){
            $db = new Conexion();
            $query = "DELETE FROM item WHERE id=$id";
            $db->query($query);
            if ($db->affected_rows) {
                return TRUE;
            }else{
                return FALSE;
            }
        }
    }
?>