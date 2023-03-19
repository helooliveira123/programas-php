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
    <title>Atividade 03</title>
</head>
<body>
    <main class="conteudo">
        <form method="post" class="formulario">
            <p id="titulo">MÉDIA FINAL</p>
            <div class="campo">
                <input type="text" placeholder="Digite sua nota" name="nota1">
            </div>
            <div class="campo">
                <input type="text" placeholder="Digite sua nota" name="nota2">
            </div>
            <div class="campo">
                <input type="text" placeholder="Digite sua nota" name="nota3">
            </div>
            <div class="btn">
                <input type="submit" value="Calcular">
            </div>
            <?php
                if($_POST){
                    $n1=$_POST['nota1'];
                    $n2=$_POST['nota2'];
                    $n3=$_POST['nota3'];
                    $m=($n1*2)+($n2*3)+($n3*5);
                    $mediaFinal=$m/10;
                    print("<p>Sua média final é $mediaFinal</p>");
                }
            ?>
        </form>
    </main>
</body>
</html>