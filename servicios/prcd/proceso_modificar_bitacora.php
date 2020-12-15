

<?php
include ('conn.php');

date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
                //   $fecha_actual=strftime("%Y-%m-%d");
                //   $hora_actual=strftime("%H:%M:%S");

$id= $_POST['id'];
$empresa = $_POST['empresa'];
$trabajador = $_POST['trabajador'];
// $fecha_dia = $_POST['dia'];
// $fecha_mes = $_POST['mes'];
// $fecha_annio = $_POST['annio'];
$semana = $_POST['semana'];
// $observaciones = $_POST['observaciones'];
//aquí variable de sesión

$sql_2="UPDATE bitacora
SET cliente='$empresa', asignado='$trabajador',semana='$semana'
WHERE id='$id'";

// $sql_2="INSERT INTO trabajadores(nombre,curp,nss,tipo_sangre,fecha_reg_dia,fecha_reg_mes,fecha_reg_annio,fecha_sistema,status_sistema) 
// VALUES('$nombre','$curp','$nss','$tipo_sangre','$fecha_dia','$fecha_mes','$fecha_annio','$fecha_sistema','$priv')";
$resultado2= $conn->query($sql_2);

if($resultado2){

    header ('Location:../perfiles/super_usr/revision_bitacora.php');
}

else{

    echo 'No se registró la actividad';
}

?>