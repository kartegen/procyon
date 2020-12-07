<html>
<header>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script src="sweetalert2.all.min.js"></script>
        <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</header>

<?php
include('conn.php');
session_start();

$usuario=$_POST['usr'];
$pwd=$_POST['pwd'];



//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//
//require '../lib/phpmailer/src/Exception.php';
//require '../lib/phpmailer/src/PHPMailer.php';
//require '../lib/phpmailer/src/SMTP.php';


$query="SELECT * FROM usuarios WHERE usr='$usuario' AND pwd='$pwd'";

$proceso=$conn->query($query);

if ($resultado=mysqli_fetch_array($proceso)){


    $_SESSION['usr']=$usuario;
    $_SESSION['id']=$resultado['id'];
    $_SESSION['perfil']=$resultado['priv'];
    $_SESSION['nombre']=$resultado['nombre_completo'];
     
    

      if($resultado['priv']==1){
        
        echo "<script type=\"text/javascript\">location.href='../dashboard.php';</script>";
        }
    
    elseif($resultado['priv']==2){

        echo "<script type=\"text/javascript\">location.href='../dashboard.php';</script>";
        
    
    //echo "Sesión no exitosa";
    //echo "<script type=\"text/javascript\">location.href='08_inicio.php';</script>";
    }

    elseif($resultado['priv']==3){

        echo "<script type=\"text/javascript\">location.href='../dashboard.php';</script>";
    }
    

}
    


    else{
    // echo "<script type=\"text/javascript\">location.href='http://juventud.zacatecas.gob.mx/premio_estatal_injuventud/';</script>";
    echo "<script type=\"text/javascript\">alert('Usuario no válido');location.href='../';</script>";

    
    }

         

?>

</html>