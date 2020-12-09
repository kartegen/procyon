<?php
include('conn.php');
$busca= $_REQUEST['id']; //Empresa
$busca2= $_REQUEST['id2']; //Año

$tabla="SELECT * FROM bitacora WHERE fecha_reg_annio = '$busca' AND cliente ='$busca2' ORDER BY id ASC";
$resultadotabla = $conn->query($tabla);
$numero=0;
            while($row = $resultadotabla->fetch_assoc()){
                $numero++;
                
                // echo '<tr>';
                    echo '<td><center>'.$numero.'</center></td>';
                    echo '<td><center>'.$row['cliente'].'</center></td>';
                    echo '<td><center>'.$row['asignado'].'</center></td>';
                    echo '<td><center>'.$row['capturo'].'</center></td>';
                    
                    echo '<td><center>'.$row['fecha_reg_dia'].'/'.$row['fecha_reg_mes'].'/'.$row['fecha_reg_annio'].'</center></td>';
                    
                    echo '<td><center><a href="'.$row['url_file'].'" class="badge badge-info" target="_blank">Documento</a></center></td>';
                    echo '<td><center>'.$row['descripcion'].'</center></td>';
                    
                echo '</tr>';
            
            }
       

echo $busca.'<br>';
echo $busca2;



?>