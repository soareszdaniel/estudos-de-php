<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Informe a tmperatura em celsius: <input type="number" name="num" id="num" required>
    </form>
    <?php
        if(isset($_POST['num'])){
            $num = $_POST['num'];
            $farehreit = ((9 * $num) / 5) + 32;
            echo "Fahrenheit: $farehreit";
        }
    ?>
</body>
</html>