<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Teste</title>
    <style>
        h2 {
            color: cadetblue;
            text-shadow: 1px 1px brown;
        }
    </style>
</head>
<body>
    <h1> Página Inicial em PHP</h1>

    <?php echo "<h2> Primeiros passos e detalhes da linguagem <h2/>"; ?>

<?php echo "Essas são as primeiras linhas de um código na linguagem PHP. Nesta linguagem, todas as varíáveis se iniciam com um '$'. Além disso, 
é necessário ressaltar que na linguagem PHP há a diferenciação entre letras maiúsculas e minúsculas. Dessa forma, todas a variáveis serão escritas 
com letras minúsculas. <br>
Outro detalhe interessante é que nesse tipo de linguagem, não existe declaração de varíável assim como na linguagem Java, por exemplo. (String,
Inteiro, Real ou Booleano). O PHP faz essa identificação automaticamente assim que atribuimos o valor a uma determinada variável. Trata-se de 
um recurso chamado de 'coerção'.  ";

?>
</body>
</html>