<?php
    include_once 'conexion.php';
    $objeto = new Conexion();
    $conexion=$objeto->Conectar();
     $consulta="SELECT * FROM compras";
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
        <h1 class="title">HISTORIAL DE COMPRAS</h1>
    </div>
    <div style="text-align: center;background-color: gray;">
            <h1 style="text-aling:center;">Compras Realizadas</h1>
     </div>
     <div style="text-align: center;">
        <table> 
                <thead>
                        <tr>
                                <th>Id</th>
                                <th>IdCliente</th>
                                <th>Cantidad</th>
                                <th>Nombre</th>
                                <th>Total</th>
                                <th>Fecha</th>
                                <th>MetodoPago</th>
                                <th>Envio</th>
                        </tr>
                </thead>
                <tbody>
                       <?php
                                foreach($clientes as $clientes){
                       ?> 
                       <tr>
                               <td><?php echo $clientes['Id'] ?></td>
                               <td><?php echo $clientes['IdCliente'] ?></td>
                               <td><?php echo $clientes['Cantidad'] ?></td>
                               <td><?php echo $clientes['Nombre'] ?></td>
                               <td><?php echo $clientes['Total'] ?></td>
                               <td><?php echo $clientes['Fecha'] ?></td>
                               <td><?php echo $clientes['MetodoPago'] ?></td>
                               <td><?php echo $clientes['Envio'] ?></td>
                       </tr>
                       <?php
                                } 
                       ?>
                </tbody>
        </table>
    </div>
</body>
</html>