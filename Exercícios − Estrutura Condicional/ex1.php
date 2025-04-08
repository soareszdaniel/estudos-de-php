<!DOCTYPE html>
<html>
<head>
    <title>Soma de Valores</title>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $valor1 = (int) ($_POST['valor1'] ?? 0);
            $valor2 = (int) ($_POST['valor2'] ?? 0);
            
            $resultado = $valor1 + $valor2;
            
            if ($resultado > 10) {
                echo "O resultado da adição é: " . $resultado;
            } else {
                echo "O resultado não é maior que 10.";
            }
            exit;
        }
    ?>
    <form method="POST">
        <label for="valor1">Primeiro valor:</label>
        <input type="number" name="valor1" id="valor1" required>
        
        <label for="valor2">Segundo valor:</label>
        <input type="number" name="valor2" id="valor2" required>
        
        <button type="submit">Calcular</button>
    </form>
</body>
</html>