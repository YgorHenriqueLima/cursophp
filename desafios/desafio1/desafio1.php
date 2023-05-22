<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>analisador de numeros no antecessor e sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>resultado final</h1>
    </header>
    <main>
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $valor = intval($_POST["valor"]);

                //calcular o antecessor e sucessor
                $antecessor = $valor - 1;
                $sucessor =  $valor + 1;


                //mostrando resultado na tela
                echo "o antecessor de $valor é $antecessor" . PHP_EOL;
                echo "o sucessor de $valor é $sucessor" . PHP_EOL;

            }
        ?>
    </main>
</body>
</html>