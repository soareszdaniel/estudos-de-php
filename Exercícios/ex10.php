<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selecione um produto e informe a quantidade desejada</h1>
    <form action="" method="post">
        <input type="checkbox" name="camiseta" id="camiseta"> Camiseta <br>
        Quantidade: <input type="number" name="qtd_camiseta" id="qtd_camiseta">
        <br><input type="submit" value="Verificar" name="acao">
    </form>
    <?php
        function atualizarEstoque(&$estoque, $produto, $qtd) {
            if(array_key_exists($produto, $estoque)) {
                if($estoque[$produto] >= $qtd) {
                    $estoque[$produto] -= $qtd;
                    return true;
                } else {
                    echo "<p>Erro: Quantidade indisponível em estoque!</p>";
                }
            }
            return false;
        }
        $estoque = [
            "camiseta" => 10
        ];
        $produtos = [];
        if(isset($_POST['acao'])){
            $camiseta = isset($_POST['camiseta']);
            $qtd_camiseta = $_POST['qtd_camiseta'];
            if($camiseta){
                $produtos["camiseta"] = $qtd_camiseta;
            }
            echo "Quantidade do estoque antes<br>";
            foreach($estoque as $produto => $quantidade){
                echo "$produto: $quantidade";
            }
            echo "Quantidade do estoque depois<br>";
            atualizarEstoque($estoque, $produtos, $qtd_camiseta);
        }
    ?>
</body>
</html>