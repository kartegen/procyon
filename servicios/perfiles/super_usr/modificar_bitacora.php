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
    $id = $_SESSION['id'];
    $perfil = $_SESSION['perfil'];
    $nombre = $_SESSION['nombre'];

    $id_consulta=$_REQUEST['id'];
        $tabla="SELECT * FROM bitacora WHERE id = '$id_consulta'";
        $resultadotabla = $conn->query($tabla);
        $row_consulta = $resultadotabla->fetch_assoc();

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Agregar | PROCYON</title>

    <link rel="icon" type="image/png" href="../../img/icon.ico"/>
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

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
              Dashboard (Súper Usuario)<span class="sr-only">(current)</span>
            </a>
          </li>
          <hr>
          
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
         <li class="nav-item">
            <a class="nav-link" href="agregar_bitacora.php">
              <!-- <span data-feather="layers"></span> -->
              <i class="fas fa-file-upload"></i> Cargar documento
            </a>
          </li>
          
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Catálogo</span>
            <a class="d-flex align-items-center text-muted" href="dashboard.php" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>

          <li class="nav-item">
            <a class="nav-link" href="catalogo_trabajadores.php">
              <!-- <span data-feather="layers"></span> -->
               
              <i class="fas fa-file-alt"></i> Trabajadores
            </a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="catalogo_empresas.php">
              <!-- <span data-feather="layers"></span> -->
              <i class="fas fa-file-alt"></i> Empresas
            </a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="catalogo_usuarios.php">
              <!-- <span data-feather="layers"></span> -->
              <i class="fas fa-file-alt"></i> Usuarios
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Ajustes</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          
          <li class="nav-item">
            <a class="nav-link" href="agregar_usuarios.php">
              <!-- <span data-feather="file-text"></span> -->
              <i class="fas fa-user-plus"></i> Agregar Usuario
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="background-color:#eaeef4; height:100%;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 ">
        <h1 class="display-4"> Modificar datos de bitácora</h1>
        
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
    <div class="container-fluid ">


      <div class="jumbotron jumbotron-fluid " style="background-color:#f8f9fa; width:100%; margin-top:100px; padding:45px;">
        <div class="container-fluid">
          <!-- <h1 class="display-4">Bienvenido al sistema de bitácoras</h1> -->
          <!-- <form action="../../prcd/proceso_bitacora.php" method="POST" enctype="multipart/form-data"> -->
          <form action="../../prcd/proceso_modificar_bitacora.php" method="POST">
          <p><h2>Modificar</h2></p>
          <hr class="my-4">

                <input type="hidden" value="<?php echo $row_consulta['id']?>" name="id">
                <div class="input-group mb-3 w-50">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Empresa</label>
                      </div>
                      <select class="custom-select" id="inputGroupSelect01" name="empresa" require>
                          <option selected value="<?php echo $row_consulta['cliente']?>">
                          
                          <?php 
                              $nombre_empresa=$row_consulta['cliente'];
                              $consulta_empresa="SELECT * FROM usuarios WHERE priv = 3 AND status_sistema = 1 AND id = '$nombre_empresa'";
                              $resultadotabla_empresa = $conn->query($consulta_empresa);
                              $row_empresa = $resultadotabla_empresa->fetch_assoc();
                              echo $row_empresa['nombre_completo'];
                          ?></option>                
                            
                            <?php
                            
                            $tabla1="SELECT * FROM usuarios WHERE priv = 3 AND status_sistema = 1 ORDER BY id ASC";
                            $resultadotabla1 = $conn->query($tabla1);
                              while($row1 = $resultadotabla1->fetch_assoc()){
                                    echo '<option value="'.$row1['id'].'">'.$row1['nombre_completo'].'</option>';
                            }
                            ?> <!-- fin loop tabla -->
                      </select>
                    </div>

              <div class="input-group mb-3 w-50">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Trabajador</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="trabajador" require>
                <option selected value="<?php echo $row_consulta['asignado']?>">
                
                          <?php 
                              $nombre_trabajadores=$row_consulta['asignado'];
                              $consulta_trabajadores="SELECT * FROM usuarios WHERE priv = 4 AND status_sistema = 1 AND id = '$nombre_trabajadores'";
                              $resultadotabla_trabajadores = $conn->query($consulta_trabajadores);
                              $row_trabajadores = $resultadotabla_trabajadores->fetch_assoc();
                              echo $row_trabajadores['nombre_completo'];
                              // echo $row_consulta['asignado'];
                          ?>
                
                
                
                </option>
                    <?php
                    $tabla="SELECT * FROM usuarios WHERE priv = 4 AND status_sistema = 1 ORDER BY id ASC";
                    $resultadotabla = $conn->query($tabla);
                
                    while($row = $resultadotabla->fetch_assoc()){
                      echo '<option value="'.$row['id'].'">'.$row['nombre_completo'].'</option>';
                    }
                     ?> <!-- fin loop tabla -->
                     
                </select>
              </div>

              <!-- capturó se tiene que tomar de la variable de sesión -->
            
              <p> <h5>Fecha de registro</h5></p>

              <div class="input-group mb-3 w-50">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Semana a modificar</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="semana" require>
                <option selected value="<?php echo $row_consulta['semana']?>">
                
                <?php 
                 
                  $nombre_semana=$row_consulta['semana'];
                  $consulta_semana="SELECT * FROM semanas WHERE id = '$nombre_semana'";
                  $resultadotabla_semana = $conn->query($consulta_semana);
                  $row_semana = $resultadotabla_semana->fetch_assoc();
                  echo $row_semana['semana'];
                  // echo $row_consulta['asignado'];
              ?>
                
                </option>                
                    <?php
                    $tabla_semana="SELECT * FROM semanas WHERE annio = 2021 ORDER BY id ASC";
                    $resultadotabla_semana = $conn->query($tabla_semana);
                    $numero_semana=0;
                    while($row_semana = $resultadotabla_semana->fetch_assoc()){
                        $numero_semana++;

                            echo '<option value="'.$row_semana['id'].'">'.$row_semana['semana'].' ('.$row_semana['inicia'].'-'.$row_semana['fin'].')</option>';
                    }
                     ?> <!-- fin loop tabla -->
                     
                </select>
              </div>

              <!-- <p> <h5>Documento</h5></p>
              <p><img src="img/img_profile.png" alt="..." class="img-thumbnail" width="350px" heigth="70px"></p> -->

              <!-- <div class="mb-3 w-50">
                <label for="formFile" class="form-label">Cargar archivo</label>
                <input class="form-control" type="file" id="file1" name="file1">
              </div> -->

              


              <!-- <button type="button" class="btn btn-primary btn-sm"><i class="far fa-id-badge"></i> Cargar imagen</button> -->

          <hr class="my-4">
          <button class="btn btn-primary btn-lg" role="submit"> <i class="far fa-save"></i> Registrar bitácora</button>
          <a class="btn btn-danger btn-lg" href="javascript:history.back()" role="button"> <i class="fas fa-times"></i> Cancelar</a>
          </form>        
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
