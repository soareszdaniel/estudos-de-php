<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Digite o primeiro valor: <input type="number" name="num1" id="num1" required><br>
        Digite o segundo número: <input type="number" name="num2" id="num2" required><br>
        Digite o número divisor: <input type="number" name="div" id="div" required><br>
        <input type="submit" value="Calcular" name="acao">
    </form>
    <?php
        $divisores = [];
        if(isset($_POST['acao'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $div = $_POST['div'];
            for ($i = $num1; $i <= $num2; $i++){
                if($i % $div == 0){
                    array_push($divisores, $i);
                }
            }
            echo "Os divisores de $div entre $num1 e $num2 são: ";
            foreach($divisores as $divisor){
                echo "$divisor ";
            }
        }
    ?>
</body>
</html>