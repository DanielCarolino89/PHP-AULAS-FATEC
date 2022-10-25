<?php

require_once('../dados_banco.php');

// Criar Conexão
$conn = mysqli_connect($servername, $username, $password);

// Checar Conexão
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>