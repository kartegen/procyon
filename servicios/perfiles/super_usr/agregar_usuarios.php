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
    <title>Agregar Usuario | PROCYON</title>

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
            <a class="nav-link active" href="dashboard.php">
              <!-- <span data-feather="home"></span> -->
              <i class="fas fa-laptop-house"></i> 
              Dashboard (Súper Usuario)<span class="sr-only">(current)</span>
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
        <h1 class="display-4">Agregar Usuario</h1>
        
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


      <div class="jumbotron jumbotron-fluid " style="background-color:#f8f9fa; width:100%; box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2); margin-top:100px; padding:45px;">
        <div class="container-fluid">

        <!-- isset -->
        <form name="privilegios_usr" method="post" action="agregar_usuarios.php" id="formulario1" class="form-search">
          <p> <h5>Tipo de privilegio</h5></p>
              <div class="input-group mb-3 w-50">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Privilegio</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="priv" require>
                  <!-- <option selected>Seleccionar...</option> -->
                  <?php
                  
                  if ($_POST['priv']!=""){
                    if($_POST['priv']==1){
                      echo '<option selected value="'.$_POST['priv'].'">Súper Usuario</option>';
                    }
                    elseif($_POST['priv']==2){
                      echo '<option selected value="'.$_POST['priv'].'">Usuario</option>';
                    }
                    elseif($_POST['priv']==3){
                      echo '<option selected value="'.$_POST['priv'].'">Empresa</option>';
                    }
                    elseif($_POST['priv']==4){
                      echo '<option selected value="'.$_POST['priv'].'">Trabajador</option>';
                    }
                      

                  }
                  else{
                    echo '<option selected>Seleccionar...</option>';

                  }

                  ?>
                  <option value="1">Súper Usuario</option>
                  <option value="2">Usuario</option>
                  <option value="3">Empresa</option>
                  <option value="4">Trabajador</option>
                </select>
                <button type="submit" class="btn btn-warning" style="margin-left:3px;"><i class="fas fa-hand-pointer"></i> Tipo de perfil</button>

              </div>

              <hr class="my-4">
             
            </form>

              <?php
        if (isset($_POST['priv'])){ //es para saber cuando se presionó busca

            $busca="";
            $busca=$_POST['priv'];
        
        
            if($busca!=""){
                
                if($busca==1){
                  echo '<p><h2>Registro de Súper Usuario</h2></p>';

                }         
                elseif($busca==2){
                    echo '<p><h2>Registro de Usuario</h2></p>';
                }
                elseif($busca==3){
                  echo '<p><h2>Registro de Empresa</h2></p>';
              }
              elseif($busca==4){
                echo '<p><h2>Registro de Trabajador</h2></p>';
              }

              }
            //otro isset}
    ?>
              <!-- fin isset -->

              <?php
              // echo '1';
             //}//isset
        ?>


          <form action="../../prcd/proceso_agregar_usr.php" method="POST" enctype="multipart/form-data" name="formulario_agregar">
          <!-- <h1 class="display-4">Bienvenido al sistema de bitácoras</h1> -->
          <!-- <p><h2>Registro</h2></p> -->
          <hr class="my-4">
              <input type="hidden" value="<?php echo $busca ?>" name="busca">
              <div class="input-group mb-3 w-50">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3">Nombre completo</span>
                </div>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="nombre" require>
              </div>

              <?php
              if($busca==3){
                echo '<div class="input-group mb-3 w-75">';
                echo '<div class="input-group-prepend">';
                echo '<span class="input-group-text" id="basic-addon3">Domicilio</span>';
                echo '</div>';
                echo '<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="domicilio">';
                echo '</div>';
              }
                elseif($busca==4){

                  echo '<div class="input-group mb-3 w-50">';
                  echo '<div class="input-group-prepend">';
                  echo '<span class="input-group-text" id="basic-addon3">NSS</span>';
                  echo '</div>';
                  echo '<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="nss">';
                  echo '</div>';
                  
                  echo '<div class="input-group mb-3 w-50">';
                  echo '<div class="input-group-prepend">';
                  echo '<span class="input-group-text" id="basic-addon3">CURP</span>';
                  echo '</div>';
                  echo '<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="curp">';
                  echo '</div>';
                
                  echo '<div class="input-group mb-3 w-50">';
                  echo '<div class="input-group-prepend">';
                  echo '<label class="input-group-text" for="inputGroupSelect01">Tipo de sangre</label>';
                  echo '</div>';
                  echo '<select class="custom-select" id="inputGroupSelect01" name="tipo_sangre" require>';
                  echo '<option selected>Seleccionar...</option>';
                  echo '<option value="1">O negativo</option>';
                  echo '<option value="2">O positivo</option>';
                  echo '<option value="3">A negativo</option>';
                  echo '<option value="4">A positivo</option>';
                  echo '<option value="5">B negativo</option>';
                  echo '<option value="6">B positivo</option>';
                  echo '<option value="7">AB negativo</option>';
                  echo '<option value="8">AB positivo</option>';
                  echo '</select>';
                  echo '</div>';
                  
                  echo ' <hr class="my-4">';

                  
                  echo ' <div class="form-group">';
                  echo '<label for="exampleFormControlFile1">Cargar fotografía</label>';
                  echo '<input type="file" class="form-control-file" id="exampleFormControlFile1" name="file1">';
                  echo '</div>';
                  echo ' <hr class="my-4">';
                }
                ?>

              <?php
                if($busca!=='4'){
                  echo '<div class="input-group mb-3 w-50">';
                  echo '<div class="input-group-prepend">';
                  echo '<span class="input-group-text" id="basic-addon3">Usuario</span>';
                  echo '</div>';
                  echo ' <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="usr" require>';
                  echo '</div>';


                  echo '<div class="input-group mb-3 w-50">';
                  echo '<div class="input-group-prepend">';
                  echo '<span class="input-group-text" id="basic-addon3">Password</span>';
                  echo '</div>';
                  echo '<input type="password" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="pwd" require>';
                  echo '</div>';
                }

                }//isset
              ?>
              

            
              <p> <h5>Fecha de registro</h5></p>

              <div class="input-group mb-3 w-25">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Día</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="fecha_dia" require>
                  <option selected>Selecionar...</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
              </div>

              <div class="input-group mb-3 w-25">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Mes</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="fecha_mes" require>
                <option selected>Seleccionar...</option>
                  <option value="1">Enero</option>
                  <option value="2">Febrero</option>
                  <option value="3">Marzo</option>
                  <option value="4">Abril</option>
                  <option value="5">Mayo</option>
                  <option value="6">Junio</option>
                  <option value="7">Julio</option>
                  <option value="8">Agosto</option>
                  <option value="9">Septiembre</option>
                  <option value="10">Octubre</option>
                  <option value="11">Noviembre</option>
                  <option value="12">Diciembre</option>
                </select>
              </div>

              <div class="input-group mb-3 w-25">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Año</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="fecha_annio" require>
                  <option selected>Seleccionar...</option>
                  <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                </select>
              </div>

           
             

          <hr class="my-4">
          <!-- <a class="btn btn-primary btn-lg" href="prcd/proceso_agregar_usuario.php" role="button"> <i class="far fa-save"></i> Registrar usuario</a> -->
          <button class="btn btn-primary btn-lg" role="submit"> <i class="far fa-save"></i> Registrar usuario</button>
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
