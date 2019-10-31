<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "crud";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf-8");

// Clear - Previne contra SQL injection e Cross Site Scripting
function clear($input)
{
    global $connect;
    // sql
    $var = mysqli_escape_string($connect, $input);
    // xss
    $var = htmlspecialchars($var);
    return $var;
}

if (mysqli_connect_error()) {
    echo "Erro na conexão: " . mysqli_connect_error();
}
