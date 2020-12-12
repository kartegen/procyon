

<?php
include ('conn.php');

date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
                //   $fecha_actual=strftime("%Y-%m-%d");
                //   $hora_actual=strftime("%H:%M:%S");

$id= $_POST['id'];
$cliente = $_POST['nombre_empresa'];
$domicilio = $_POST['domicilio'];
$fecha_dia = $_POST['dia'];
$fecha_mes = $_POST['mes'];
$fecha_annio = $_POST['annio'];
$usr_vinculado = $_POST['usr_vinculado'];
// $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
// $priv = ;
$status_sistema = $_POST['status_sistema'];

$sql_2="UPDATE clientes
SET cliente='$cliente', domicilio='$domicilio',fecha_reg_dia='$fecha_dia',fecha_reg_mes='$fecha_mes',
fecha_reg_annio='$fecha_annio',status_sistema='$status_sistema',usr_vinculado=$usr_vinculado
WHERE id='$id'";

// $sql_2="INSERT INTO trabajadores(nombre,curp,nss,tipo_sangre,fecha_reg_dia,fecha_reg_mes,fecha_reg_annio,fecha_sistema,status_sistema) 
// VALUES('$nombre','$curp','$nss','$tipo_sangre','$fecha_dia','$fecha_mes','$fecha_annio','$fecha_sistema','$priv')";
$resultado2= $conn->query($sql_2);

if($resultado2){

    header ('Location:../perfiles/super_usr/catalogo_empresas.php');
}

else{

    echo 'No se registró la actividad';
}

?>