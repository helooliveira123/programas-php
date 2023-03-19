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
    <title>Atividade 01</title>
</head>
<body>
    <main class="conteudo">
        <form method="post" class="formulario">
            <p id="titulo">OPERAÇÕES</p>
            <div class="campo">
                <input type="text" placeholder="Digite um número" name="valor1">
            </div>
            <div class="campo">
                <input type="text" placeholder="Digite um número" name="valor2">
            </div>
            <div class="btn">
                <input type="submit" value="-" name="btn1">
                <input class="btns" type="submit" value="+" name="btn2">
                <input class="btns" type="submit" value="X" name="btn3">
                <input class="btns" type="submit" value="/" name="btn4">
                <input class="btns" type="submit" value="* *" name="btn5">
            </div>
            <?php
                if ($_POST){
                    $v1=$_POST['valor1'];
                    $v2=$_POST['valor2'];
                    if (isset($_POST['btn1'])){
                        $subtracao=$v1-$v2;
                        print("<p>$v1 - $v2 é igual a $subtracao.</p>");
                    }
                    else if (isset($_POST['btn2'])){
                        $adicao=$v1+$v2;
                        print("<p>$v1 + $v2 é igual a $adicao.</p>");
                    }
                    else if (isset($_POST['btn3'])){
                        $multiplicacao=$v1*$v2;
                        print("<p>$v1 x $v2 é igual a $multiplicacao.</p>");
                    }
                    else if (isset($_POST['btn4'])){
                        $divisao=$v1/$v2;
                        print("<p>$v1 / $v2 é igual a $divisao.</p>");
                    }
                    else {
                        $potenciacao=pow($v1, $v2);
                        print("<p>$v1 elevado a $v2 é igual a $potenciacao.</p>");
                    }
                }
            ?>
        </form>
    </main>
</body>
</html>