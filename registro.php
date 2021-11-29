
<?php
	include("req/conexion.php");
  include 'css/styles.php';
  include 'funciones/registrarse.php';
  require 'req/header.php';
 
?>



<body class="container">


<form id="formulario" name="formulario" method="POST" >



<h1>Registro de Clientes </h1>
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
  required pattern="[0-9]{8,8}" title="El contenido debe tener 8 digitos."   >
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

  <label>¿Tiene alguna enfermedad? </label>
  
  <select  name="enfermedad" class="form-control" onchange="a(this.value)"  required    >
  <option></option>
  <option value="No">No</option>
  <option value="Si">Si</option>
  </select>


  <input class="form-control" type="text" name="qenfermedad" placeholder="En caso de SI, expecificar cual." required >
  

</div>
<?php

include("funciones/validacion.php");

?>
<button type="submit" class="btn btn-primary btn-lg btn-block" name="registrarse">Registrar</button>


</form>


<br>

</body>
</html>
