<?php
include("./../edit.php");



include("validacion.php");


$id = $_POST["id"];
$dni =$_POST["dni"];
$edad =$_POST["edad"];
$genero =$_POST["genero"];
$estado =$_POST["estado"];
$maneja =$_POST["maneja"];
$lentes =$_POST["lentes"];
$diabetico =$_POST["diabetico"];
$enfermedad =$_POST["enfermedad"];
$qenfermedad =$_POST["qenfermedad"];
$nombrecompleto =$_POST["nombrecompleto"];



$actualizar = "UPDATE personas SET
       
        id='$id',
        dni='$dni',
        edad='$edad',
        genero='$genero',
        estado='$estado',
        maneja='$maneja',
        lentes='$lentes',
        diabetico='$diabetico',
        enfermedad='$enfermedad',
        qenfermedad='$qenfermedad',
        nombrecompleto='$nombrecompleto'
     WHERE id = '$id'";




$ejecuteInsert = mysqli_query($enlace, $actualizar);

if($ejecuteInsert) {
    echo    
    '<div class="btn btn-primary" role="alert">
    Se registro correctamente.
    </div>';
    header("location: ./../clientes.php");
    
} else {
  echo'<div class="alert alert-danger" role="alert">
    !Debe rellenar todos los campos correctamente antes de Registrarte¡
  </div>';
}
