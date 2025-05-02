<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conversor de moedar v1.0</h1>
    <form action="" method="post">
        Quantos R$ você tem na carteira? <input type="number" name="num" id="num" required>
        <input type="submit" value="Converter" name="acao">
    </form>
    <?php
        if(isset($_POST['acao'])){
            $num = $_POST['num'];
            echo "Seus R$$num equivalem a US$" . (0.18 * $num);
        }
    ?>
</body>
</html>