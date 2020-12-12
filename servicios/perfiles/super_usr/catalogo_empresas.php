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
    <title>Catálogo Empresas | PROCYON</title>

    <link rel="icon" type="../../image/png" href="img/icon.ico"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
 
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
            <a class="nav-link" href="agregar_trabajador.php">
              <!-- <span data-feather="file-text"></span> -->
              <i class="fas fa-user-plus"></i> Agregar Trabajador
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="agregar_cliente.php">
              <!-- <span data-feather="file-text"></span> -->
              <i class="fas fa-building"></i> Agregar Empresa
            </a>
          </li>
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
        <h1 class="display-4">Catálogo empresas</h1>
        
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
    
    <form name="formulario1" method="post" action="catalogo_empresas.php" id="formulario1" class="form-search">
	
      <div class="jumbotron jumbotron-fluid " style="background-color:#f8f9fa; width:100%; margin-top:50px;">
      
        <div class="container-fluid">
                    
                    <div class="input-group mb-3 w-50">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Status</label>
                      </div>
                      <select class="custom-select" id="busca" name="busca" require>
                          <option selected>Seleccionar...</option>
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                            <!-- <?php
                            // $tabla="SELECT * FROM clientes ORDER BY id ASC";
                            // $resultadotabla = $conn->query($tabla);
                            // $numero=0;
                            // while($row = $resultadotabla->fetch_assoc()){
                            //     $numero++;

                            //         echo '<option value="'.$row['id'].'">'.$row['cliente'].'</option>';
                            // }
                            ?> -->
                      </select>
                      <button type="submit" class="btn btn-warning" style="margin-left:3px;"><i class="fas fa-search"></i> Buscar</button>
                    </div>
                    
                    
                    <!-- <div class="input-group mb-3 w-50">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="busca">Consulta por año</label>
                      </div>
                      <select class="custom-select" id="busca" name="busca">
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
                      <button type="submit" class="btn btn-warning" style="margin-left:3px;"><i class="fas fa-search"></i> Buscar</button>
                    </div> -->

                    
    </form>

<?php
        if (isset($_POST['busca'])){ //es para saber cuando se presionó busca

        $busca="";
        $busca=$_POST['busca'];
        
        // $busca2="";
        // $busca2=$_POST['busca2'];

            // if($busca!="" && $busca2!=""){
            if($busca!=""){
                // $tabla="SELECT * FROM bitacora WHERE fecha_reg_annio = '$busca' AND cliente ='$busca2' ORDER BY id ASC";
                $tabla="SELECT * FROM clientes WHERE status_sistema = '$busca' ORDER BY id ASC";
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

          <div class="btn-group mr-2" style="margin-bottom:7px;">

          
                
            <!-- REPORTE PDF -->
            <!-- <a href="../../prcd/proceso_pdf_reporte_empresa.php?id=<?php echo $busca;?>&id2=<?php echo $busca2;?>" type="button" class="btn btn-sm btn-outline-secondary">Reporte PDF</a> -->
            <!-- <a href="../../prcd/proceso_pdf_reporte_empresa.php?id=<?php echo $busca;?>" type="button" class="btn btn-sm btn-outline-secondary">Reporte PDF</a>
            <a href="" type="button" class="btn btn-sm btn-outline-secondary">Reporte EXCEL</a> -->
            <!-- FIN REPORTE PDF -->

           
          </div>

        <table class="table table-striped table-hover">
        <thead class="text-center">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Empresa</th>
                <th scope="col">Domicilio</th>
                <th scope="col">Fecha registro</th>
                <th scope="col">Status</th>
                <th scope="col">Usuario vinculado</th>
                <th scope="col">Modificar</th>
                <th scope="col">Eliminar</th>
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
                $usr_vinculado = $row['usr_vinculado'];
                
                // echo '<tr>';
                    echo '<td><center>'.$numero.'</center></td>';
                    echo '<td><center>'.$row['cliente'].'</center></td>';
                    echo '<td><center>'.$row['domicilio'].'</center></td>';
                    echo '<td><center>'.$row['fecha_reg_dia'].'/'.$row['fecha_reg_mes'].'/'.$row['fecha_reg_annio'].'</center></td>';
                    
                    if($row['status_sistema']==1){
                        echo '<td><center><span class="badge badge-success">Activo</span></center></td>';
                    }
                    else{
                        echo '<td><center><span class="badge badge-danger">Inactivo</span></center></td>';
                    }
                    
                    $consulta_vinculado="SELECT id,nombre_completo FROM usuarios WHERE id = '$usr_vinculado'";
                    $resultado_vinculado = $conn->query($consulta_vinculado);
                    $cliente_resultado = $resultado_vinculado->fetch_assoc();
                    echo '<td><center>'.$cliente_resultado['nombre_completo'].'</center></td>';

                    echo '<td><center><a href="modificar_cliente.php?id='.$row['id'].'" class="badge badge-primary">Modificar Status</a></center></td>';
                    //echo '<td><center><a href="modificar_eliminar_cliente.php?id='.$row['id'].'" class="badge badge-danger">Eliminar usuario</a></center></td>';
                    echo '<td><center><button type="button" class="badge badge-danger" data-toggle="modal" data-target="#exampleModalEliminar'.$numero.'">Eliminar</button></center></td>';

                    
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
                    echo '¿Eliminar empresa?';
                    echo '</div>';
                    echo '<div class="modal-footer">';
                    echo     '<a href="../../prcd/proceso_eliminar_cliente.php?id='.$row['id'].'" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar usuario</a>';
                    
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