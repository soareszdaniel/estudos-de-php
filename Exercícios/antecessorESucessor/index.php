<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Informe um número: <input type="number" name="num" id="num" required>
        <input type="submit" value="Calcular" name="acao">
    </form>

    <?php
        if(isset($_POST['acao'])){
            $num = $_POST['num'];
            echo "Resultado Final:<br>";
            echo "O número escolhido foi $num <br>";
            echo "O seu antecessor é " . ($num - 1) . "<br>";
            echo "O seu sucessor é " . ($num + 1);
        }
    ?>
</body>
</html>