

<?php
include ('conn.php');

date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
                //   $fecha_actual=strftime("%Y-%m-%d");
                //   $hora_actual=strftime("%H:%M:%S");

$id= $_POST['id'];
$nombre = $_POST['nombre'];
$curp = $_POST['curp'];
$nss = $_POST['nss'];
$tipo_sangre = $_POST['tipo_sangre'];
$fecha_dia = $_POST['dia'];
$fecha_mes = $_POST['mes'];
$fecha_annio = $_POST['annio'];
// $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
// $priv = ;
$status_sistema = $_POST['status_sistema'];

$sql_2="UPDATE usuarios
SET nombre_completo='$nombre', curp='$curp', nss='$nss',tipo_sangre='$tipo_sangre',fecha_reg_dia='$fecha_dia',fecha_reg_mes='$fecha_mes',
fecha_reg_annio='$fecha_annio',status_sistema='$status_sistema'
WHERE id='$id'";

$resultado2= $conn->query($sql_2);

if($resultado2){

    header ('Location:../perfiles/super_usr/catalogo_trabajadores.php');
}

else{

    echo 'No se registró la actividad';
}

?>