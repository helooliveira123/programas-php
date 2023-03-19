<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Ícone-->
    <link rel="icon" type="image/png" href="favicon.png"/>
    <!--Style css-->
    <link rel="stylesheet" href="css/atividades.css">
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>Atividade 02</title>
</head>
<body>
    <main class="conteudo">
        <form method="post" class="formulario">
            <p id="titulo">TROCA DE VALORES</p>
            <div class="campo">
                <input type="text" placeholder="Digite um número" name="valor1">
            </div>
            <div class="campo">
                <input type="text" placeholder="Digite um número" name="valor2">
            </div>
            <div class="btn">
                <input type="submit" value="Trocar">
            </div>
            <?php
                if($_POST){
                    $v1=$_POST['valor1'];
                    $v2=$_POST['valor2'];
                    $v1=$v1 + $v2;
                    $v2=$v1 - $v2;
                    $v1=$v1 - $v2;
                    $v2=$_POST['valor1'];
                    print("<p>1° valor: $v1<br>2° valor: $v2</p>");
                }
            ?>
        </form>
    </main>
</body>
</html>