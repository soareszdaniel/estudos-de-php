<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Informe o primeiro número: <input type="number" name="num1" id="num1" required>
        Informe o segundo número: <input type="number" name="num2" id="num2" required>
        <input type="submit" value="Calcular" name="acao">
    </form>
    <?php
        $pares = [];
        if(isset($_POST['acao'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            for ($i = $num1; $i <= $num2; $i++){
                if($i % 2 == 0){
                    array_push($pares, $i);
                }
            }
            foreach($pares as $par){
                echo "$par ";
            }
        }
    ?>
</body>
</html>