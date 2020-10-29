<?php
    include_once 'conexion.php';
    $objeto = new Conexion();
    $conexion=$objeto->Conectar();
     $consulta="SELECT * FROM clientes";
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
        <h1 class="title">ADMINIDTRASION DE CLIENTES</h1>
    </div>
    <div style="text-align: center;background-color: gray;">
            <h1 style="text-aling:center;">Datos de los Clientes</h1>
     </div>
     <div style="text-aling: center;">
        <h3 style="text-aling: center;padding-left:900px">Busqueda</h3>
        <input type="text" class="inputBusq" name="buesqueda" placeholder="Busca a un Cliente">
        
     </div>
     <div style="text-align: center;">
        <table> 
                <thead>
                        <tr>
                                <th>User_id</th>
                                <th>Correo</th>
                                <th>Contraseña</th>
                                <th>Nombre</th>
                                <th>Compras </th>
                                <th>Tipo</th>
                        </tr>
                </thead>
                <tbody>
                       <?php
                                foreach($clientes as $clientes){
                       ?> 
                       <tr>
                               <td><?php echo $clientes['Id'] ?></td>
                               <td><?php echo $clientes['Correo'] ?></td>
                               <td><?php echo $clientes['Password'] ?></td>
                               <td><?php echo $clientes['Nombre'] ?></td>
                               <td><?php echo $clientes['NumCompras'] ?></td>
                               <td><?php echo $clientes['Tipo'] ?></td>
                               
                       </tr>
                       <?php
                                } 
                       ?>
                </tbody>
        </table>

     </div>               
    
</body>
</html>