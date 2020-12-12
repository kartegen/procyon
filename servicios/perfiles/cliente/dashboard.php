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

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Dashboard | PROCYON</title>

    <link rel="icon" type="image/png" href="../../img/icon.ico"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
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
            <a class="nav-link active" href="dashboard.html">
              <!-- <span data-feather="home"></span> -->
              <i class="fas fa-laptop-house"></i> 
              Dashboard (Perfil Empresa)<span class="sr-only">(current)</span>
            </a>
          </li>
          <hr style="color: dimgrey;">
          
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>bitácora</span>
            <a class="d-flex align-items-center text-muted" href="dashboard.php" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>

          <li class="nav-item">
            <a class="nav-link" href="revision_bitacora.php">
              <!-- <span data-feather="layers"></span> -->
               
              <i class="fas fa-file-alt"></i> Revisión
            </a>
          </li>
         <!-- <li class="nav-item">
            <a class="nav-link" href="agregar_bitacora.php">
             
              <i class="fas fa-file-upload"></i> Cargar documento
            </a>
          </li> -->
           <!-- <li class="nav-item">
            <a class="nav-link" href="trimestre3.php">
              <span data-feather="layers"></span>
              Tercer trimestre
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="trimestre4.php">
              <span data-feather="layers"></span>
              Cuarto trimestre
            </a>
          </li> -->
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
         
          
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="background-color:#eaeef4; height:100%;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 ">
        <h1 class="display-4">Dashboard (Perfil Empresa)</h1>
        
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Reporte PDF</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Reporte EXCEL</button> -->
          </div>
         
        </div>
      </div>

      <h4 class="text-primary" style="margin-top:-27px"> <?php
                  date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
                  $fecha_actual=strftime("%Y-%m-%d");
                  $hora_actual=strftime("%H:%M:%S");

                  echo 'Zacatecas, Zac., '.$hora_actual.', '. $fecha_actual;
              ?></h4>

      <!-- <hr style="color: dimgrey;"> -->
      <h2></h2>
    <div class="container-fluid ">


      <div class="jumbotron jumbotron-fluid " style="background-color:#f8f9fa; width:100%; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2); margin-top:100px; padding:45px;">
        <div class="container-fluid">
          <h1 class="display-4">Bienvenido al sistema de bitácoras</h1>
          <p class="lead">PROCYON</p>
          <hr class="my-4">
          <p>Cargar documentos</p>
          <a class="btn btn-primary btn-lg" href="revision_bitacora.php" role="button"> <i class="fas fa-file-pdf"></i> Revisar a bitácora -></a>
        </div>
      </div>

      <!-- card -->
      
      <!-- card -->

      <div class="container-fluid">
        <div class="row row-cols-2 row-cols-md-4">
          <div class="col mb-3">
            <div class="card text-dark bg-light mb-6" style="max-width: 30rem; height: 12rem; box-shadow: 4px -1px 0px -1px #005eff;">
              <!-- <div class="card-header">Enero-Marzo 2020</div> -->
              <div class="card-body">
                <h5 class="card-title text-primary">Documentos cargados en el sistema</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text">Número de documentos ###.</p>
                <!-- <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a> -->
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="card text-dark bg-light mb-6" style="max-width: 30rem;height: 12rem;box-shadow: 4px -1px 0px -1px #a80c91;">
              <!-- <div class="card-header">Abril-Junio 2020</div> -->
              <div class="card-body">
                <h5 class="card-title" style="color:#a80c91;">Empresas</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text">Número de empresas</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="card text-dark bg-light mb-6" style="max-width: 30rem;height: 12rem;box-shadow: 4px -1px 0px -1px #009e00;">
              <!-- <div class="card-header">Julio-Septiembre 2020</div> -->
              <div class="card-body">
                <h5 class="card-title" style="color:#009e00;">Número de trabajadores</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text">Trabajadores en el sistema</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          <div class="col mb-3">
            <div class="card text-dark bg-light mb-6" style="max-width: 30rem;height: 12rem;box-shadow: 4px -1px 0px -1px #02bdb4;">
              <!-- <div class="card-header">Octubre-Diciembre 2020</div> -->
              <div class="card-body">
                <h5 class="card-title" style="color:#02bdb4;">Card title</h5>
                <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>

          
        </div>
      </div> <!-- container -->
      
      <div class="container">
        <div class="row row-cols-1 row-cols-md-2">
          <div class="col mb-4">
            <div class="card text-white bg-primary mb-6" style="max-width: 36rem; height: 27rem;">
              <div class="card-header">Tabla 1</div>
              <div class="card-body"><br><br><br>
                <h1 class="card-title">TABLA</h1>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores aliquid, dolores distinctio similique excepturi omnis qui accusantium sit molestiae ad dignissimos voluptatem vitae! Ipsam molestiae culpa quia quas libero necessitatibus..</p>
                <!-- <p><a href="trimestre1.php" type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Editar...</a></p> -->
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card text-white bg-primary mb-6" style="max-width: 36rem;height: 27rem;">
              <div class="card-header">Tabla 2</div>
              <div class="card-body"><br><br><br>
                <h1 class="card-title">TABLA</h1>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, fugit animi, fugiat fuga, iure quod adipisci a incidunt at dolorum ad est porro aut? Corporis nisi pariatur officiis sint repellat..</p>
                <!-- <p><a href="trimestre2.php" type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Editar...</a></p> -->
              </div>
            </div>
          </div>
          <!-- <div class="col mb-4">
            <div class="card text-white bg-info mb-6" style="max-width: 36rem;height: 27rem;">
              <div class="card-header">Julio-Septiembre 2020</div>
              <div class="card-body"><br><br><br>
                <h1 class="card-title">Tercer trimestre</h1>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto iste blanditiis quo ipsa doloremque ab, quia delectus at obcaecati quos nesciunt animi minus ratione ea dolore magnam harum? Excepturi?.</p>
                <p><a href="trimestre3.php" type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Editar...</a></p>
              </div>
            </div>
          </div> -->
          <!-- <div class="col mb-4">
            <div class="card text-white bg-info mb-6" style="max-width: 36rem;height: 27rem;">
              <div class="card-header">Octubre-Diciembre 2020</div>
              <div class="card-body"><br><br><br>
                <h1 class="card-title">Cuarto trimestre</h1>
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur omnis eaque, harum, non, deserunt vel vero esse est suscipit mollitia accusamus voluptatum. Harum, quod sit praesentium aperiam non minus beatae!.</p>
                <p><a href="trimestre4.php" type="button" class="btn btn-warning"><i class="fas fa-edit"></i> Editar...</a></p>
              </div>
            </div>
          </div> -->

          
        </div>
      </div> <!-- container -->




      <!-- <div class="container">

        <div class="col mb-12">
          <div class="card text-white bg-warning mb-12 align-middle" style="max-width: 96rem;">
            <div class="card-header">Opción:</div>
            <div class="card-body">
              <h1 class="card-title">Modificar:</h1>
              <p class="card-text">
                <ul>
                  <li>Actividad</li>
                  <li>Responsables</li>
                  <li>Medio de verificación</li>
                </ul>
              </p>
              <a href="modificar.php" type="button" class="btn btn-primary btn-lg btn-block"><i class="fas fa-edit"></i> Modificar</a>
            </div>
          </div>
        </div>
      </div> -->

      </div>


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
