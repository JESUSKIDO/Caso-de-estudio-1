<?php
            $nombre=$_GET['nombre'];
            $genero=$_GET['genero'];
            $disponibles=$_GET['disponibles'];
            $costo=$_GET['costo'];
            $imagen=$_GET['avatar'];
            $user="root";
            $pass="";
            $server="localhost";
            $db="amazon";
            $con=mysqli_connect($server,$user,$pass,$db);
            $sql1 ="INSERT INTO `libros` (`Nombre`,`Genero`,`Disponibles`,`Costo`,`Imagen`) VALUES
            ('$nombre','$genero','$disponibles','$costo','$imagen')";
            if(mysqli_query($con,$sql1)){
                header("Location: http://localhost/Caso-de-estudio-1/libros2.php");
            }else{
                header("Location: http://localhost/Caso-de-estudio-1/libros.php");
            }
        ?>