<?php
    $server = "localhost";
    $bd = "cadastro_medico";

    if ($conn = mysqli_connect($server, $bd)) {
        echo "Conectado com sucesso!";
    } else
        echo "Conexão falhou."
?>
