<?php

require_once('../dados_banco.php');

// Criar Conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar Conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$sql = "INSERT INTO authors (firstname, lastname)
VALUES ('John', 'Doe')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>