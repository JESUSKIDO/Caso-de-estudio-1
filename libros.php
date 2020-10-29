<?php
    include_once 'conexion.php';
    $objeto = new Conexion();
    $conexion=$objeto->Conectar();
    echo "se concecto exitosamente a la base de datos"
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
                <h1 class="title">AGREGAR LIBROS</h1>
            </div>
            <div style="padding-top: 20px" > 
                <input type="text" name="nombre" placeholder="Ingresa el nombre del Libro">
            </div>
            <div > 
                <input type="text" name="genero" placeholder="Ingresa el genero del Libro">
            </div>
            <div > 
                <input type="text" name="disponibles" placeholder="Ingresa la cantidad de disponibles">
            </div>
            <div > 
                <input type="text" name="libro" placeholder="Ingresa el costo del libro">
            </div>
            <div style="text-align: center;"> 
                 <input type="file" id="avatar" name="avatar"accept="image/png, image/jpeg">
            </div>
            <div style="text-align: center;">
                <input type="button" value="AGREGAR" >
             </div>
        </div>
</body>
</html>