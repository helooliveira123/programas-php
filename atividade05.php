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
    <title>Atividade 05</title>
</head>
<body>
    <main class="conteudo">
        <form method="post" class="formulario">
            <p id="titulo">CONVERSOR (m - cm)</p>
            <div class="campo">
                <input type="text" placeholder="Digite o valor em metros" name="valorM">
            </div>
            <div class="btn">
                <input type="submit" value="Calcular">
            </div>
            <?php
                if($_POST){
                    $vm=$_POST['valorM'];
                    $vcm=100*$vm;
                    print("<p>$vm m é igual a $vcm cm</p>");
                }
            ?>
        </form>
    </main>
</body>
</html>