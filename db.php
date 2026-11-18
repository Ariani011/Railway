<?php
$host = getenv("MYSQLHOST")     ?: "localhost";
$user = getenv("MYSQLUSER")     ?: "root";
$pass = getenv("MYSQLPASSWORD") ?: "";
$db   = getenv("MYSQLDATABASE") ?: "academia";
$port = getenv("MYSQLPORT")     ?: 3307;

$con = mysqli_connect($host, $user, $pass, $db, $port) or die("Problemas al conectar");