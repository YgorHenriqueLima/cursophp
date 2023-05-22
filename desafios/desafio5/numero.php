<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>analisador de numero real</h1>
        <?php 
           $num = $_POST["n"] ?? 0;
           echo "<p>analisando o numero <strong>" . number_format($num, 3, "," , "."). "</strong> informado pelo usuário: </p>";
           $valor_inteiro = (int) $num;
           $valor_fracionado = $num - $valor_inteiro;

           //fazendo uma lista para analisar os valores inteiros e flutuantes (decimais)
           echo "<ul>
                    <li> A parte inteira do numero é <strong>" . number_format($valor_inteiro, 0, "," , ".") . "</strong></li>
                    <li> A parte fracionaria do número é <strong>" . number_format($valor_fracionado, 3, ",",".") . "</strong></li>
                 </ul>";
        ?>
        <button onclick="javasript:history.go(-1)">voltar</button>
    </main>
</body>
</html>