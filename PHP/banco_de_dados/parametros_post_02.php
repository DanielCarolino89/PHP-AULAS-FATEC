<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via POST</title>
</head>
<body>
<?php
require_once('dados_banco.php');

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO authors (firstname, lastname)
VALUES ('$firstName', '$lastName')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




function validar_post($dado_enviado){
    if(isset($dado_enviado) and $dado_enviado <> ""){
        return TRUE;
    }
    return FALSE;
}

if(validar_post($_POST['firstName']) and validar_post($_POST['lastName'])){
    echo '<br><br>';
    echo 'Nome: '.$_POST['firstName'];
    echo '<br><br>';
    echo 'Sobrenome: '.$_POST['lastName'];
    /*
    Inserir os dados no banco de dados MySQL
    */

}

// Criar Conexão

?>
</body>
</html>