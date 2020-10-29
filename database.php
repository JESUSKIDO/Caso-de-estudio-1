<?php
            $password=$_POST['password'];
            $codigo=$_POST['email'];
            $user="root";
            $pass="chicharito2000";
            $server="localhost";
            $db="amazon";
            $con=mysqli_connect($server,$user,$pass,$db);
            $sql1 = "SELECT * FROM `clientes` WHERE `Correo`='$codigo' AND `Password`='$password'";
            $resultado=mysqli_query($con,$sql1);
            if(mysqli_num_rows($resultado)>0){
                $sql2 = "SELECT * FROM `clientes` WHERE `Correo`='$codigo' AND `Password`='$password' AND `Tipo`='1'";
                $opc=mysqli_query($con,$sql2);
                if(mysqli_num_rows($opc)>0){
                    header("Location: http://localhost/Caso-de-estudio-1/administrador.php"); 
                }else{
                header("Location: http://localhost/Caso-de-estudio-1/index2.php");
                }
            }else{
                header("Location: http://localhost/Caso-de-estudio-1/ingresar.php");
            }
        ?>