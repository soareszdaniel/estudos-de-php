<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Informe seu sexo: <input type="text" name="sexo" id="sexo" required><br>
        Informe sual altura (em metros): <input type="text" name="altura" id="altura" required>
        <input type="submit" value="Calcular IMC" name="acao">
    </form>
    <?php   
        if(isset($_POST['acao'])){
            $sexo = $_POST['sexo'];
            $altura = $_POST['altura'];
            if($sexo == "masculino"){
                echo "Seu peso ideal é: " . (62.1 * $altura) - 44.7;
            }else{
                echo "Seu peso ideal é: " . (72.2 * $altura) - 58;
            }
        }
    ?>
</body>
</html>