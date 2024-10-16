<?php
include('conexion.php');


// Recibe los datos del formulario de registro
$nombre = $_POST["nombre"];
$imagen = $_POST["imagen"];


// Inserta los datos en la tabla de usuarios
$sql = "INSERT INTO tarjeta (nombre, imagen) VALUES ('$nombre','$imagen')";
if ($conexion->query($sql) === TRUE) {
      echo "hola"
    ?>
  
 
  <?php
} else {
echo "Error al registrar: " . $conexion->error;
}


?>
