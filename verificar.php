<?php

if(isset($_POST["invitacion"])){
    $datos_peticion = $_POST["invitacion"];
    echo json_encode(verificar($datos_peticion));
}
else {
    echo json_encode("No encontrado");
}

function verificar($idinvitacion){
    $connecion = new PDO("mysql:host=a2nlmysql25plsk.secureserver.net; dbname=QuinceBD", "chayane_admin", "123Tamarindo@");
    $query = "select i.status,CONCAT(inv.Nombre, ' ', inv.Apellido) as Nombre, inv.Invitados from invitaciones i inner join Invitados inv on i.id_persona=inv.idInvitados where i.id = '$idinvitacion'";
    $statement = $connecion->prepare($query);
    $statement->execute(); 
    $result = $statement->fetch();

    $arreglo_final = array("Nombre"=>$result["Nombre"],
                            "Status"=>$result["status"],
                        "Invitados"=>$result["Invitados"]);
                        
    return $arreglo_final;
}

?>