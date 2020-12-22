<html>

<header>
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="sweetalert2.all.min.js"></script>
  <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

</header>

<?php
include ('conn.php');

date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
                //   $fecha_actual=strftime("%Y-%m-%d");
                //   $hora_actual=strftime("%H:%M:%S");

$nombre = $_POST['nombre'];
$curp = $_POST['curp'];
$nss = $_POST['nss'];
$tipo_sangre = $_POST['tipo_sangre'];
$fecha_dia = $_POST['dia'];
$fecha_mes = $_POST['mes'];
$fecha_annio = $_POST['annio'];
$fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
// $priv = 1;

$sql_2="INSERT INTO trabajadores(nombre,curp,nss,tipo_sangre,fecha_reg_dia,fecha_reg_mes,fecha_reg_annio,fecha_sistema,status_sistema) 
VALUES('$nombre','$curp','$nss','$tipo_sangre','$fecha_dia','$fecha_mes','$fecha_annio','$fecha_sistema','$priv')";
$resultado2= $conn->query($sql_2);

if($resultado2){

    echo "<script type=\"text/javascript\">
    Swal.fire({
        icon: 'success',
        title: 'Acción correcta',
        text: 'Trabajador agregado',
        footer: 'PROCYON</a>'
    }).then(function(){window.location='../perfiles/super_usr/dashboard.php';});</script>";

    // header ('Location:../perfiles/super_usr/dashboard.php');
}

else{

    echo 'No se registró la actividad';
}

?>
</html>