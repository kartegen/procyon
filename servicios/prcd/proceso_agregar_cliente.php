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
$usr_vinculado= $_POST['usr_vinculado'];
$nombre = $_POST['nombre_empresa'];
$domicilio = $_POST['domicilio'];
$fecha_dia = $_POST['dia'];
$fecha_mes = $_POST['mes'];
$fecha_annio = $_POST['annio'];
$fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
$priv = 1;

$sql_2="INSERT INTO clientes(cliente,domicilio,fecha_reg_dia,fecha_reg_mes,fecha_reg_annio,fecha_sistema,status_sistema,usr_vinculado) 
VALUES('$nombre','$domicilio','$fecha_dia','$fecha_mes','$fecha_annio','$fecha_sistema','$priv','$usr_vinculado')";
$resultado2= $conn->query($sql_2);

if($resultado2){

    echo "<script type=\"text/javascript\">
    Swal.fire({
      icon: 'success',
      title: 'Acción correcta',
      text: 'Cliente agregado',
      footer: 'PROCYON</a>'
    }).then(function(){window.location='../perfiles/super_usr/dashboard.php';});</script>";
    // header ('Location:../perfiles/super_usr/dashboard.php');
}

else{

    echo 'No se registró la actividad';
}

?>

</html>