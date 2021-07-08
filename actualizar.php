<?php

if(isset($_POST["invitacion"])){
    echo json_encode(actualizarEstatus($_POST["invitacion"]));
}
else {
    echo json_encode("No encontrado");
}

function actualizarEstatus($idinvi){
    $connecion = new PDO("mysql:host=a2nlmysql25plsk.secureserver.net; dbname=QuinceBD", "chayane_admin", "123Tamarindo@");
    $query = "update invitaciones set status = 'Asistio' where id = '$idinvi'";
    $statement = $connecion->prepare($query);
    $statement->execute(); 

    return "Exito";
}