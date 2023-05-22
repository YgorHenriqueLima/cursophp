<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sorteador de numeros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>insira dois numeros para sortear o numero entre eles, do mínimo ao máximo</h1>
        
        <form method="get">
            <label for="numero1">insira o primeiro numero:</label>
            <input type="number" name="numero1" id="idnumero1" required>
            <label for="numero2">insira o segundo numero:</label>
            <input type="number" name="numero2" id="idnumero2" required>
            <input type="submit" value="Sortear">
        </form>

        <?php 
        $numero1 = $_GET["numero1"] ?? 0;
        $numero2 = $_GET["numero2"] ?? 0;
            if ($numero2 < $numero1) {
            $resultado = mt_rand($numero2, $numero1);
            echo "<h2>Trabalhando com números</ h2><p>Gerando um número aleatório entre $numero1 e $numero2 ...<br> O valor gerado foi <strong>$resultado</strong> </p>";

            echo "<button onclick="."javascript:document.location.reload()".">Gerar outro</button>";
            }
        ?>
    </main>
  
</body>
</html>