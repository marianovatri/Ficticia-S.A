<?php

function db_query($query) {
    $connection = mysqli_connect("localhost","root","","clientes");
    $result = mysqli_query($connection,$query);

    return $result;
}

  function delete($personas,$fila,$id){

    $sql = "delete from ".$personas." where ".$fila."=".$id."";
    
    return db_query($sql) ;
}



?>