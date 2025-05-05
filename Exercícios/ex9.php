<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Informe uma base: <input type="number" name="num" id="num" required>
        Informe um expoente máximo: <input type="number" name="exp" id="exp" required>
        <input type="submit" value="Calcular" name="acao">
    </form>
    <?php
        
        function calcularPotencias($num, $exp){
            $potencias = [];
            for ($i = 1; $i <= $exp; $i++){
                array_push($potencias, pow($num, $i));
            }
            return $potencias;
        }
    
        if(isset($_POST['acao'])){
            $num = $_POST['num'];
            $exp = $_POST['exp'];
            $potencias = calcularPotencias($num, $exp);
            echo "As potências de $num até o expoente $exp são: ";
            foreach($potencias as $potencia){
                echo "$potencia ";
            }
        }
    ?>
</body>
</html>