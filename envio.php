<?php
require "db.php";

$stmt = mysqli_prepare($con, "INSERT INTO datos VALUES (?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "ssss", $_POST["nombres"], $_POST["direction"], $_POST["correo"], $_POST["comentarios"]);
$ok = mysqli_stmt_execute($stmt);

if ($ok) {
    echo "<script>alert('Datos enviados correctamente')</script>";
} else {
    echo "<script>alert('Problemas al enviar')</script>";
}
echo "<script>window.location.href='index.html'</script>";