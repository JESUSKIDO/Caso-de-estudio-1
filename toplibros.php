<?php
    include_once 'conexion.php';
    $objeto = new Conexion();
    $conexion=$objeto->Conectar();
     $consulta="SELECT * FROM libros";
     $resultado=$conexion->prepare($consulta);
     $resultado->execute();
     $clientes=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="CSS/styles.css">
<div class="header">
    <div style="text-align: center;">
        <h1 class="title">TOP LIBROS MAS VENDIDOS</h1>
    </div>
    <div style="text-align: center;background-color: gray;">
            <h1 style="text-aling:center;">Ranking de los Libros</h1>
     </div>
     <divs tyle="text-align: center;">
     <table> 
                <thead>
                        <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Genero</th>
                                <th>Comprados</th>
                                <th>Disponibles </th>
                                <th>Costo</th>
                                <th>Imagen</th>
                        </tr>
                </thead>
                <tbody>
                       <?php
                                foreach($clientes as $clientes){
                       ?> 
                       <tr>
                               <td><?php echo $clientes['Id'] ?></td>
                               <td><?php echo $clientes['Nombre'] ?></td>
                               <td><?php echo $clientes['Genero'] ?></td>
                               <td><?php echo $clientes['Comprados'] ?></td>
                               <td><?php echo $clientes['Disponibles'] ?></td>
                               <td><?php echo $clientes['Costo'] ?></td>
                               <td><?php echo $clientes['Imagen'] ?></td>
                       </tr>
                       <?php
                                } 
                       ?>
                </tbody>
        </table>

     </div>               
</body>
</html>