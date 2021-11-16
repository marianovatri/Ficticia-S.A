<?php
	include("req/conexion.php");
	include("funciones/function.php");
  require 'req/header.php';
  include 'css/styles.php';
?>



<body class="container">



    <style>
     
        div {
            margin: 20px;
        }

        label {
            width: 20%;
        }

        input {
            text-align: center;
        }


       

    </style>

<form action="funciones/functionEdit.php" method="post">

<table class="table table-cell">
  
   
    <?php  ?>
       
                <?php 
    $id = $_GET["id"];
	$sql = "select * from personas WHERE id = '$id'";
	$result = db_query($sql);
	while($fila = mysqli_fetch_object($result)){
	?>
    <tr>
        
    <h1>Editar datos</h1>
      

    <div>
      
  <strong>Datos Principales</strong>
  </div>

<div class="form-group">
  <label >Nombre completo</label>
  <input name="nombrecompleto" type="numb" required value="<?php echo $fila->nombrecompleto;?>">
</div>



<div class="">
  <label >Identificación</label>
  <input required name="dni" type="numb" value="<?php echo $fila->dni;?>">
</div>

<div class="form-group">
  <label > Edad</label>
  <input min="18" max="100" required name="edad" type="numb" value="<?php echo $fila->edad;?>"> 
</div>

<div class="form-group">
  <label>Género<strong> <?php echo $fila->genero;?></strong></label>
  <select class="form-control" name="genero" required>
  <option></option>
    <option>Mujer</option>
    <option>Hombre</option>
    <option>Otro</option>
    <option>Prefiero no decirlo</option>
  </select>
</div>

<div class="form-group">
  <label>Estado <strong> <?php echo $fila->estado;?></strong></label>
  <select class="form-control" name="estado" required>
  <option></option>
    <option>Activo</option>
    <option>Fuera de servicio</option>
  </select>
</div>


<div class="form-group">
  <div>
  <strong>Atributos adicionales</strong>
  </div>
  <label>¿Maneja algun vehiculo? <strong><?php echo $fila->maneja;?></strong></label >
  <select class="form-control" name="maneja" required >
    <option></option>
    <option>No</option>
    <option>Si</option> 
  </select>

  <label>¿Usa lentes? <strong> <?php echo $fila->lentes;?></strong></label>
  <select class="form-control" name="lentes" required >
    <option></option>
    <option>No</option>
    <option>Si</option>
  </select>

  <label>¿Tiene diabetes?<strong><?php echo $fila->diabetico;?></strong></label>
  <select class="form-control" name="diabetico" required >
    <option></option>
    <option>No</option>
    <option>Si</option>
  </select>

  <label>¿Tiene alguna enfermedad?<strong> <?php echo $fila->enfermedad;?></strong></label>
  <select  name="enfermedad" class="form-control" required >
  <option></option>
  <option>No</option>
  <option>Si</option>
  </select>
  
  <div class="form-group">
  <label>En caso de SI ¿Cual?</label>
  <input name="qenfermedad" type="text" value="<?php echo $fila->qenfermedad;?>">
  </div>

    
       
       
        
        <input name="id" type="hidden" value="<?php echo $fila->id;?>">
       
      
        
   
	</tr>
    
    <?php } ?>
                   
    
</table>
<input  class="btn btn-primary btn-lg btn-block" type="submit" value="Actualizar" >


<?php

include("funciones/validacion.php");

?>

</form>


</body>
</html>
