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

        h1 {
            text-align: center;
        }

        a {
            text-decoration: none;
        }

       

    </style>

<h1>Clientes Actuales</h1>
<table class="table table-cell">
    <tr>
        <th>ID</th>
        <th>Nombre Completo</th>
        <th>Identidad</th>
        <th>Edad</th>
        <th>Género</th>
        <th>Estado</th>
        <th>Maneja</th>
        <th>Lentes</th>
        <th>Diabetico</th>
        <th>Enfermedad</th>
        <th>¿Cual?</th>
        <th colspan="2">Opciones</th>
        
    </tr>
    <?php  ?>
       
                <?php 
	$sql = "select * from personas";
	$result = db_query($sql);
	while($fila = mysqli_fetch_object($result)){
	?>
    <tr>
        <td><?php echo $fila->id;?></td>
        <td><?php echo $fila->nombrecompleto;?></td>
        <td><?php echo $fila->dni;?></td>
        <td><?php echo $fila->edad;?></td>
        <td><?php echo $fila->genero;?></td>
        <td><?php echo $fila->estado;?></td>
        <td><?php echo $fila->maneja;?></td>
        <td><?php echo $fila->lentes;?></td>
        <td><?php echo $fila->diabetico;?></td>
        <td><?php echo $fila->enfermedad;?></td>
        <td><?php echo $fila->qenfermedad;?></td>  
        
   


        <td style="display: flex;">

            <a  onclick="alert('El usuario fue borrado exitosamente')" class="btn btn-primary" href="eliminar.php?id=<?php echo $fila->id;?>">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-scissors" viewBox="0 0 16 16">
                    <path d="M3.5 3.5c-.614-.884-.074-1.962.858-2.5L8 7.226 11.642 1c.932.538 1.472 1.616.858 2.5L8.81 8.61l1.556 2.661a2.5 2.5 0 1 1-.794.637L8 9.73l-1.572 2.177a2.5 2.5 0 1 1-.794-.637L7.19 8.61 3.5 3.5zm2.5 10a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0zm7 0a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
                </svg>
            </a> 

            <a  class="btn btn-primary" href="edit.php?id=<?php echo $fila->id;?>">
        
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                </svg>

            </a>

        </td>
        
	</tr>
    
    <?php } ?>
                   

</table>


</body>
</html>
