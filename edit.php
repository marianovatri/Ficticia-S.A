<?php
	include("conexion.php");
?>

<?php
	include("function.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>


<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="#">
    <img src="https://assurerbroker.com/wp-content/uploads/2020/10/corazon-con-variante-de-linea-de-vida.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <h6>Ficticia S.A</h6>
    <div>
    <a href="index.php">Registrarse</a>
    <a href="darBaja.php">Clientes Actuales</a>
    </div>
  </a>
</nav>




<body class="container">



    <style>
        th {
            margin: 20px;
        }
        tr {
            margin: 20px;
        }
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

<form action="functionEdit.php" method="post">

<table class="table table-cell">
  
   
    <?php  ?>
       
                <?php 
    $id = $_GET["id"];
	$sql = "select * from personas WHERE id = '$id'";
	$result = db_query($sql);
	while($fila = mysqli_fetch_object($result)){
	?>
    <tr>
        
    <h1 style="text-align: center">Editar datos</h1>
      

    <div>
      
  <strong>Datos Principales</strong>
  </div>

<div class="form-group">
  <label >Nombre completo</label>
  <input name="nombrecompleto" type="numb" required value="<?php echo $fila->nombrecompleto;?>">
</div>



<div class="form-group">
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


</form>


</body>
</html>
