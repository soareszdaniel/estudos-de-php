<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Trabalhando com números aleatórios<br>";
        if(isset($_POST['acao'])){
            echo "Gerando um número aleatório entre 1 e 100<br>";
            echo "O valor gerado foi: " . rand(0, 100);
        }
    ?>
    <form action="" method="post">
        <input type="submit" value="Gerar número" name="acao">
    </form>
</body>
</html>