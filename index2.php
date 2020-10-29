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
    <title>BookShop</title>
</head>
<body>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/styles2.css">
    <div class="header">
        <h1>Librería</h1>
        <a  href="libros.php">Compras</a>
        <a  href="carrito.php">Carrito</a>
    </div>
    <div class="introduccion">
        <h2>Para ti:</h2>
        <p>Encuentra los mejores Titulos de libros para </p>
        <p>las mejores ocaciones, imagina todo un mundo </p>
        <p>de aventuras a solo unos clicks de distancia</p>
        <p>compra los libros de tu agrado y se parte de </p>
        <p>toda nuestra comunidad.</p>
    </div>
    <div style="text-align: center;background-color:  rgb(92, 182, 167);">
            <h1 style="text-aling:center;">Libros en Venta</h1>
     </div>
    <div style="text-align: center;">
        <table> 
                <thead>
                        <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Costo</th>
                                <th>Agregar</th>
                        </tr>
                </thead>
                <tbody>
                       <?php
                                foreach($clientes as $clientes){
                       ?> 
                       <tr> 
                                <td>
                                    <?php echo "<img src='data:image/jpg;base64," . base64_encode($clientes['Imagen']) . "' />"; ?>
                            </td>
                               <td><?php echo $clientes['Nombre'] ?></td>
                               <td><?php echo $clientes['Costo'] ?></td>
                               <td>
                               <input width="100" type="button" value="AGREGAR"style="width: 100px;height:30px;" >
                               </td>
                       </tr>
                       <?php
                                } 
                       ?>
                </tbody>
        </table>
    </div>
</body>
</html>