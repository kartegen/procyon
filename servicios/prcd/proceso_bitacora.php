<?php

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

?>

<?php 
// session_start();
include('conn.php');

date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');

//codigo aleatorio
     
function generarCodigo($longitud) {
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    return $key;
}   
$codigo = generarCodigo(9); // genera un código de 9 caracteres de longitud.


$empresa = $_POST['empresa'];
$trabajador = $_POST['trabajador'];
$fecha_dia = $_POST['dia'];
$fecha_mes = $_POST['mes'];
$fecha_annio = $_POST['annio'];
$fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
$observaciones = $_POST['observaciones'];
$capturo=1;

                
                $link= 'bitacora';
                $fileName = $_FILES["file1"]["name"]; // The file name
                $fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
                $fileType = $_FILES["file1"]["type"]; // The type of file it is
                $fileSize = $_FILES["file1"]["size"]; // File size in bytes
                $fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
                if (!$fileTmpLoc) { // if file not chosen
                    echo "ERROR: Please browse for a file before clicking the upload button.";
                    exit();
                }
              
              //move_uploaded_file($_FILES['archivo']['tmp_name'],"archivos/" . $codigo . '_' . $_FILES['archivo']['name']);
              
              //move_uploaded_file($_FILES["file1"]["tmp_name"],"archivos/". $codigo .'_'.$_FILES['file1']['name'])
              //    //echo "$fileName upload is complete";
              
              if(move_uploaded_file($_FILES["file1"]["tmp_name"],"../files/". $link .'_'. $codigo .'_'.$_FILES['file1']['name'])){
                //   echo "$fileName carga completa";
                  
                  // $ruta_pptx = "../files/". $link .'_'. $codigo .'_'.$_FILES['file1']['name'];
                  $ruta_pptx = "./files/". $link .'_'. $codigo .'_'.$_FILES['file1']['name'];
                 
                //   $sqlinsert= "UPDATE archivos SET link1='$ruta_pptx' WHERE id_usr='$curp'";
                //   $resultado2= $conn->query($sqlinsert);
                  
                
               



              } else {
                  echo "move_uploaded_file function failed";
              }

 // inicia consulta
 $sql_2="INSERT INTO bitacora(cliente,asignado,capturo,fecha_reg_dia,fecha_reg_mes,fecha_reg_annio,fecha_sistema,url_file,descripcion) 
VALUES('$empresa','$trabajador','$capturo','$fecha_dia','$fecha_mes','$fecha_annio','$fecha_sistema','$ruta_pptx','$observaciones')";
 $resultado2= $conn->query($sql_2);

 if($resultado2){

 header ('Location:../revision_bitacora.php');
 }

 else{

 echo 'No se registró la actividad';
 error(query($resultado2));
 }
 // fin consulta

// $sql_2="INSERT INTO usuarios(usr,pwd,priv,nombre_completo,fecha_reg_dia,fecha_reg_mes,fecha_reg_annio,fecha_sistema) 
// VALUES('$usr','$pwd','$priv','$nombre','$fecha_dia','$fecha_mes','$fecha_annio','$fecha_sistema')";
// $resultado2= $conn->query($sql_2);

// if($resultado2){

//     header ('Location:../dashboard.php');
// }

// else{

//     echo 'No se registró la actividad';
// }



?>