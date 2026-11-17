<?php
require "db.php";

$usuario = $_POST["usuario"];
$clave   = $_POST["password"];

$stmt = mysqli_prepare($con, "SELECT 1 FROM academia WHERE usuario = ? AND password = ?");
mysqli_stmt_bind_param($stmt, "ss", $usuario, $clave);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

if (mysqli_stmt_num_rows($stmt) == 1) {
    header("Location: pagina.html");
    exit;
}

echo "<script>alert('Usuario incorrecto');</script>";
echo "<script>window.location.href='login.html';</script>";