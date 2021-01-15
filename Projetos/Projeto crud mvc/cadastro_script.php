<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <title>Cadastro projeto MR - Valmir</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <?php
            include "conexao_banco.php";

            $nome = $_POST["nome"];
            $endereco= $_POST["endereco"];
            $dt_nascimento= $_POST["dt_nascimento"];
            $email= $_POST["email"];
            $telefone= $_POST["telefone"];
            $crm= $_POST["crm"];
            $formacao= $_POST["formacao"];
            $especialidade= $_POST["especialidade"];
            $anos_atuacao= $_POST["anos_atuacao"];

            $sql = "INSERT INTO `medicos`(nome`, `endereco`, `dt_nascimento`, `email`, `telefone`, `crm`, 
    `formacao`, `especialidade`, `anos_atuacao`) VALUES ('$nome','$endereco','$dt_nascimento','$email',
    '$telefone','$crm','$formacao','$especialidade','$anos_atuacao')";

            if (mysqli_query($conn, $sql)) {
                echo "Cadastro realizado com sucesso!";
            } else
                echo "<h3>Falha no cadastro. Por favor, tente novamente.</h3>"

            ?>
       <div/>
    <div/>

</body>
</html>



