<?php
if(isset($_POST['registrarse'])) {

    if(empty($nombrecompleto)) {
        echo "<p class='error'>* Falta agregar tu nombre. </p> ";
    } else {
        if(strlen($nombrecompleto) < 5 ) {

            echo "<p class='error'>* El nombre es muy corto. </p> ";

        }  elseif (strlen($nombrecompleto) > 30) {

            echo "<p class='error'>* El nombre es muy largo. </p> ";

        }  elseif (is_numeric($nombrecompleto)) {

            echo "<p class='error'>* En el nombre solo puedes ingresar letras. </p> "; 
        }
        
    } 


    if(empty($dni)) {
        echo "<p class='error'>* Falta agregar tu identificacion. </p> ";
    } else {
        if(!is_numeric($dni)) {
            echo "<p class='error'>* En la identificacion solo puedes ingresar numeros. </p> "; 
        } elseif (strlen($dni) != 8 ) {

            echo "<p class='error'>* En la identificacion deben ser 8 digitos. </p> ";

        }
    }


    if(empty($edad)) {
        echo "<p class='error'>* Falta agregar tu edad </p> ";
    } else {
        if(!is_numeric($edad)) {
            echo "<p class='error'>* En la edad solo puedes ingresar numeros. </p> "; 

        }   elseif ($edad<18) {
                echo "<p class='error'>*  Debes tener mas de 18 años para poder registrarte. </p> ";

        }   elseif ($edad>100) {
            echo "<p class='error'>*  Debes tener menos de 100 años para poder registrarte. </p> ";

        }

    }
    


    if(empty($genero)) {
        echo "<p class='error'>* Falta agregar tu genero </p> ";
    } else {
        if(($genero != 'Hombre') && ($genero != 'Mujer') && ($genero != 'Otro') && ($genero != 'Prefiero no decirlo' )) {
            echo "<p class='error'>* Selecciona el genero que damos por opciones. </p> ";
        }

    }




    if(empty($estado)) {
        echo "<p class='error'>* Falta agregar tu estado </p> ";
    } else {
        if(($estado != 'Activo') && ($estado != 'Fuera de servicio' )) {
            echo "<p class='error'>* Selecciona el estado que damos por opciones. </p> ";
        }

    }


    if(empty($maneja)) {
        echo "<p class='error'>* Falta agregar si maneja </p> ";
    } else {
        if(($maneja != 'No') && ($maneja != 'Si')) {
            echo "<p class='error'>* No se permite otra opciones de las que ofrecemos en el campo -Atributos adicionales-</p> ";
        }

    }



    if(empty($lentes)) {
        echo "<p class='error'>* Falta agregar si usa lentes </p> ";
    } else {
        if(($lentes != 'No') && ($lentes != 'Si')) {
            echo "<p class='error'>* No se permite otra opciones de las que ofrecemos en el campo -Atributos adicionales-</p> ";
        }

    }




    if(empty($diabetico)) {
        echo "<p class='error'>* Falta agregar si es diabetico </p> ";
    } else {
        if(($diabetico != 'No') && ($diabetico != 'Si')) {
            echo "<p class='error'>* No se permite otra opciones de las que ofrecemos en el campo -Atributos adicionales-</p> ";
        }

    }



    if(empty($enfermedad)) {
        echo "<p class='error'>* Falta agregar si tiene o no alguna enfermedad </p> ";
    } else {
        if(($enfermedad == "Si") && (empty($qenfermedad))) {
            echo "* Debe expecificar que enfermedad tiene."; 
          }
        if(($enfermedad != 'No') && ($enfermedad != 'Si')) {
            echo "<p class='error'>* No se permite otra opciones de las que ofrecemos en el campo -Atributos adicionales-</p> ";
        }

    }

}
