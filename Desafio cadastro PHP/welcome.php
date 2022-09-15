<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: index.php");
        exit;
    }
?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center;}
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Benvindo ao site.</h1>
    </div>
    <p>
        <!-- -->
        <a href="cadastro.php" class="btn btn-primary">Cadastro Pessoas</a>
        <br><br>
        
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>

    <?php
        if(file_exists("cadastro.txt")){
            $handle = fopen("cadastro.txt", "rb");
            if (FALSE === $handle) {
                exit("Failed to open stream to URL");
            }
            $contents = '';
            $contents = fread($handle, 8192);
            gettype($contents);
            echo "<br><br><p style='margin: 50px;padding: 50px;'>$contents</p>";
            
            fclose($handle);
        }

    ?>
</body>
</html>