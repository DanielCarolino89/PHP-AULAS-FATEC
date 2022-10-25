<?php

require_once('../dados_banco.php');

// Criar Conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar Conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$sql = "UPDATE authors SET lastname='Doe' WHERE authorID=1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>