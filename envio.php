<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="academia";

    //$con : variable conexion
    // funcion (my sqli_connect conectara todo lo del parentesis ) sino ---
    $con=mysqli_connect($host, $user, $password, $db) or die("Problemas al conectar");
        mysqli_select_db($con,$db); //conecta la conexion con la base de datos 

    //Trabajando con las variables

    $nombres=$_POST["nombres"];
    $direction=$_POST["direction"];
    $correo=$_POST["correo"];
    $comentarios=$_POST["comentarios"];
    $sql="INSERT INTO datos VALUES ('$nombres','$direction','$correo','$comentarios')";
    $ejecutar=mysqli_query($con,$sql); //juntar la variable sql con la conexion 

    //Usamos las condiciones
    if(!$ejecutar){
        echo "<script>alert('Problemas al enviar')</script>";
        echo "<script>window.location.href=('index.html')</script>";
    }
    else{
        echo "<script>alert('Datos enviados correctamente')</script>";
        echo "<script>window.location.href=('index.html')</script>";
    }
?>