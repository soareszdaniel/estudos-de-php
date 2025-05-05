<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post"> 
        Informe o valor da compra: <input type="number" name="num" id="num" required>
        <input type="submit" value="Calcular" name="acao">
    </form>
    <?php
        function calcularDescont($num){
            if($num > 5000){
                return $num - ($num * (20 / 100));
            }else{
                return $num - ($num * (15 / 100));
            }
        }

        if(isset($_POST['acao'])){
            $num = $_POST['num'];
            echo "O valor da compracom desconto é: R$" . calcularDescont($num);
        }
    ?>
</body>
</html>
