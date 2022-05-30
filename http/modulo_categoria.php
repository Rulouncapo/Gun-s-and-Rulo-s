<?php
     $conexion = new mysqli("localhost", "root", "", "ecommerce");
     @$traer=$_GET['traer'];
     @$insertar=$POST['insertar'];
     extract($insertar);
     @$traer=$_GET['traer'];
     @$cosa=$_GET['traer'];
     @$cosa=$_GET['traer'];

     if($traer){
         $resultado = $conexion->query("SELECT * FROM `categoria` WHERE `id_categoria`='$traer' ");
         $data = $resultado->fetch_all(MYSQLI_ASSOC);
         echo json_encode($data);
    }
    if($insertar){
        $resultado = $conexion->query("INSERT INTO `categoria`(`id_categoria`, `nombre_categoria`, `descripcion`) VALUES ('[value-1]','[value-2]','[value-3]')");
        $data = $resultado->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
   }
?>


