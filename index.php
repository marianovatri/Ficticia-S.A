
<?php
	include("conexion.php");
  
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

    

     
?>

<?php require 'req/header.php' ?>


<style>
  
h1 {
     text-align: center;
        }

</style>

<body class="container">


<form id="formulario" name="formulario" method="POST" >



<h1>Registrarse</h1>
<div>
  <strong>Datos Principales</strong>
  </div>

<div class="form-group">
  <label >Nombre completo</label>
  <input class="form-control" name="nombrecompleto"  type="text" 
  value="<?php if(isset($nombrecompleto)) echo $nombrecompleto ?>"  required
  pattern="[A-Za-z- ]{5,30}"  title="Ingrese solo letras. Tamaño mínimo: 5. Tamaño máximo: 30"       >
</div>




<div class="form-group">
  <label >Identificación</label>
  <input class="form-control" value="<?php if(isset($dni)) echo $dni ?>" name="dni"  type="number"    
  required pattern="[0-9]{8,8}"  >
</div>

<div class="form-group">
  <label > Edad</label>
  <input value="<?php if(isset($edad)) echo $edad ?>" class="form-control" type="number" min="18" max="100" name="edad"  required   >  
</div>

<div class="form-group">
  <label>Género</label>
  <select class="form-control" name="genero"  required    >
  <option></option>
    <option>Mujer</option>
    <option>Hombre</option>
    <option>Otro</option>
    <option>Prefiero no decirlo</option>
  </select>
</div>

<div class="form-group">
  <label>Estado</label>
  <select class="form-control" name="estado"   required   >
  <option></option>
    <option>Activo</option>
    <option>Fuera de servicio</option>
  </select>
</div>


<div class="form-group">
  <div>
  <strong>Atributos adicionales</strong>
  </div>
  <label>¿Maneja algun vehiculo?</label >
  <select class="form-control" name="maneja"    required  >
    <option></option>
    <option>No</option>
    <option>Si</option> 
  </select>

  <label>¿Usa lentes?</label>
  <select class="form-control" name="lentes"   required   >
    <option></option>
    <option>No</option>
    <option>Si</option>
  </select>

  <label>¿Tiene diabetes?</label>
  <select class="form-control" name="diabetico"   required   >
    <option></option>
    <option>No</option>
    <option>Si</option>
  </select>

  <label>¿Tiene alguna enfermedad?</label>
  
  <select  name="enfermedad" class="form-control"    required  >
  <option></option>
  <option>No</option>
  <option>Si</option>
  </select>
  
  <input class="form-control" type="text" name="qenfermedad" placeholder="En caso de SI, expecificar cual" >  

  

</div>

<button type="submit" class="btn btn-primary btn-lg btn-block" name="registrarse">Registrarse</button>

<?php

include("validacion.php");

?>

</form>


<br>

</body>
</html>
