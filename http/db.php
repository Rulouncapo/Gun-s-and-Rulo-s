<?php
    class Conexion extends Mysqli{
        function __construct(){
            parent::__construct('localhost','root','','e-commerce');
            $this->set_charset('utf8');
                $this->connect_error == NULL ? 'Conexión exitosa' : die('Error al conectarse');
        }
    } 

?>