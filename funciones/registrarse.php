<?php

   if(isset($_POST['registrarse'])) {
       
    $id = NULL;
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
    
  


    $insertDates = "INSERT INTO personas VALUES(
   
    '$id',
    '$dni',
    '$edad',
    '$genero',
    '$estado',
    '$maneja',
    '$lentes',
    '$diabetico',
    '$enfermedad',
    '$qenfermedad',
    '$nombrecompleto'
    )";

        $ejecuteInsert = mysqli_query($enlace, $insertDates);

        if($ejecuteInsert) {
            echo 
            '<div class="btn btn-primary" role="alert">
            Se registro correctamente.
            </div>';
            
        } else {
          echo'<div class="alert alert-danger" role="alert">
            !Debe rellenar todos los campos correctamente antes de Registrarte¡
          </div>';
        }

}