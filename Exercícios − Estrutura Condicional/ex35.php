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
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $escolha = $_POST['escolha'];
            switch($escolha){
                case 1:
                    echo "A média entre os valores é: " . ($valor1 + $valor2) /2;
                    break;
                case 2:
                    if($valor1 > $valor2){
                        $maior = $valor1;
                        $menor = $valor2;
                    }else{
                        $maior = $valor2;
                        $menor = $valor1;
                    }
                    echo "A diferença do maior pelo maior é: " . $maior - $menor;
                    break;
                case 3:
                    echo "O produto entre os números digitados: " . $valor1 * $valor2;
                    break;
                case 4:
                    echo "A divisão do primeiro pelo segundo é: " . $valor1 / $valor2;
                    break;
                default:
                    echo "Escolha uma opção válida!";
                    break;
                }
                
        }
    ?>
    <form action="" method="post">
        Valor 1: <input type="number" name="valor1" id="valor1" required>
        Valor 2: <input type="number" name="valor2" id="valor2" required>
        Escolha: <input type="number" name="escolha" id="escolha" required>
        <input type="submit" value="Calcular" name='acao'><br>
    </form>
    1 - Média entre os valores <br>
    2 - Diferença do maior pelo menor <br>
    3 - Produto entre os números digitados <br>
    4 - Divisão do primeiro pelo segundo
</body>
</html>