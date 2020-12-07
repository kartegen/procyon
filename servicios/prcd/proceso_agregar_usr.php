

<?php
// session_start();
include ('conn.php');

date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
                //   $fecha_actual=strftime("%Y-%m-%d");
                //   $hora_actual=strftime("%H:%M:%S");

$nombre = $_POST['nombre'];
$usr = $_POST['usr'];
$pwd = $_POST['pwd'];
$fecha_dia = $_POST['fecha_dia'];
$fecha_mes = $_POST['fecha_mes'];
$fecha_annio = $_POST['fecha_annio'];
$fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
$priv = $_POST['priv'];

$sql_2="INSERT INTO usuarios(usr,pwd,priv,nombre_completo,fecha_reg_dia,fecha_reg_mes,fecha_reg_annio,fecha_sistema) 
VALUES('$usr','$pwd','$priv','$nombre','$fecha_dia','$fecha_mes','$fecha_annio','$fecha_sistema')";
$resultado2= $conn->query($sql_2);

if($resultado2){

    header ('Location:../dashboard.php');
}

else{

    echo 'No se registró la actividad';
}

?>