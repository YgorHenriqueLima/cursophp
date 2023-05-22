<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de string</title>
</head>
<body>
    <p>exemplo de formatação de string, interpretação de variável e a diferença entre aspas simples e aspas duplas</p>
    <?php
       /*interpretando a variável*/
       $nome = "João";
       $sobrenome = "Carlos";
       echo "$nome$sobrenome \u{1F596} <br>"; # do jeito certo interpretando as variáveis e o caracter especial
       echo '$nome$sobrenome \u{1F596} <br>';
       # sem interpretação nenhuma, tanto do caracteres especiais, quanto das variáveis

       /*utilizando constante*/
       const CANAL = "Curso em vídeo \u{1F499} <br>";
       echo "Eu gosto do " . CANAL; # O CERTO
       echo "Eu gosto do CANAL <br>"; # do jeito errado 1

       echo "Estamos no ano de <br> " . date("Y <br><br>");

       $nome2 = "Gustavo";
       $sobrenome2 = "Guanabara";
       $apelido = "Gafanhoto";
       echo "$nome \"$apelido\" $sobrenome";
    ?>
</body>
</html>