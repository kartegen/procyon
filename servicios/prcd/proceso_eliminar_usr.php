

<?php
include ('conn.php');

date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
                //   $fecha_actual=strftime("%Y-%m-%d");
                //   $hora_actual=strftime("%H:%M:%S");

$id= $_REQUEST['id'];

$sql_2="DELETE FROM usuarios
WHERE id='$id'";

// $sql_2="INSERT INTO trabajadores(nombre,curp,nss,tipo_sangre,fecha_reg_dia,fecha_reg_mes,fecha_reg_annio,fecha_sistema,status_sistema) 
// VALUES('$nombre','$curp','$nss','$tipo_sangre','$fecha_dia','$fecha_mes','$fecha_annio','$fecha_sistema','$priv')";
$resultado2= $conn->query($sql_2);

if($resultado2){

    header ('Location:../perfiles/super_usr/catalogo_usuarios.php');
}

else{

    echo 'No se registró la actividad';
}

?>