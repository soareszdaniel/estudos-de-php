<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao'])){
            $valor = $_POST['valor'];
            if($valor % 3 == 0 && $valor % 7 == 0){
                echo "É divisível por 3 e 7";
            } else{
                echo "Não é divisivel por 3 e 7";
            }
        }
    ?>
    <form action="" method="post">
        Valor: <input type="number" name="valor" id = "valor" required>
        <input type="submit" value="Verificar" name='acao'>
    </form>
</body>
</html>