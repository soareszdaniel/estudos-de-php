<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST"){
            $valor1 = (int) ($_POST["valor1"]);
            $valor2 = (int) ($_POST["valor2"]);

            echo $resultado = $valor1 + $valor2;
        }
    ?>
    <form action="" method="post">
        <label for = "valor1">Primeiro valor:</label>
        <input type = "number" name = "valor1" id = "valor1" required>
        <label for = "valor2">Segundo Valor</label>
        <input type = "number" name = "valor2" id = "valor2" required>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>