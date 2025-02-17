<?php
session_start();

// if (isset($_SESSION['usr'])) {
//     if($_SESSION['perfil']==1){
        // header('Location: javascript: history.go(-1)');
    // }
    // elseif($_SESSION['perfil']==2){
        // header('Location: javascript: history.go(-1)');
    // }
    // elseif($_SESSION['perfil']==3){
        // header('Location: javascript: history.go(-1)');
    // }
    // else{
        // header('Location:prcd/sort.php');
    // }
    // Si esta identificado, en otras palabras existe la variable, le saludamos
    // echo 'Hola ' . $_SESSION['usr'];
// } else {
    // En caso contrario redirigimos el visitante a otra página

    // echo 'Usuario no válido';
    // header('Location: ../../autentificacion/');
    // header('Location: prcd/sort.php');
    // die();
// }

include('../../prcd/conn.php');

// variables de sesión

    $usuario = $_SESSION['usr'];
    $id_session = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Bitácora | PROCYON</title>

    <link rel="icon" type="image/png" href="../../img/icon.ico"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> -->

    <script src="https://kit.fontawesome.com/4d63b5ef28.js" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../../css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <!-- <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow"> -->
    <nav class="navbar navbar-light sticky-top flex-md-nowrap p-0 bg-light text-dark">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-center text-white" href="#">
    <!-- <img src="img/TrabajemosJuntosJuventud.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">   -->
    <h5 class="text-left text-dark display-7" style="margin-left:3px;"><b>PROCYON</b></h5>
    </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <a href="" class="text-left">Inicio ></a> -->
  <!-- <input class="form-control form-control-dark w-10" type="text" placeholder="Search" aria-label="Search" style="width:30%"> -->
  
 
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      
        
       
        <a class="btn btn-outline-secondary" href="../../prcd/sort.php" role="button"><i class="fas fa-sign-out-alt"></i> Salir</a>    
        
      </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        
        <ul class="navbar-nav px-3 text-center">
            <li class="align-middle">
                   <img src="img/TrabajemosJuntosJuventud.png" width="35%" class="" alt="" loading="lazy">  
      
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-center text-center align-items-center px-3 mt-4 mb-1 text-muted">
          <span class="">
          bienvenido<br><i class="fas fa-user"></i> 
            <?php
            
              echo utf8_encode($nombre);
            
            ?>
          </span>
        </h6>
<hr>
        <ul class="nav flex-column">
 
           <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">
              <!-- <span data-feather="home"></span> -->
              <i class="fas fa-laptop-house"></i> 
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <hr style="color: dimgrey;">
          
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>bitácora</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>

          <li class="nav-item">
            <a class="nav-link" href="revision_bitacora.php">
              <!-- <span data-feather="layers"></span> -->
               
              <i class="fas fa-file-alt"></i> Revisión
            </a>
          </li>
         
           
        </ul>

        
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="background-color:#eaeef4; height:100%;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 ">
        <h1 class="display-4">Revisión bitácora</h1>
        
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Reporte PDF</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte EXCEL</button> -->
          </div>
         
        </div>
      </div>

      <h5 class="text-primary" style="margin-top:-27px"> <?php
                  date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
                  $fecha_actual=strftime("%Y-%m-%d");
                  $hora_actual=strftime("%H:%M:%S");

                  echo 'Zacatecas, Zac., '.$hora_actual.', '. $fecha_actual;
              ?></h5>

      <!-- <hr style="color: dimgrey;"> -->
      <h2></h2>
    <div class="container-fluid">
    
    <form name="formulario1" method="post" action="revision_bitacora.php" id="formulario1" class="form-search">
	
      <div class="jumbotron jumbotron-fluid " style="background-color:#f8f9fa; width:100%; margin-top:50px;">
      
        <div class="container-fluid">
                    
                  
                    
                    
                    <div class="input-group mb-3 w-50">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="busca2">Consulta por semana</label>
                      </div>
                      <select class="custom-select" id="busca2" name="busca2" require>
                          <option selected>Seleccionar...</option>
                            <?php
                            $tabla1_semana="SELECT * FROM semanas ORDER BY id ASC";
                            $resultadotabla1_semana = $conn->query($tabla1_semana);
                            $numero1_semana=0;
                            while($row1_semana = $resultadotabla1_semana->fetch_assoc()){
                                $numero1_semana++;

                                    echo '<option value="'.$row1_semana['id'].'">'.$row1_semana['semana'].' '.$row1_semana['inicia'].' '.$row1_semana['fin'].'</option>';
                            }
                            ?> <!-- fin loop tabla -->
                      </select>
                      <button type="submit" class="btn btn-warning" style="margin-left:3px;"><i class="fas fa-search"></i> Buscar</button>
                    </div>

                    
    </form>

