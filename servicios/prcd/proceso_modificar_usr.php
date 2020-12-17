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

$id= $_POST['id'];
$usr = $_POST['usr'];
$pwd = $_POST['pwd'];
$priv = $_POST['priv'];
$nombre_completo = $_POST['nombre'];
$fecha_dia = $_POST['dia'];
$fecha_mes = $_POST['mes'];
$fecha_annio = $_POST['annio'];
$status_sistema = $_POST['status_sistema'];

$sql_2="UPDATE usuarios
SET usr='$usr', pwd='$pwd',priv='$priv',nombre_completo='$nombre_completo',fecha_reg_dia='$fecha_dia',fecha_reg_mes='$fecha_mes',
fecha_reg_annio='$fecha_annio',status_sistema='$status_sistema'
WHERE id='$id'";

// $sql_2="INSERT INTO trabajadores(nombre,curp,nss,tipo_sangre,fecha_reg_dia,fecha_reg_mes,fecha_reg_annio,fecha_sistema,status_sistema) 
// VALUES('$nombre','$curp','$nss','$tipo_sangre','$fecha_dia','$fecha_mes','$fecha_annio','$fecha_sistema','$priv')";
$resultado2= $conn->query($sql_2);

if($resultado2){

    echo "<script type=\"text/javascript\">
    Swal.fire({
        icon: 'success',
        title: 'Acción correcta',
        text: 'Trabajador modificado',
        footer: 'PROCYON</a>'
    }).then(function(){window.location='../perfiles/super_usr/catalogo_usuarios.php';});</script>";

    // header ('Location:../perfiles/super_usr/catalogo_usuarios.php');
}

else{

    echo 'No se registró la actividad';
}

?>

</html>