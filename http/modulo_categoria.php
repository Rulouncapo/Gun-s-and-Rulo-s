<?php
     $conexion = new mysqli("localhost", "root", "", "ecommerce");
     @$traer=$_GET['traer'];
     @$traer=$_GET['traer'];
     @$traer=$_GET['traer'];
     @$traer=$_GET['traer'];

     if($traer){
         $resultado = $conexion->query("SELECT * FROM `categoria` WHERE `id_categoria`='$traer' ");
         $data = $resultado->fetch_all(MYSQLI_ASSOC);
         echo json_encode($data);
    }
?>