<?php
        if (isset($_POST['busca2'])){ //es para saber cuando se presionó busca

        // $busca="";
        // $busca=$_POST['busca'];
        $busca=$id_session;
        
        $busca2="";
        $busca2=$_POST['busca2'];

            if($busca!="" && $busca2!=""){
                //$busqueda=mysqli_query("select * from ponencia where email like '%".$busca."' ");
                $tabla="SELECT * FROM bitacora WHERE semana = '$busca2' AND cliente ='$busca' ORDER BY id ASC";
                $resultadotabla = $conn->query($tabla);
                // $sql=("SELECT * FROM ponencia WHERE codigo = '$busca' OR email = '$busca' ");
                // $busqueda= $conn->query($sql);
                
        //        $busqueda=mysqli_query($conn,"select * from ponencia where codigo like '%".$busca."' ");
                
            }
            else{
                echo"No haz agregado información";
            }
        //otro isset}
?>
          <!-- REPORTES EN PDF -->
          <!-- <div class="btn-group mr-2" style="margin-bottom:7px;">
            <a href="../../prcd/proceso_pdf_reporte_empresa.php?id=<?php echo $busca;?>&id2=<?php echo $busca2;?>" type="button" class="btn btn-sm btn-outline-secondary">Reporte PDF</a>
            <a href="" type="button" class="btn btn-sm btn-outline-secondary">Reporte EXCEL</a>
          </div> -->
           <!-- FIN REPORTES EN PDF -->

        <table class="table table-striped table-hover">
        <thead class="text-center">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Empresa</th>
            <th scope="col">Trabajador</th>
            <!-- <th scope="col">Capturó</th> -->
            <th scope="col">Semana</th>
            <th scope="col">Archivo</th>
            <th scope="col">Evidencia</th>
            <!-- <th scope="col">Modificar</th>
            <th scope="col">Eliminar</th> -->
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
        <?php

            // $tabla="SELECT * FROM bitacora ORDER BY id ASC";
            // $tabla="SELECT * FROM usr INNER JOIN archivos ON usr.codigo = archivos.codigo_usr WHERE usr.priv = 1 AND usr.tematica=1 ORDER BY usr.id ASC";
            // $resultadotabla = $conn->query($tabla);
            $numero=0;
            while($row = $resultadotabla->fetch_assoc()){
                $numero++;
                $cliente = $row['cliente'];
                $asignado = $row['asignado'];
                $capturo = $row['capturo'];
                
                // echo '<tr>';
                    echo '<td><center>'.$numero.'</center></td>';
                    //echo '<td><center>'.$row['cliente'].'</center></td>';
                    $consulta1="SELECT id,nombre_completo FROM usuarios WHERE id = '$cliente' AND priv = 3";
                    $resultado_consulta1 = $conn->query($consulta1);
                    $cliente_resultado = $resultado_consulta1->fetch_assoc();
                    echo '<td><center>'.$cliente_resultado['nombre_completo'].'</center></td>';

                    $consulta2="SELECT id,nombre_completo FROM usuarios WHERE id = '$asignado' AND priv = 4";
                    $resultado_consulta2 = $conn->query($consulta2);
                    $trabajador_resultado = $resultado_consulta2->fetch_assoc();
                    echo '<td><center>'.$trabajador_resultado['nombre_completo'].'</center></td>';

                    // $consulta3="SELECT id,nombre_completo FROM usuarios WHERE id = '$capturo'";
                    // $resultado_consulta3 = $conn->query($consulta3);
                    // $usuario_resultado = $resultado_consulta3->fetch_assoc();
                    // echo '<td><center>'.$usuario_resultado['nombre_completo'].'</center></td>';

                    // echo '<td><center>'.$row['semana'].'</center></td>';
                    $consulta3="SELECT id,semana FROM semanas WHERE id = '$busca2'";
                    $resultado_consulta3 = $conn->query($consulta3);
                    $trabajador_resultado3 = $resultado_consulta3->fetch_assoc();
                    echo '<td><center>'.$trabajador_resultado3['semana'].'</center></td>';
                    
                    echo '<td><center><a href="../../'.$row['url_file'].'" class="badge badge-info" target="_blank">Documento</a></center></td>';
                    // echo '<td><center>'.$row['descripcion'].'</center></td>';
                    echo '<td><center><a href="testigos_bitacora.php?id='.$row['id'].'" class="badge badge-warning">Evidencia</a></center></td>';
                    // echo '<td><center><a href="modificar_bitacora.php?id='.$row['id'].'" class="badge badge-primary">Modificar</a></center></td>';
                    // echo '<td><center><button type="button" class="badge badge-danger" data-toggle="modal" data-target="#exampleModalEliminar'.$numero.'">Eliminar</button></center></td>';

                    //modal eliminar
                
                    echo '<div class="modal fade bg-danger" id="exampleModalEliminar'.$numero.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
                    echo '<div class="modal-dialog">';
                    echo '<div class="modal-content">';
                    echo '<div class="modal-header">';
                    echo   ' <h5 class="modal-title" id="exampleModalLabel">¡AVISO!</h5>';
                    echo     ' <button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                    echo     '<span aria-hidden="true">&times;</span>';
                    echo     '</button>';
                    echo '</div>';
                    echo '<div class="modal-body">';
                    echo '¿Eliminar bitácora?';
                    echo '</div>';
                    echo '<div class="modal-footer">';
                    echo     '<a href="../../prcd/proceso_eliminar_bitacora.php?id='.$row['id'].'" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar usuario</a>';
                    
                    echo     '<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fas fa-window-close"></i> Cerrar</button>';
                    // echo    ' <button type="button" class="btn btn-primary">Save changes</button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    //fin modal
                    
                echo '</tr>';
            
            }
        }//isset
        ?>

            
        </tbody>
        </table>

        </div>
      </div>

      <!-- card -->
      
      <!-- card -->

     


    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="css/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="css/dashboard.js"></script></body>
</html>

<!-- 

https://startbootstrap.com/theme/sb-admin-pro-angular

 -->