<?php
// session_start();
include ('conn.php');

$busca = $_POST['busca'];

date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
                //   $fecha_actual=strftime("%Y-%m-%d");
                //   $hora_actual=strftime("%H:%M:%S");


if(isset($_POST['busca'])){ //es para saber cuando se presionó busca *********************************************************************************************************************
    
    if($_POST['busca']==1){ // PRIVILEGIO 1 (SÚPER USUARIO) ----------------------------------------------------------------------------

        $nombre = $_POST['nombre'];
        $usr = $_POST['usr'];
        $pwd = $_POST['pwd'];
        $fecha_dia = $_POST['fecha_dia'];
        $fecha_mes = $_POST['fecha_mes'];
        $fecha_annio = $_POST['fecha_annio'];
        $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
        $priv = $_POST['busca'];
        $status_sistema = 1;

        $sql_2="INSERT INTO usuarios(usr,pwd,priv,nombre_completo,fecha_reg_dia,fecha_reg_mes,fecha_reg_annio,fecha_sistema,status_sistema) 
        VALUES('$usr','$pwd','$priv','$nombre','$fecha_dia','$fecha_mes','$fecha_annio','$fecha_sistema',$status_sistema)";
        $resultado2= $conn->query($sql_2);

        if($resultado2){

            header ('Location:../perfiles/super_usr/dashboard.php');
        }

        else{

            echo 'No se registró la actividad';
        }
        
    } // FIN PRIVILEGIO 1 --------------------------------------------------------------------------------------------------------------

    elseif($_POST['busca']==2){ // PRIVILEGIO 2 (USUARIO) ------------------------------------------------------------------------------
        
        $nombre = $_POST['nombre'];
        $usr = $_POST['usr'];
        $pwd = $_POST['pwd'];
        $fecha_dia = $_POST['fecha_dia'];
        $fecha_mes = $_POST['fecha_mes'];
        $fecha_annio = $_POST['fecha_annio'];
        $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
        $priv = $_POST['busca'];
        $status_sistema = 1;

        $sql_2="INSERT INTO usuarios(usr,pwd,priv,nombre_completo,fecha_reg_dia,fecha_reg_mes,fecha_reg_annio,fecha_sistema,status_sistema) 
        VALUES('$usr','$pwd','$priv','$nombre','$fecha_dia','$fecha_mes','$fecha_annio','$fecha_sistema',$status_sistema)";
        $resultado2= $conn->query($sql_2);

        if($resultado2){
            
            header ('Location:../perfiles/super_usr/dashboard.php');
            }
            
            else{
            
            echo 'No se registró la actividad';
            error(query($resultado2));
            }

    }// FIN PRIVILEGIO 2 ---------------------------------------------------------------------------------------------------------------


    elseif($_POST['busca']==3){ // PRIVILEGIO 3 (EMPRESA) ------------------------------------------------------------------------------
        
        $nombre = $_POST['nombre'];
        $domicilio = $_POST['domicilio']; // CAMPO AGREGADO
        $usr = $_POST['usr'];
        $pwd = $_POST['pwd'];
        $fecha_dia = $_POST['fecha_dia'];
        $fecha_mes = $_POST['fecha_mes'];
        $fecha_annio = $_POST['fecha_annio'];
        $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
        $priv = $_POST['busca'];
        $status_sistema = 1;

        $sql_2="INSERT INTO usuarios(usr,pwd,priv,nombre_completo,fecha_reg_dia,fecha_reg_mes,fecha_reg_annio,fecha_sistema,status_sistema,domicilio) 
        VALUES('$usr','$pwd','$priv','$nombre','$fecha_dia','$fecha_mes','$fecha_annio','$fecha_sistema','$status_sistema','$domicilio')";
        $resultado2= $conn->query($sql_2);
        
        if($resultado2){
            
            header ('Location:../perfiles/super_usr/dashboard.php');
            }
            
            else{
            
            echo 'No se registró la actividad';
            // error(query($resultado2));
            }
        
    } // FIN PRIVILEGIO 3 ------------------------------------------------------------------------------------------------------------


    elseif($_POST['busca']==4){ // PRIVILEGIO 4 --------------------------------------------------------------------------------------

        $nombre = $_POST['nombre'];
        $tipo_sangre = $_POST['tipo_sangre']; // CAMPO AGREGADO
        $nss = $_POST['nss'];
        $curp = $_POST['curp'];
        $fecha_dia = $_POST['fecha_dia'];
        $fecha_mes = $_POST['fecha_mes'];
        $fecha_annio = $_POST['fecha_annio'];
        $fecha_sistema = strftime("%Y-%m-%d,%H:%M:%S");
        $priv = $_POST['busca'];
        $status_sistema = 1;
       
        
        // se agregan funciones para todos los usr
        function generarCodigo($longitud) {
            $key = '';
            $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
            $max = strlen($pattern)-1;
            for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
            return $key;
        }   
        $codigo = generarCodigo(9); // genera un código de 9 caracteres de longitud.

        $link= 'fotografia';
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
            
            
            // $sql_2="INSERT INTO usuarios(cliente,asignado,capturo,fecha_reg_dia,fecha_reg_mes,fecha_reg_annio,fecha_sistema,url_file,descripcion) 
            // VALUES('$empresa','$trabajador','$capturo','$fecha_dia','$fecha_mes','$fecha_annio','$fecha_sistema','$ruta_pptx','$observaciones')";
            // $resultado2= $conn->query($sql_2);
            $sql_2="INSERT INTO usuarios(priv,nombre_completo,fecha_reg_dia,fecha_reg_mes,fecha_reg_annio,fecha_sistema,url_foto,status_sistema,tipo_sangre,nss,curp) 
            VALUES('$priv','$nombre','$fecha_dia','$fecha_mes','$fecha_annio','$fecha_sistema','$ruta_pptx','$status_sistema','$tipo_sangre','$nss','$curp')";
            $resultado2= $conn->query($sql_2);
            
            if($resultado2){
            
            header ('Location:../perfiles/super_usr/dashboard.php');
            }
            
            else{
            
            echo 'No se registró la actividad';
            // error(query($resultado2));
            }

    } // FIN PRIVILEGIO 4  --------------------------------------------------------------------------------------------------------


}// FIN se agregan funciones para todos los usr *****************************************************************************************************************************************


?>