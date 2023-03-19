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
    <title>Atividade 06</title>
</head>
<body>
    <main class="conteudo">
        <form method="post" class="formulario" id="form6">
            <p id="titulo">TEMPO DE DOWNLOAD</p>
            <div class="campo">
                <input type="text" placeholder="Digite o tamanho do arquivo (mb)" name="tArquivo"><br>
            </div>
            <div class="campo">
                <input type="text" placeholder="Digite a velocidade (mbps)" name="vLink"><br>
            </div>
            <div class="btn">
                <input type="submit" value="Calcular">
            </div>
            <?php
                if($_POST){
                    $tArquivo=$_POST['tArquivo'];
                    $vLink=$_POST['vLink'];
                    $tSegundos=$tArquivo/($vLink/8);
                    $tMinutos=$tSegundos/60;
                    print("<p>O tempo aproximado do download é de $tMinutos minutos ($tSegundos segundos).</p>");
                }
            ?>
        </form>

    </main>
</body>
</html>