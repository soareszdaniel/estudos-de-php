<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - POO</title>
</head>
<body>
    <pre>
    <?php
        require_once "Caneta.php";
        $c1 = new Caneta("Bic", 0.5, "Azul");
        $c2 = new Caneta("Faber Castell", 0.7, "Preta");
       
        print_r($c1);
        print_r($c2);
    ?>
    </pre>
</body>
</html>